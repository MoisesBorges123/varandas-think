# Varandas Bar e Lanchonete — Contexto do Projeto

Este arquivo é lido automaticamente pelo Claude Code no início de cada sessão.
Ele consolida TODAS as regras de negócio e decisões arquiteturais definidas em
duas sessões extensas de levantamento de requisitos (não gere código sem
entender essas regras primeiro). O usuário se comunica normalmente por voz
transcrita, então se algo aqui parecer picotado, é resíduo de transcrição —
o conteúdo já foi revisado e consolidado.

## Status do projeto

Estamos na fase de modelagem/planejamento. Nenhuma linha de código de
produção foi escrita ainda (existe um protótipo antigo de Models/Services
gerado prematuramente numa etapa anterior, mas ele está desatualizado e não
deve ser usado como referência — várias entidades e regras mudaram desde
então). **Não inicie a implementação sem alinhar comigo o plano antes.**

## Stack tecnológica

- Backend: **PHP 8.2**, **Laravel 12**
- Frontend reativo: **Livewire 3.x**
- Bibliotecas de UX/UI: **Admitro** (template base inicial em `resources/template-base/admitro/`)
- Pagamentos: Mercado Pago (API Point para maquininhas físicas + Checkout
  para celular/Pix)
- Ambiente local: Docker Compose (container único `app` rodando `php artisan
  serve`, sem Nginx separado — ver `INSTALL.md`)

### Arquitetura de Templates (Desacoplamento de Layout)

**Decisão arquitetural:** Sistema de templates **completamente desacoplado** 
para permitir troca fácil de layout futuramente sem reescrever views.

**Implementação:**

1. **Component base de layout** (`layout-admitro` ou nome genérico):
   ```blade
   <x-dynamic-component :component="'layouts.template.' . config('view.template')">
       {{ $slot }}
   </x-dynamic-component>
   ```

2. **Configuração em `config/view.php`**:
   ```php
   return [
       'paths' => [resource_path('views')],
       'template' => env('APP_TEMPLATE', 'admitro'), // ou 'default'
       'compiled' => env('VIEW_COMPILED_PATH', realpath(storage_path('framework/views'))),
   ];
   ```

3. **Variável de ambiente `.env`**:
   ```
   APP_TEMPLATE=admitro
   ```

4. **Estrutura de diretórios**:
   ```
   resources/views/layouts/template/
   ├── admitro/           # Template atual (Admitro)
   │   ├── app.blade.php
   │   ├── guest.blade.php
   │   └── ...
   ├── outro-template/    # Futuro template alternativo
   │   ├── app.blade.php
   │   └── ...
   ```

**Benefícios:**
- Troca de template apenas mudando variável `.env`
- Cada template é autocontido em sua pasta
- Views de negócio não conhecem detalhes do template específico
- Facilita A/B testing de layouts ou rebranding

---

## 1. Visão geral do sistema

Sistema de gestão para um bar e lanchonete, cobrindo: cardápio e categorias,
estoque de insumos, comandas/mesas, fluxo de pedidos com aprovação,
pagamentos (integrados ao Mercado Pago), papel do balcão como centro de
comando, venda avulsa de balcão (doces/balcão sem comanda), importação
automatizada de notas fiscais, e um sistema de permissões granular por
perfil de usuário.

---

## 2. Cardápio, preços e categorias

- Produtos são organizados por **categorias**, e cada categoria tem um
  **destino de impressão**: `cozinha`, `bar`/`balcao`, ou `nenhum` (para
  produtos sem preparo, ex.: venda avulsa de balcão).
- **Preço é histórico**: nunca sofre `UPDATE`. Toda alteração de preço insere
  um novo registro em `precos_produtos`. O "preço atual" é sempre o registro
  mais recente. Isso garante que comandas já fechadas mantenham o valor que
  foi realmente cobrado na época.
- Três camadas independentes que controlam se um produto pode ser vendido —
  **as três precisam passar** para a venda ser permitida:
  1. **Ativo/Inativo**: praticamente permanente — o produto existe ou não no
     cardápio (descontinuado ou não).
  2. **Disponível/Indisponível**: controle manual do dia a dia (balcão ou
     admin liga/desliga na hora — "acabou o insumo", "quebrou o
     equipamento", "cozinheiro faltou"). Ignora completamente o que a conta
     de estoque diria.
  3. **Validação automática de estoque** (baseada em receita e
     movimentação): **opcional, configurável via toggle geral do sistema**.
     Quando ligada, checa se há ingredientes suficientes em dois momentos
     (ver seção de Pedidos). Quando desligada, o sistema confia que o
     produto ativo+disponível pode ser vendido sem fazer conta de
     ingrediente nenhuma.

---

## 3. Estoque e insumos

- Estoque é controlado por **ingredientes**, não por produto final
  diretamente.
- Cada produto vendável pode ter uma **receita** (ficha técnica): lista de
  ingredientes e quantidades consumidas para produzi-lo.
- **O estoque NUNCA é uma coluna de saldo fixo.** É sempre calculado a partir
  do histórico de `movimentacoes_estoque` (entradas de compras, saídas de
  vendas/receitas), como um ledger append-only — nunca é alterado
  retroativamente, apenas compensado com novos lançamentos.

### 3.1 Grupos de equivalência de insumos (NOVO)

- Cada código fiscal de nota fiscal continua sendo cadastrado como um
  insumo próprio em `ingredientes` (ex.: cenoura código X e código Y são
  registros separados).
- Mas pode ser vinculado a um **grupo de equivalência**
  (`grupos_equivalencia`) que representa o insumo genérico usado nas
  receitas (ex.: ambos os códigos apontam para o grupo "cenoura").
- A baixa de estoque nas receitas consome do **saldo consolidado do grupo**,
  não do insumo específico.
- **Critério de baixa entre lotes/códigos diferentes do mesmo grupo: PEPS**
  (primeiro que entra, primeiro que sai) por padrão, **mas sem rastreamento
  fino de lote** — controla-se apenas o saldo total genérico do grupo
  (decisão explícita para evitar burocracia).
- **Custo do insumo para cálculo de margem**: **custo médio ponderado** pela
  quantidade de cada compra, recalculado automaticamente a cada nova
  entrada. Campo `custo_medio_ponderado` no grupo de equivalência.
- **Alerta de pendência**: quando um insumo novo é auto-cadastrado via
  importação de nota fiscal, ele nasce **sem grupo de equivalência
  vinculado**. O sistema deve gerar um alerta de pendência ("insumo novo sem
  grupo definido"). *(Canal do alerta ainda não decidido — ponto em
  aberto: notificação no sistema? e-mail? decidir antes de implementar.)*

### 3.2 Venda avulsa de balcão (doces, balas, chocolates)

- Fluxo **completamente separado** do fluxo de comanda/mesa — venda rápida
  e direta, sem vínculo com cliente identificado, sem aprovação. O
  balconista clica no produto, confirma, e o sistema já dá baixa e registra
  pagamento, tudo em poucos toques (tipo mini-PDV).
- Esses produtos entram na mesma tabela de produtos/categorias, mas numa
  categoria sem receita/preparo.
- **Conversão de unidade de compra para unidade de venda**: compra-se em
  uma unidade (ex.: peso em gramas — pacote de 500g) e vende-se em outra
  (ex.: unidade — 200 balas). A proporção **não é fixa**, varia por produto
  (ex.: pacote de bala de maçã 500g rende 200 balas; pacote de outra marca
  300g rende 100 balas). Cada produto de venda avulsa precisa de sua própria
  taxa de conversão cadastrada (tabela `conversoes_produto`), tipo uma ficha
  técnica simplificada.
- **Venda avulsa NÃO bloqueia por falta de estoque**: saldo pode ficar
  negativo temporariamente e se normaliza quando entrar a próxima compra via
  nota fiscal.
- Cenário de um mesmo produto (ex. bala de goma) ser insumo de receita E
  produto de venda avulsa simultaneamente foi descartado como irrelevante
  (nunca aconteceu na operação real) — os saldos permanecem sempre
  separados por saldo próprio.

---

## 4. Comandas, mesas e fluxo de pedidos

### 4.1 Abertura de comanda

- **Duas formas de abrir**: o garçom abre diretamente, OU o cliente abre a
  própria comanda escaneando um **QR code na mesa**, se identificando com
  **nome, CPF e telefone**.
- A comanda é uma **sessão contínua**: fica aberta enquanto o cliente estiver
  na mesa, e só se encerra por ação explícita — o cliente pedindo para
  fechar pelo celular, ou o garçom fechando manualmente. **Comanda pode
  continuar aberta e recebendo novos itens mesmo depois de já ter recebido
  pagamento(s) parcial(is)** — só fecha quando o saldo total (considerando
  itens antigos e novos) zera, ou por encerramento manual.
- Uma mesa pode ter:
  - **Comanda individual** por pessoa, OU
  - **Comanda compartilhada** entre várias pessoas da mesma mesa.
- Em comanda compartilhada, cada item pedido é **etiquetado com o nome de
  quem pediu** (seja porque a pessoa se identificou pelo app, seja porque o
  garçom registrou manualmente ao lançar o item). Isso permite depois
  dividir a conta de duas formas: rateio igual entre todos, OU baseado
  exatamente no que cada um consumiu.

### 4.2 Fluxo de aprovação

- Pedido lançado **diretamente pelo garçom**: vai direto para cozinha/bar,
  **sem** etapa de aprovação intermediária.
- Pedido feito **pelo cliente via celular (QR code)**: cai numa **fila de
  aprovação** de um garçom, que pode **aprovar** (libera para cozinha/bar)
  ou **rejeitar**.
  - Se a mesa tem **garçom atribuído**: o pedido é **exclusivo** daquele
    garçom decidir. O balcão sempre vê tudo, como camada extra de
    supervisão.
  - Se a mesa **não tem garçom atribuído**: o pedido fica disponível para
    **qualquer garçom cadastrado** aprovar/rejeitar. O balcão também vê.
- **Rejeição ao cliente**: nunca usar linguagem técnica tipo "pedido
  rejeitado". Usar mensagem gentil, sem assustar — algo como "nosso garçom
  vai até sua mesa pra te ajudar com seu pedido", sem citar rejeição
  explicitamente. A mesma mensagem gentil se aplica quando o pedido é
  automaticamente marcado como indisponível por falha de estoque na
  aprovação.
- **Concorrência na aprovação (trava otimista)**: pedido tem um `status`
  (`pendente`, `aprovado`, `rejeitado`, etc.). A operação de aprovar só
  funciona se, no momento exato da escrita, o status ainda estiver
  `pendente`. Se dois garçons tentarem aprovar ao mesmo tempo, o banco só
  deixa um vencer (escrita atômica); o outro recebe "esse pedido já foi
  resolvido por outro colega" e a tela atualiza sozinha (idealmente via
  broadcast em tempo real, para o pedido sumir da tela dos outros garçons
  imediatamente). **Decisão explícita: trava otimista, não pessimista** (para
  não deixar pedidos presos se um garçom sair sem finalizar).

### 4.3 Validação de estoque no fluxo de pedidos (quando a validação automática está ligada)

- Checagem em **dois momentos**:
  1. Quando o cliente faz o pedido pelo celular (evita frustração cedo).
  2. **Obrigatoriamente** no momento em que o garçom aprova (pega qualquer
     mudança de estoque ocorrida no intervalo).
- **Se a validação falhar no momento da aprovação** (estoque zerou no
  intervalo): o pedido é **automaticamente marcado como indisponível**, o
  cliente recebe a mesma mensagem gentil de rejeição, e o **garçom fica
  livre** para ir repor o insumo (não fica pendente esperando decisão).

### 4.4 Geolocalização (trava de segurança do cliente)

- O acesso do cliente à comanda pelo link do QR code é condicionado a duas
  coisas: **estar geograficamente dentro do raio configurável do bar**, E **a
  comanda ainda estar aberta**. Fora disso (por distância ou porque já foi
  paga), o link trava e mostra mensagem tranquila, **sem expor nenhum dado**
  da comanda por trás (nem revela que existiu, para não ficar "espiável").
- **Raio configurável** (não fixo no código) — o dono ajusta conforme o
  espaço físico real (considerando varanda, calçada, etc.), porque bares
  costumam estar em áreas de GPS impreciso.
- **Timing de checagem**: valida na **abertura da comanda** e a cada
  **nova solicitação/pedido**, não em tempo real contínuo (para evitar falsos
  bloqueios por oscilação de GPS).

---

## 5. Papel do balcão

O balcão é o centro de comando operacional:

- Visão de **supervisor geral**: vê todos os pedidos e solicitações de
  clientes, acompanha a atuação de todos os garçons.
- Fluxo de produção: quando o garçom aprova um pedido, ele vai para uma tela
  na cozinha (painel/TV) para início do preparo. Quando a cozinha marca como
  **pronto**, quem recebe o aviso primeiro é o **balcão** (não o garçom
  direto) — o balcão finaliza a entrega (guardanapo, talheres, etc.) e só
  depois **sinaliza ao garçom** que já pode buscar.
- Bebidas (cerveja etc.) também passam pelo balcão como ponto de
  preparo/entrega — mesmo esquema de "destino de impressão", só que `bar`/
  `balcao` em vez de `cozinha`.
- **Impressora física**: recurso **extra/opcional**, não mais dependência
  crítica (decisão revisada na sessão 2 — cliente e garçom têm acesso à
  comanda em tempo real pelo app/celular, incluindo o QR Pix na tela).
  Quando usada: comanda impressa vem com **QR Code Pix já gerado com o valor
  exato daquela conta** — cliente escaneia, paga, sistema recebe confirmação
  via **webhook do Mercado Pago** e marca a comanda como paga/fechada
  automaticamente.

### 5.1 Tablet da Cozinha

**Interface dedicada** na cozinha (tablet/painel) para acompanhamento de
pedidos em tempo real.

**Funcionalidades:**
- **Notificação sonora** automática quando um novo pedido aprovado chega para
  preparo — alerta imediato para o cozinheiro(a).
- **Listagem de pedidos** em formato simples e operável:
  - **Letras grandes** e interface limpa (foco em legibilidade)
  - **Visualização de detalhes** do pedido (produto, quantidade, observações 
    do cliente, mesa/comanda)
  - Cards/tiles organizados por ordem de chegada ou prioridade
- **Dois botões principais** por pedido (grandes e visíveis):
  - **"Pedido Pronto"**: marca o item como pronto e notifica o **balcão**
    (não o garçom diretamente) para finalização/liberação.
  - **"Cancelar Pedido"**: permite cancelar um pedido já em preparo
    (ex.: insumo acabou durante o preparo, equipamento quebrou). Esta ação
    segue as **mesmas regras de permissão** definidas na seção 10 — só
    pode cancelar se tiver permissão para tal (normalmente apenas balcão ou
    admin podem cancelar depois de enviado à cozinha).
- **Atualização em tempo real**: novos pedidos aparecem automaticamente sem
  refresh manual (via broadcast/polling do Livewire).

**Design UX:**
- Interface **otimizada para touch** (tablet)
- Layout **responsivo** e adaptável
- **Cores de status** para identificação rápida (novo/em preparo/pronto)
- **Mínimo de cliques** para operações principais
- **Fácil de usar** mesmo em ambiente de alta pressão/movimento da cozinha

---

## 6. Pagamentos (integração Mercado Pago)

Três modalidades:

1. **API Point** — maquininha física vinculada à conta, em modo PDV. O
   sistema manda a ordem de cobrança com valor já preenchido direto para o
   terminal; cliente só aproxima/insere cartão e digita senha; confirmação
   volta via API.
2. **Celular do garçom/atendente** — funciona como maquininha (aproximação
   de cartão) OU gera QR Code Pix na hora, para quando as maquininhas
   físicas estiverem ocupadas.
3. **QR Pix impresso** — na comanda física, já com o valor exato; webhook
   confirma pagamento automaticamente.
4. Dinheiro: registrado manualmente no sistema.

### 6.1 Pagamento parcial em comanda compartilhada

- **Dois modos coexistem e precisam ser suportados**:
  - **Por itens específicos**: a pessoa/garçom seleciona exatamente quais
    itens da comanda estão sendo pagos. Por padrão, na tela do garçom, todos
    os itens não pagos aparecem **marcados** com o valor total pronto; para
    pagar só parte, desmarca os que não entram, e o valor recalcula
    automaticamente.
  - **Por valor livre**: alguém paga um valor solto (ex.: "vou pagar R$50
    agora") sem vincular a itens específicos — abate do saldo total como um
    crédito genérico.
- **Nome do pagador é um campo opcional** em ambos os modos (a pessoa
  digita/o garçom digita na hora).
- Cada pagamento parcial vira um **registro próprio** em `pagamentos`, com
  uma **tabela complementar** (`pagamentos_itens`) amarrando quais itens
  específicos aquele pagamento cobriu (quando aplicável).
- A comanda **permanece aberta** até o saldo total zerar ou até
  encerramento manual — mesmo que várias pessoas já tenham pago suas partes
  e uma delas tenha ido embora.
- O sistema deve mostrar um **extrato ao vivo**: quanto já foi pago, quanto
  falta, e quais itens especificamente ainda estão em aberto.

### 6.2 Ajustes de comanda (acréscimo/desconto pós-pagamento parcial)

- Cenário não existe hoje operacionalmente, mas pode existir no futuro.
- **Decisão**: estruturar no banco de dados (tabela `ajustes_comanda`
  preparada) mas **sem implementação no frontend por enquanto**.

---

## 7. Importação de notas fiscais (entrada de estoque)

Dois cenários de origem, mesma lógica geral:

1. **Nota fiscal de consumidor** (ex.: supermercado) — QR code aponta para o
   portal da Sefaz.
2. **Nota fiscal eletrônica de fornecedor** (ex.: distribuidora) — também
   tem chave de acesso/código de barras próprio.

Fluxo:

- Escaneia o QR code/código de barras → sistema busca os dados da nota.
- **Fornecedor**: identifica pelo CNPJ. Se já existe, usa o cadastro. Se
  não existe, **cadastra automaticamente**.
- **Insumos**: identifica cada item pelo **código fiscal padronizado**
  (código oficial da nota fiscal eletrônica, não um código interno de
  fornecedor — assim, mesmo produto de fornecedores diferentes é reconhecido
  como o mesmo insumo). Se o insumo já existe, soma na quantidade comprada.
  Se **não existe, cadastra automaticamente** — nome, unidade de medida,
  quantidade, preço, fornecedor — **sem revisão manual** antes de salvar
  (decisão explícita: entrada direta, sem etapa de confirmação).
- Usuário pode **desmarcar produtos que não são do bar** (compras mistas no
  mesmo cupom).
- **Salva o preço pago naquela compra específica** — isso alimenta o
  histórico em `itens_compra`, permitindo comparar depois: preço do mesmo
  insumo entre fornecedores diferentes, ao longo do tempo (ferramenta de
  gestão de compras, não só entrada de estoque).
- **Prevenção de duplicidade**: a **chave de acesso da nota fiscal** (única
  por nota) é conferida antes de processar qualquer importação. Se já existe
  no banco, bloqueia e avisa quando foi importada antes. Não há cenário
  legítimo de reimportação proposital da mesma nota.
- **Arquivo XML completo da nota é salvo no sistema de arquivos do
  servidor** (não dentro do banco) — o registro da compra no banco guarda
  apenas a **referência/caminho** para esse arquivo, para consulta futura
  (contabilidade, auditoria).

---

## 8. Timestamps e métricas

Registrar carimbos de tempo detalhados para permitir análise de gargalos e
performance depois:

- Por item de pedido: hora do pedido, hora que chegou na cozinha, hora que a
  cozinha marcou como pronto, hora que o balcão sinalizou liberado para o
  garçom retirar, hora de entrega.
- Por comanda: data/hora de abertura (para medir tempo de permanência no
  local) e data/hora de fechamento/pagamento.

---

## 9. Decisão sobre modo offline

**Decisão explícita: NÃO implementar modo offline.** O risco de queda de
internet será mitigado por **infraestrutura** (ex.: chip 4G de backup),
não por complexidade de sincronização local no sistema — construir
sincronização offline com resolução de conflito (especialmente combinado
com a trava otimista de aprovação) foi avaliado como complexidade
desproporcional ao problema.

---

## 10. Permissões — granularidade de cancelamento/exclusão

- Garçom **pode** cancelar item que **ele mesmo** lançou.
- Garçom **não pode** cancelar item lançado por outro colega — **mas isso é
  configurável/toggleável** no perfil, não regra fixa.
- Depois que um item já foi **enviado à cozinha ou marcado como pronto**,
  **só o balcão** pode cancelar — **regra fixa, não configurável** (envolve
  desperdício de insumo).
- Garçom excluir pedido que ele mesmo cadastrou: **configurável** (toggle).
- Garçom excluir pedido que **não** cadastrou: **configurável** (toggle,
  default **não**).
- **Só ADMINISTRADOR** pode promover outro usuário a administrador — regra
  fixa, não configurável, nível de acesso máximo. **Sem log de auditoria**
  para troca/atribuição de perfil administrador (decisão explícita — controle
  manual restrito a poucas pessoas de confiança).

### 10.1 Arquitetura do sistema de permissões (via PHP Attributes)

- Cada **classe/controller** que tiver ao menos uma função protegida recebe
  `#[HasPermissions('nome_do_modulo')]` no topo (ex.: `'cozinha'`,
  `'pedido'`, `'comanda'`) — define o módulo para agrupamento visual na tela
  de configuração.
- Cada **função sensível/crítica** recebe
  `#[PermissionName('CODIGO-Nome Legível')]` — abordagem pragmática, só
  ações sensíveis recebem tag, não todas as funções.
- **Código**: numérico de **6 dígitos fixos**, gerado automaticamente pelo
  **sistema** (nunca manualmente pelo dev), **nunca muda** depois de gerado
  — é o identificador permanente salvo no banco. O nome legível (após o
  traço) pode ser renomeado livremente sem quebrar vínculos em produção.
- **Geração do código**: via comando/scanner que roda em qualquer ambiente
  (local, teste, produção), sempre conferindo contra o banco daquele
  ambiente antes de gravar. Também roda **automaticamente** toda vez que a
  tela de configuração de permissões dos perfis é aberta.
- **Colisão de nome** no mesmo módulo: sistema completa exibição com nome do
  controller de origem entre parênteses e itálico (só visual, não afeta
  slug/código).
- **Colisão de geração simultânea do código de 6 dígitos**: resolvida com
  **índice único no banco** — trava otimista (mesma filosofia da aprovação
  de pedidos); se colidir, o comando sorteia outro número e tenta de novo.
- **PHP Attribute nativo** (não comentário de texto) — lido via reflection,
  erro explícito de sintaxe do PHP se usado errado.
- **Duas camadas de proteção separadas e complementares**, mesma fonte de
  permissões:
  - **(a) Rotas/controllers tradicionais**: middleware do Laravel,
    intercepta antes do controller executar, erro 413 com mensagem amigável.
  - **(b) Componentes Livewire**: **listener central/global** configurado
    uma única vez (não repete hook em cada componente), intercepta toda
    chamada de método de qualquer componente, verifica permissão, corta com
    413 + mensagem amigável. *(O usuário já tem essa solução funcionando em
    outro projeto — reaproveitar.)*
  - Analogia: middleware de rota = segurança na porta de entrada do prédio;
    listener Livewire = segurança em cada andar/ação específica.
- **Sessão expirada** não deve gerar mensagem de "sem permissão" (confusa) —
  checar primeiro se a sessão é válida; se não for, mostrar "sua sessão
  expirou, faça login novamente" e redirecionar; só depois checar permissão.
- **Implementação de código deste sistema (Attributes, scanner, middleware,
  listener Livewire, diretiva Blade) foi adiada** para a fase de
  construção/finalização — não implementar ainda sem pedido explícito.

---

## 11. Perfis de usuário

- **Administrador**: sempre com tudo liberado.
- **Balconista**
- **Cozinheiro(a)**
- **Garçom**

Ver matriz de permissões completa por módulo (comandas/mesas, pedidos/itens,
produtos/cardápio, estoque/insumos, compras/notas fiscais, venda avulsa,
pagamentos, usuários/perfis/configurações) no documento
`varandas-funcionalidades-e-permissoes.md` gerado anteriormente — deve estar
junto deste briefing na pasta do projeto.

---

## 12. Riscos sistêmicos já mapeados e resolvidos

| Risco | Resolução |
|---|---|
| Duas pessoas aprovando o mesmo pedido ao mesmo tempo | Trava otimista via status + índice/checagem atômica |
| Estoque zerar entre pedido e aprovação | Checagem dupla (no pedido e na aprovação) + parametrização on/off |
| Geolocalização imprecisa (GPS de rua/bar) | Raio configurável + checagem só em pontos-chave, não contínua |
| Pagamento parcial complexo em comanda compartilhada | Suporte a pagamento por item específico E por valor livre, nome opcional, extrato ao vivo |
| Duplicidade na importação de nota fiscal | Chave de acesso única indexada, bloqueia reimportação |
| Queda de internet | Resolvido via infraestrutura (4G backup), não modo offline |
| Colisão na geração de código de permissão | Índice único + retry (trava otimista) |

---

## 13. Anexos deste briefing

Os seguintes arquivos foram gerados nas sessões anteriores e estão salvos em
`./docs/` na raiz do projeto (ao lado deste `CLAUDE.md`). Consulte-os sempre
que precisar de detalhe fino sobre estrutura de dados ou permissões, em vez
de reconstruir do zero:

- `./docs/varandas-modelo-dados-completo.mermaid` — diagrama ER completo
  (fonte em texto, formato mermaid — todas as tabelas, colunas, tipos e
  relacionamentos)
- `./docs/varandas-modelo-dados-completo-v2.png` — o mesmo diagrama ER,
  em imagem, para visualização rápida
- `./docs/varandas-funcionalidades-e-permissoes.md` — matriz de
  funcionalidades x permissões por perfil (Administrador, Balconista,
  Cozinheiro(a), Garçom)
- `./docs/varandas-permissoes-comparacao.php` — comparação lado a lado das
  abordagens de Attribute (nativo do PHP 8 vs. alternativas) para o sistema
  de permissões
- `./docs/PedidoController-exemplo-tags.php` e
  `./docs/varandas-tags-permissoes-exemplo.md` — exemplos práticos de uso
  das tags `#[HasPermissions(...)]` e `#[PermissionName(...)]`

Antes de modelar migrations ou Models, leia o `.mermaid` (ou a imagem) por
completo — ele é a fonte de verdade do esquema de banco de dados definido
até agora.

---

## Como trabalhar comigo neste projeto

- Estamos em fase de **planejamento/modelagem**. Não pule direto para gerar
  código de produção sem alinhar o plano primeiro.
- Este projeto tem MUITAS regras específicas de negócio que fogem do
  "CRUD padrão" — sempre volte a este arquivo antes de tomar decisões de
  design que possam contradizer alguma regra acima.
- Pontos ainda em aberto (não decididos): canal do alerta de "insumo sem
  grupo de equivalência" (notificação in-app? e-mail?).

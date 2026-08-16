---
name: arquitetura-ddd-pragmatico
description: Padrão arquitetural oficial do projeto Varandas Bar e Lanchonete — Laravel + Livewire + DDD pragmático + Clean Architecture + SOLID + Repository Pattern + Service Layer + DTOs + Enums. Use este skill sempre que for criar uma feature nova, decidir em qual camada uma responsabilidade deve morar, criar Services/Repositories/DTOs/Enums, ou revisar código existente quanto a aderência ao padrão do projeto.
---

# Padrão Arquitetural — Varandas Bar e Lanchonete

## 1. Objetivo

Este é o padrão arquitetural oficial do sistema Varandas. Laravel 9 +
Livewire como base, com **DDD pragmático**: Domain-Driven Design, Clean
Architecture e SOLID aplicados sem virar academicismo — organização e
separação de responsabilidade, não pureza arquitetural por si só.

Objetivos concretos:

1. manter o código organizado e legível;
2. separar responsabilidades claramente;
3. evitar regra de negócio dentro de Livewire Components/Controllers;
4. evitar Livewire Components e Models "gigantes";
5. permitir testes isolados (ver skill `qa-testes` / subagent
   `qa-testes`);
6. facilitar manutenção e onboarding de quem mexer no código depois;
7. permitir evolução do domínio sem reescrever tudo;
8. reduzir acoplamento direto ao Eloquent/Laravel nas regras de negócio;
9. centralizar regras de negócio (nada de lógica duplicada em dois
   lugares);
10. preservar a consistência dos dados de comandas, estoque e pagamentos —
    que é o coração financeiro do sistema.

Sempre consulte `CLAUDE.md` na raiz do projeto para as regras de negócio
específicas do Varandas (trava otimista, grupos de equivalência, três
camadas de disponibilidade de produto, etc.) — este skill define **como
organizar o código**, o `CLAUDE.md` define **o que o código precisa
fazer**.

---

## 2. Princípio arquitetural fundamental

```text
Interface (Livewire/Controllers)
    ↓
Application (Services/DTOs)
    ↓
Domain (regras de negócio)
    ↓
Infrastructure (Eloquent/banco/integrações externas)
```

As dependências são controladas: o domínio (regras de negócio puras) **não
deve conhecer** Livewire, Controllers, HTTP, Request/Response, Eloquent,
Query Builder, sessão, ou detalhes de autenticação do Laravel. A
infraestrutura implementa os detalhes técnicos; o domínio representa as
regras do negócio do bar.

---

## 3. DDD pragmático — onde aplicar de verdade

Não force toda parte do sistema a virar um modelo de domínio rico.
Aplique DDD mais robusto onde houver:

- regras de negócio complexas (aprovação de pedido com trava otimista,
  baixa de estoque via grupos de equivalência, cálculo de custo médio
  ponderado);
- processos com múltiplas etapas e efeitos colaterais (fechar comanda,
  processar pagamento parcial, importar nota fiscal);
- regras financeiras (split de pagamento, ajustes de comanda);
- regras de autorização (o sistema de permissões via PHP Attributes);
- estados e transições (status de item de pedido, status de comanda);
- processos que precisam ser auditáveis (movimentações de estoque,
  histórico de preço).

CRUDs simples (ex.: cadastro de categoria, cadastro de mesa) **não devem
ser artificialmente complexos**. Um cadastro simples pode continuar como:

```text
Livewire → Service → Repository → Model
```

Enquanto um processo complexo como o **fechamento de comanda** pode
evoluir para uma estrutura mais rica:

```text
Fechar Comanda
    ↓
Validar saldo restante
    ↓
Processar pagamento (item específico ou valor livre)
    ↓
Registrar movimentação financeira
    ↓
Verificar se saldo total zerou
    ↓
Encerrar comanda (se aplicável)
    ↓
Notificar em tempo real (garçom/cliente)
```

---

## 4. Camadas da aplicação

```text
Presentation | Application | Domain | Infrastructure
```

### 4.1 Presentation

Livewire Components, Controllers, Form Requests, Views Blade, validações
superficiais, transformação de dados de entrada. **Não concentra regra de
negócio complexa.**

```text
app/
└── Livewire/
    └── Comanda/
        ├── ComandaList.php
        ├── ComandaAbrir.php
        ├── ComandaFechar.php
        └── ComandaExtrato.php
```

Evitar:

```php
public function fecharComanda()
{
    // 300 linhas de regra de negócio de pagamento
}
```

Preferir:

```php
public function fecharComanda()
{
    $this->comandaService->fechar(
        FecharComandaDTO::fromLivewire($this)
    );
}
```

O componente Livewire **orquestra a interface**, não implementa o
domínio.

### 4.2 Application Layer

Responde "o sistema precisa executar qual operação?": `AbrirComanda`,
`AprovarPedido`, `RejeitarPedido`, `FecharComanda`, `RegistrarPagamento`,
`ImportarNotaFiscal`, `CancelarItemPedido`. Aqui ficam Services, DTOs,
orquestração, transações, chamadas a Repositories.

### 4.3 Domain

Regras de negócio puras do bar — ver seção 8.

### 4.4 Infrastructure

Eloquent, banco, integrações com Mercado Pago e leitura de XML de NF-e.

---

## 5. Services

Cada Service representa **uma responsabilidade clara**, não uma coleção
genérica de métodos.

Exemplos corretos para o Varandas:

```text
ComandaService
PedidoService
AprovacaoPedidoService
PagamentoService
EstoqueService
GrupoEquivalenciaService
PermissaoService
ImportacaoNotaFiscalService
```

Evitar um "God Service" tipo `VarandasService` fazendo tudo.

```php
class PedidoService
{
    public function adicionarItem(AdicionarItemDTO $dto): ItemPedido
    {
        // orquestra: validar disponibilidade + congelar preço +
        // criar item + baixar estoque (se aplicável)
    }

    public function aprovar(int $itemPedidoId, int $garcomId): void
    {
        // trava otimista + valida estoque novamente + muda status
    }

    public function rejeitar(int $itemPedidoId, int $garcomId): void
    {
        // muda status + dispara mensagem gentil ao cliente
    }
}
```

### 5.1 Services não substituem o domínio

Inicialmente um Service pode conter a orquestração inteira de um
processo. Conforme a regra cresce em complexidade, migre pedaços para
objetos de domínio (Policies, Value Objects, Domain Services) — ver
seção 8. O Service **coordena**; o domínio **decide**.

---

## 6. DTOs — Data Transfer Object

DTOs transportam dados entre camadas sem acoplar a Application Layer à
estrutura da interface (Livewire/Request). **Toda entrada de dado
relevante para um caso de uso deve passar por um DTO antes de chegar num
Service.**

Este projeto usa uma **classe base abstrata para DTOs**
(`App\DTO\Base\DTOBase`, ver arquivo de apoio `DTOBase.php` nesta skill) —
todo DTO novo deve estender essa base, seguindo o padrão fluente
(setters/getters encadeáveis) já usado no projeto de referência.

Exemplo adaptado ao domínio do bar:

```php
namespace App\DTO\Pedido;

use App\DTO\Base\DTOBase;

class AdicionarItemDTO extends DTOBase
{
    private ?int $comandaId = null;
    private ?int $produtoId = null;
    private ?int $quantidade = null;
    private ?string $pedidoPorNome = null;
    private ?int $lancadoPor = null;

    public function setComandaId(?int $id): self
    {
        $this->comandaId = $id;
        return $this;
    }

    public function getComandaId(): ?int
    {
        return $this->comandaId;
    }

    // ... demais setters/getters seguindo o mesmo padrão

    public function toArray(): array
    {
        return [
            'comanda_id' => $this->comandaId,
            'produto_id' => $this->produtoId,
            'quantidade' => $this->quantidade,
            'pedido_por_nome' => $this->pedidoPorNome,
            'lancado_por' => $this->lancadoPor,
        ];
    }

    public function validate(): self
    {
        if (empty($this->comandaId) || empty($this->produtoId)) {
            throw new \InvalidArgumentException('Comanda e produto são obrigatórios.');
        }

        if (($this->quantidade ?? 0) <= 0) {
            throw new \InvalidArgumentException('Quantidade deve ser positiva.');
        }

        return $this;
    }
}
```

### 6.1 DTO e Livewire

Nunca passe `$this` do componente Livewire direto para um Service. Sempre
converta primeiro:

```php
// Evitar
$this->pedidoService->adicionarItem($this);

// Preferir
$dto = AdicionarItemDTO::fromLivewire($this);
$this->pedidoService->adicionarItem($dto);
```

DTO **não** contém regra de persistência nem lógica de negócio complexa —
só transporte de dado e validação estrutural básica (campos obrigatórios,
tipo, formato).

---

## 7. Repository Pattern

Separa **regra de negócio** de **persistência**. O Service não deve
conhecer detalhes de Eloquent/Query Builder/SQL diretamente para operações
de domínio — só conversa com o Repository.

```text
PedidoService
      ↓
PedidoRepositoryInterface
      ↓
PedidoRepository
      ↓
ItemPedido (Model)
      ↓
Banco
```

Este projeto usa uma **classe base abstrata de Repository**
(`App\Repositories\Base\Repository`) e uma **interface base**
(`App\Repositories\Contracts\RepositoryInterface`) — ver arquivos de apoio
`Repository.php` e `RepositoryInterface.php` nesta skill. Repositories
específicos só adicionam métodos próprios daquela entidade, sem duplicar
o que a base já resolve.

```php
interface PedidoRepositoryInterface extends RepositoryInterface
{
    public function findByComanda(int $comandaId): Collection;

    public function getFilaAbertaComGarcom(int $garcomId): Collection;
}
```

### 7.1 Padrão real deste projeto: Eloquent e SQL raw no mesmo Repository

**Um mesmo Repository concreto usa Eloquent para uns métodos e SQL raw
(via `TraitsBd`) para outros, escolhido método a método conforme a
complexidade daquela query específica** — não é "este Repository é
Eloquent" ou "este Repository é SQL raw", os dois convivem na mesma
classe.

Critério de escolha por método:

- **Eloquent** (`$this->model->where(...)` ou `$this->query()->where(...)`)
  para: busca simples por campo, `update()`/`delete()` direto, filtros e
  ordenação comuns, qualquer coisa que o Query Builder expressa de forma
  limpa.
- **SQL raw via `TraitsBd`** (`$this->executeFetchAssoc(...)`,
  `$this->executeInsert(...)`, etc.) para: agregações pesadas (saldo de
  estoque, custo médio ponderado), relatórios com múltiplos `JOIN`,
  extratos que cruzam várias tabelas, ou qualquer query que o Eloquent
  deixaria verbosa/lenta.

Escreva o SQL raw como heredoc (`<<<SQL ... SQL;`), com **parâmetros
nomeados** (`:NOME_DO_PARAMETRO`) passados como array associativo para
`executeFetchAssoc`/`executeInsert`/`executeUpdate`/`executeDelete` — nunca
concatene valor de variável direto na string SQL.

Convenções deste projeto nas queries SQL raw: nomes de tabela e coluna
**minúsculos, em snake_case** (ex.: `movimentacoes_estoque`,
`grupo_equivalencia_id`), sem alias de tabela, e sem hints específicos de
SQL Server como `NOLOCK` (o Varandas roda em MySQL/MariaDB — se precisar
de controle de isolamento de leitura, use o nível de transação do MySQL,
não um hint por tabela).

Ver arquivo de apoio `EstoqueRepository.php.example` nesta skill para um
exemplo completo mostrando os dois estilos convivendo na mesma classe.

### 7.2 Registro no Service Provider

Todo Repository concreto é vinculado à sua interface no Service Provider,
para que os Services dependam sempre da interface, nunca da implementação:

```php
$this->app->bind(
    PedidoRepositoryInterface::class,
    PedidoRepository::class
);
```

---

## 8. Domain (regras de negócio do bar)

Conforme a complexidade justificar, extraia regras do Service para
objetos de domínio explícitos:

### 8.1 Domain Services (política/regra específica)

```text
PoliticaAprovacaoPedido   → decide se um pedido pode ser aprovado
                             (considerando estoque, disponibilidade,
                             status atual — trava otimista)
PoliticaBaixaEstoque      → decide de qual grupo de equivalência e
                             critério (PEPS por saldo consolidado) baixar
PoliticaSplitPagamento    → decide como dividir/ratear um pagamento
                             parcial em comanda compartilhada
```

### 8.2 Domain Events (quando fizer sentido desacoplar efeitos colaterais)

```text
PedidoAprovado
PedidoRejeitado
ComandaFechada
PagamentoRegistrado
EstoqueInsuficiente
NotaFiscalImportada
```

Exemplo conceitual:

```text
Pedido aprovado
      ↓
PedidoAprovado (event)
      ↓
├── Enviar para painel da cozinha/bar
├── Registrar timestamp de aprovação
├── Notificar outros garçons (sumir da fila deles)
└── Dar baixa no estoque (se validação automática ligada)
```

### 8.3 Value Objects (quando um valor primitivo merece significado próprio)

```text
CodigoPermissao   → o código fixo de 6 dígitos (garante formato/imutabilidade)
ValorPagamento
ChaveAcessoNF
```

Não force Value Object em tudo — só onde o valor primitivo sozinho já
causou (ou pode causar) bug por falta de validação/semântica.

---

## 9. Enums

Enums representam conjuntos fechados de valores do domínio do bar — evite
números mágicos ou strings soltas.

Este projeto já define os valores possíveis no diagrama ER (ver
`./docs/varandas-modelo-dados-completo.mermaid`). Todo campo `status`/
`tipo` documentado ali como enum de banco deve ter um Enum PHP
correspondente.

Exemplo — status de item de pedido (baseado no `CLAUDE.md`, seção 4.2):

```php
namespace App\Enums\Pedido;

enum StatusItemPedido: string
{
    case PENDENTE_APROVACAO = 'pendente_aprovacao';
    case APROVADO = 'aprovado';
    case REJEITADO = 'rejeitado';
    case ENVIADO_COZINHA = 'enviado_cozinha';
    case PRONTO = 'pronto';
    case LIBERADO_BALCAO = 'liberado_balcao';
    case ENTREGUE = 'entregue';
    case CANCELADO = 'cancelado';
    case INDISPONIVEL_ESTOQUE = 'indisponivel_estoque';

    public function descricao(): string
    {
        return match ($this) {
            self::PENDENTE_APROVACAO => 'Pendente de aprovação',
            self::APROVADO => 'Aprovado',
            self::REJEITADO => 'Rejeitado',
            self::ENVIADO_COZINHA => 'Enviado à cozinha',
            self::PRONTO => 'Pronto',
            self::LIBERADO_BALCAO => 'Liberado para retirada',
            self::ENTREGUE => 'Entregue',
            self::CANCELADO => 'Cancelado',
            self::INDISPONIVEL_ESTOQUE => 'Indisponível por falta de estoque',
        };
    }
}
```

Preferir sempre:

```php
if ($item->status === StatusItemPedido::PRONTO)
```

Nunca:

```php
if ($item->status == 'pronto')
```

Ver arquivo de apoio `StatusItemPedidoEnum.php.example` nesta skill como
referência completa.

---

## 10. Traits

Traits centralizam comportamento **técnico e reutilizável**, nunca regra
de negócio importante.

Regra prática: uma Trait deve responder "isso é técnico e reaproveitável
por várias entidades?" (ex.: tratamento de timestamps, scopes comuns,
identificação de usuário autor). Se a resposta for "isso é uma regra
específica do bar" (ex.: `podeSerAprovado()`, `podeSerCancelado()`), a
lógica pertence ao Service ou ao Domain, não a uma Trait.

### 10.1 `TraitsBd` — SQL raw via PDO, incluída na base de Repository

O projeto usa uma trait `App\Repositories\Traits\TraitsBd` (ver arquivo de
apoio `TraitsBd.php` nesta skill), incluída na classe base `Repository`,
que dá acesso a `executeInsert`, `executeUpdate`, `executeFetchAssoc` e
`executeDelete` via PDO puro — usada lado a lado com o Eloquent no mesmo
Repository, método a método. Ver seção 7.1 para o critério de quando usar
cada estilo e um exemplo completo.

---

## 11. Transactions

Toda operação que modifica mais de uma entidade relacionada deve usar
transação:

```php
DB::transaction(function () use ($dto) {
    $item = $this->pedidoRepository->criarItem($dto);
    $this->estoqueService->darBaixaPorItem($item);
    $this->comandaService->recalcularTotal($dto->getComandaId());
});
```

Exemplos no Varandas que **exigem** transação: adicionar item ao pedido
(congelar preço + validar estoque + criar item + baixar ingredientes +
recalcular total), fechar comanda com pagamento, importar nota fiscal
(fornecedor + insumos + movimentações de estoque + arquivo XML).

---

## 12. Controllers e Livewire — regra de ouro

Ambos são **adaptadores finos** da interface. Recebem entrada, encaminham
para o caso de uso (Service), devolvem resultado. Não implementam regra
de negócio, não fazem query complexa direto, não chamam API externa
diretamente.

```php
// Controller fino, exemplo
public function store(AdicionarItemRequest $request)
{
    $dto = AdicionarItemDTO::fromRequest($request)->validate();

    $item = $this->pedidoService->adicionarItem($dto);

    return redirect()->route('comanda.show', $item->comanda_id);
}
```

---

## 13. Estrutura de diretórios recomendada

```text
app/
├── DTO/
│   ├── Base/
│   │   └── DTOBase.php
│   ├── Pedido/
│   ├── Comanda/
│   ├── Pagamento/
│   └── Estoque/
│
├── Enums/
│   ├── Pedido/
│   ├── Comanda/
│   ├── Estoque/
│   └── Permissao/
│
├── Services/
│   ├── Base/
│   │   └── ServiceBase.php
│   ├── PedidoService.php
│   ├── ComandaService.php
│   ├── PagamentoService.php
│   ├── EstoqueService.php
│   ├── GrupoEquivalenciaService.php
│   ├── ImportacaoNotaFiscalService.php
│   └── PermissaoService.php
│
├── Repositories/
│   ├── Base/
│   │   └── Repository.php
│   ├── Contracts/
│   │   └── RepositoryInterface.php
│   ├── PedidoRepository.php
│   ├── ComandaRepository.php
│   └── EstoqueRepository.php
│
├── Models/
│
├── Traits/
│
├── Livewire/
│   ├── Comanda/
│   ├── Pedido/
│   ├── Balcao/
│   ├── Cozinha/
│   └── Estoque/
│
└── Providers/
```

Não crie pastas antecipadamente sem necessidade concreta — a estrutura
acima é a referência de destino, não uma exigência de criar tudo de uma
vez no dia 1.

---

## 14. Regras de nomenclatura

Preferir nomes orientados ao domínio, **em português**, consistentes com
o diagrama ER já definido:

```text
PedidoService
ComandaService
AprovarPedidoDTO
StatusItemPedido
PodeAprovarPedidoPolicy
```

Evitar nomes genéricos sem responsabilidade clara:

```text
Helper
Utils
Manager
GeneralService
CommonRepository
```

---

## 15. Regra fundamental — não comece pelo código

Antes de implementar qualquer feature nova:

1. Qual regra de negócio do `CLAUDE.md` isso toca?
2. Quais entidades do diagrama ER estão envolvidas?
3. Quem são os atores (garçom, balcão, cliente, cozinha)?
4. Existe efeito colateral em outra área (estoque, permissões, pagamento)?
5. Precisa de transação atômica?
6. Precisa de trava otimista?
7. Precisa de auditoria/timestamp?

Só depois definir: DTO, Enum (se houver novo estado), Service, Repository
(se necessário), Model/migration (com o subagent `arquiteto-banco-dados`),
e por último a interface (Livewire).

---

## 16. Regra de ouro

Toda nova implementação deve responder: **"essa responsabilidade pertence
a qual camada?"**

- **Interface** — como o usuário (garçom/cliente/balcão/cozinha) interage?
- **Application** — qual caso de uso está sendo executado?
- **Domain** — qual é a regra de negócio do bar aqui?
- **Infrastructure** — como isso é tecnicamente persistido/integrado?

---

## 17. Checklist obrigatório para features novas

- [ ] Reli a seção relevante do `CLAUDE.md`?
- [ ] Identifiquei os atores envolvidos?
- [ ] Identifiquei a regra de negócio (e se ela já está documentada)?
- [ ] Verifiquei o diagrama ER (`./docs/varandas-modelo-dados-completo.mermaid`)?
- [ ] Preciso de DTO novo? Estende `DTOBase`?
- [ ] Preciso de Enum novo?
- [ ] Preciso de Service novo, ou uma feature existente cresce?
- [ ] Preciso de Repository novo, ou um método novo num existente?
- [ ] Precisa de transação atômica?
- [ ] Precisa de trava otimista (disputa de concorrência)?
- [ ] Precisa de permissão nova (`#[PermissionName(...)]`)?
- [ ] Defini teste (ver subagent `qa-testes`)?
- [ ] Só então implementei a interface (Livewire/Controller).

---

## 18. Diretriz final

Sempre buscar a solução mais simples que preserve clareza, manutenibilidade,
separação de responsabilidades e integridade dos dados financeiros do bar.
Não adicionar abstração por estética — adicionar abstração quando ela
resolve um problema real do domínio do Varandas ou reduz acoplamento.

O padrão arquitetural oficial do projeto é:

> **Laravel 9 + Livewire + Eloquent + Repository Pattern + Service Layer +
> DTO + Enum + SOLID + DDD pragmático, evoluindo progressivamente para uma
> camada de domínio mais rica onde a complexidade do bar justificar.**

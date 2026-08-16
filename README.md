# Varandas Bar e Lanchonete

Sistema completo de gestão para bar e lanchonete com controle de comandas, pedidos, estoque, pagamentos integrados ao Mercado Pago e muito mais.

## 🚀 Tecnologias

- **Backend**: PHP 8.2 + Laravel 12
- **Frontend**: Livewire 3.x (reativo)
- **Banco de Dados**: MySQL 8.0
- **Cache**: Redis
- **Servidor Web**: embutido do `php artisan serve` (sem Nginx separado — ambiente local apenas)
- **Containerização**: Docker + Docker Compose

## 📋 Pré-requisitos

- Docker Desktop (Windows/Mac) ou Docker Engine (Linux)
- Docker Compose
- Git

Nada de PHP, Composer ou Node precisa estar instalado na máquina — tudo roda dentro dos containers.

## 🔧 Instalação

### 1. Clone o repositório

```bash
git clone <url-do-repositorio>
cd varandas-think
```

### 2. Suba os containers

```bash
docker-compose up -d
```

O container `app` cuida sozinho, no boot: copiar `.env`, `composer install`,
`key:generate` e `migrate`. Acompanhe com `docker-compose logs -f app` até
ver "Server running on [http://0.0.0.0:8000]".

## 🎯 Acesso à Aplicação

- **Aplicação**: http://localhost:8000
- **PhpMyAdmin** (opcional): `docker-compose --profile dev up -d phpmyadmin` → http://localhost:8080 (usuário: `varandas`, senha: `secret`)
- **Vite com hot-reload** (opcional): `docker-compose --profile dev up -d node` → http://localhost:5173

## 📦 Comandos Úteis (via docker.ps1, Windows)

```powershell
.\docker.ps1 help              # Mostra todos os comandos disponíveis
.\docker.ps1 up                # Sobe os containers
.\docker.ps1 down              # Para os containers
.\docker.ps1 restart           # Reinicia os containers
.\docker.ps1 shell             # Acessa o shell do container
.\docker.ps1 artisan <cmd>     # Executa comandos artisan
.\docker.ps1 composer <cmd>    # Executa comandos composer
.\docker.ps1 migrate           # Executa migrations
.\docker.ps1 fresh             # Limpa banco, executa migrations e seeders
.\docker.ps1 logs              # Mostra logs dos containers
.\docker.ps1 cache-clear       # Limpa todos os caches
.\docker.ps1 test              # Executa testes
```

Em Linux/Mac, use `docker-compose exec app <comando>` diretamente (não há
Makefile — evitava duplicar os mesmos comandos do `docker.ps1`).

## 🗂️ Estrutura do Projeto

```
.
├── app/                    # Código da aplicação
│   ├── Domain/            # Camada de domínio (DDD)
│   ├── Http/              # Controllers, Middleware
│   ├── Models/            # Eloquent Models
│   └── Services/          # Serviços de negócio
├── docker/                # Configurações Docker
│   ├── nginx/            # Configurações Nginx
│   ├── php/              # Dockerfile e configs PHP
│   └── mysql/            # Configurações MySQL
├── resources/
│   ├── views/            # Views Blade
│   │   ├── layouts/
│   │   │   ├── app.blade.php
│   │   │   └── template/
│   │   │       └── admitro/   # Template Admitro
│   │   └── components/
│   └── template-base/    # Assets do template
├── docker-compose.yml    # Definição dos serviços
└── Makefile             # Comandos facilitadores
```

## 🔐 Usuários Padrão (após seeders)

- **Admin**: admin@varandas.com / password
- **Balconista**: balconista@varandas.com / password
- **Cozinheiro**: cozinheiro@varandas.com / password
- **Garçom**: garcom@varandas.com / password

## 📱 Módulos do Sistema

1. **Produtos & Categorias** - Cardápio com preços históricos
2. **Estoque & Ingredientes** - Controle de insumos com grupos de equivalência
3. **Comandas & Mesas** - Gestão de comandas individuais/compartilhadas
4. **Pedidos** - Fluxo de aprovação com validação de estoque
5. **Tablet da Cozinha** - Interface dedicada com notificações sonoras
6. **Pagamentos** - Integração Mercado Pago (API Point, Pix, etc.)
7. **Venda Avulsa** - PDV rápido para itens de balcão
8. **Importação de NF-e** - Auto-cadastro de fornecedores e insumos
9. **Permissões** - Sistema granular com PHP Attributes

## 🛠️ Desenvolvimento

### Executar testes

```powershell
.\docker.ps1 test
```

### Acessar logs

```powershell
.\docker.ps1 logs
```

### Limpar cache

```powershell
.\docker.ps1 cache-clear
```

### Compilar assets com hot-reload

```powershell
docker-compose --profile dev up -d node
```

Abre em http://localhost:5173 (Vite com HMR).

## 📚 Documentação Adicional

Consulte o arquivo `CLAUDE.md` para documentação completa das regras de negócio e decisões arquiteturais.

## 🤝 Contribuindo

1. Faça um fork do projeto
2. Crie uma branch para sua feature (`git checkout -b feature/MinhaFeature`)
3. Commit suas mudanças (`git commit -m 'Adiciona MinhaFeature'`)
4. Push para a branch (`git push origin feature/MinhaFeature`)
5. Abra um Pull Request

## 📄 Licença

Este projeto é proprietário e confidencial.

## 👥 Equipe

Desenvolvido para Varandas Bar e Lanchonete.

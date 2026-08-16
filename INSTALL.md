# 🚀 Guia de Instalação - Varandas Bar e Lanchonete

## ⚠️ Pré-requisitos

1. **Docker Desktop para Windows**
   - Download: https://www.docker.com/products/docker-desktop/
   - Instale e inicie o Docker Desktop
   - Aguarde até que o ícone no system tray fique verde

2. **Git** (opcional, para versionamento)
   - Download: https://git-scm.com/download/win

Nada além disso precisa estar instalado na máquina — PHP, Composer e Node
rodam todos dentro dos containers.

## 📦 Instalação Passo a Passo

### Passo 1: Inicie o Docker Desktop

Certifique-se de que o Docker Desktop está rodando. Você verá o ícone na bandeja do sistema.

### Passo 2: Suba os containers

```powershell
docker-compose up -d
```

**OU** use o script helper:

```powershell
.\docker.ps1 up
```

Isso já sobe `app` (PHP 8.2 + `php artisan serve`), `db` (MySQL 8.0) e
`redis`. No primeiro boot, o container `app` executa sozinho, nessa ordem:

1. Copia `.env.example` → `.env` (se não existir)
2. `composer install`
3. `php artisan key:generate` (se `APP_KEY` estiver vazio)
4. Aguarda o MySQL responder
5. `php artisan migrate`
6. Sobe o servidor em `http://localhost:8000`

Acompanhe o progresso com:

```powershell
.\docker.ps1 logs
# ou: docker-compose logs -f app
```

Não é preciso rodar `composer install`, `key:generate` ou `migrate`
manualmente — isso só é necessário se você resetar o container do zero.

## ✅ Verificação

Abra seu navegador e acesse:

- **Aplicação**: http://localhost:8000

## 🛠️ Comandos Úteis

```powershell
# Ver todos os comandos disponíveis
.\docker.ps1 help

# Acessar shell do container
.\docker.ps1 shell

# Ver logs
.\docker.ps1 logs

# Parar containers
.\docker.ps1 down

# Reiniciar containers
.\docker.ps1 restart

# Limpar cache
.\docker.ps1 cache-clear

# Executar comando artisan
.\docker.ps1 artisan migrate

# Executar comando composer
.\docker.ps1 composer require nome/pacote
```

## 🧩 Serviços opcionais (perfil `dev`)

Não sobem por padrão com `docker-compose up -d` — só quando precisar:

```powershell
# PhpMyAdmin -> http://localhost:8080 (usuário: varandas / senha: secret)
docker-compose --profile dev up -d phpmyadmin

# Vite com hot-reload -> http://localhost:5173
docker-compose --profile dev up -d node
```

## ⚠️ Troubleshooting

### Docker não está rodando

```powershell
# Erro: "cannot find docker_engine"
# Solução: Inicie o Docker Desktop e aguarde ficar pronto
```

### Erro de permissões

```powershell
.\docker.ps1 permissions
```

### Containers não iniciam

```powershell
# Ver logs de erro
docker-compose logs

# Reconstruir containers
.\docker.ps1 down
.\docker.ps1 build
.\docker.ps1 up
```

### Porta já em uso

Se a porta 8000, 3306 ou 6379 já estiver em uso, edite o `docker-compose.yml`:

```yaml
app:
  ports:
    - "8001:8000"  # Mude de 8000 para 8001
```

## 📚 Documentação

- **Laravel 12**: https://laravel.com/docs/12.x
- **Livewire 3**: https://livewire.laravel.com/docs/quickstart
- **Docker**: https://docs.docker.com/

## 🆘 Suporte

Consulte o arquivo `CLAUDE.md` para regras de negócio e arquitetura detalhada do projeto.

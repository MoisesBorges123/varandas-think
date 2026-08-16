# Script helper para comandos Docker no Windows
# Uso: .\docker.ps1 <comando>

param(
    [Parameter(Position=0)]
    [string]$Command = "help",
    
    [Parameter(Position=1, ValueFromRemainingArguments=$true)]
    [string[]]$Args
)

function Show-Help {
    Write-Host ""
    Write-Host "=== Varandas Docker Helper ===" -ForegroundColor Cyan
    Write-Host ""
    Write-Host "Comandos disponíveis:" -ForegroundColor Green
    Write-Host "  help              Mostra esta ajuda"
    Write-Host "  build             Constrói os containers"
    Write-Host "  up                Sobe os containers (o container 'app' já cuida sozinho de"
    Write-Host "                    composer install, key:generate e migrate no boot)"
    Write-Host "  down              Para os containers"
    Write-Host "  restart           Reinicia os containers"
    Write-Host "  shell             Acessa o shell do container"
    Write-Host "  composer <cmd>    Executa comandos composer"
    Write-Host "  artisan <cmd>     Executa comandos artisan"
    Write-Host "  migrate           Executa migrations"
    Write-Host "  migrate-fresh     Limpa banco e executa migrations"
    Write-Host "  seed              Executa seeders"
    Write-Host "  fresh             Limpa banco, migrations e seeders"
    Write-Host "  test              Executa testes"
    Write-Host "  logs              Mostra logs dos containers"
    Write-Host "  install           Instalação completa do projeto"
    Write-Host "  cache-clear       Limpa todos os caches"
    Write-Host "  permissions       Ajusta permissões"
    Write-Host "  stats             Estatísticas dos containers"
    Write-Host ""
}

function Invoke-DockerCommand {
    switch ($Command.ToLower()) {
        "help" {
            Show-Help
        }
        "build" {
            Write-Host "Construindo containers..." -ForegroundColor Blue
            docker-compose build
        }
        "up" {
            Write-Host "Iniciando containers..." -ForegroundColor Blue
            docker-compose up -d
            Write-Host "Containers iniciados!" -ForegroundColor Green
            Write-Host "Aguarde o container 'app' terminar composer install / migrate (acompanhe com '.\docker.ps1 logs')." -ForegroundColor Yellow
            Write-Host "Aplicação: http://localhost:8000" -ForegroundColor Yellow
        }
        "down" {
            Write-Host "Parando containers..." -ForegroundColor Blue
            docker-compose down
        }
        "restart" {
            Write-Host "Reiniciando containers..." -ForegroundColor Blue
            docker-compose down
            docker-compose up -d
            Write-Host "Containers reiniciados!" -ForegroundColor Green
        }
        "shell" {
            docker-compose exec app bash
        }
        "root-shell" {
            docker-compose exec -u root app bash
        }
        "composer" {
            $composerCmd = $Args -join " "
            docker-compose exec app composer $composerCmd
        }
        "artisan" {
            $artisanCmd = $Args -join " "
            docker-compose exec app php artisan $artisanCmd
        }
        "migrate" {
            Write-Host "Executando migrations..." -ForegroundColor Blue
            docker-compose exec app php artisan migrate
        }
        "migrate-fresh" {
            Write-Host "ATENÇÃO: Isso irá limpar todo o banco de dados!" -ForegroundColor Yellow
            $confirm = Read-Host "Confirmar? (s/n)"
            if ($confirm -eq "s") {
                docker-compose exec app php artisan migrate:fresh
            }
        }
        "seed" {
            Write-Host "Executando seeders..." -ForegroundColor Blue
            docker-compose exec app php artisan db:seed
        }
        "fresh" {
            Write-Host "Limpando banco, executando migrations e seeders..." -ForegroundColor Blue
            docker-compose exec app php artisan migrate:fresh --seed
        }
        "test" {
            docker-compose exec app php artisan test
        }
        "logs" {
            docker-compose logs -f
        }
        "install" {
            Write-Host "=== Instalação Completa (redundante com 'up', mantido por conveniência) ===" -ForegroundColor Cyan
            Write-Host "1/6 Construindo containers..." -ForegroundColor Blue
            docker-compose build
            
            Write-Host "2/6 Iniciando containers..." -ForegroundColor Blue
            docker-compose up -d
            
            Write-Host "3/6 Instalando dependências..." -ForegroundColor Blue
            docker-compose exec app composer install
            
            Write-Host "4/6 Gerando APP_KEY..." -ForegroundColor Blue
            docker-compose exec app php artisan key:generate
            
            Write-Host "5/6 Executando migrations..." -ForegroundColor Blue
            docker-compose exec app php artisan migrate
            
            Write-Host "6/6 Executando seeders..." -ForegroundColor Blue
            docker-compose exec app php artisan db:seed
            
            Write-Host ""
            Write-Host "=== Instalação concluída! ===" -ForegroundColor Green
            Write-Host "Aplicação: http://localhost:8000" -ForegroundColor Yellow
            Write-Host "PhpMyAdmin (opcional): docker-compose --profile dev up -d phpmyadmin -> http://localhost:8080" -ForegroundColor Yellow
        }
        "cache-clear" {
            Write-Host "Limpando caches..." -ForegroundColor Blue
            docker-compose exec app php artisan cache:clear
            docker-compose exec app php artisan config:clear
            docker-compose exec app php artisan route:clear
            docker-compose exec app php artisan view:clear
            Write-Host "Caches limpos!" -ForegroundColor Green
        }
        "permissions" {
            Write-Host "Ajustando permissões..." -ForegroundColor Blue
            docker-compose exec -u root app chmod -R 777 storage bootstrap/cache
            Write-Host "Permissões ajustadas!" -ForegroundColor Green
        }
        "stats" {
            docker stats --format "table {{.Container}}\t{{.CPUPerc}}\t{{.MemUsage}}\t{{.NetIO}}"
        }
        default {
            Write-Host "Comando desconhecido: $Command" -ForegroundColor Red
            Show-Help
        }
    }
}

Invoke-DockerCommand

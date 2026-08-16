#!/bin/sh
set -e

cd /var/www

git config --global --add safe.directory /var/www

if [ ! -f .env ]; then
    echo "[entrypoint] Criando .env a partir de .env.example..."
    cp .env.example .env
fi

if [ ! -d vendor ]; then
    echo "[entrypoint] Instalando dependencias do Composer..."
    composer install --no-interaction --prefer-dist
fi

if ! grep -q "^APP_KEY=base64" .env 2>/dev/null; then
    echo "[entrypoint] Gerando APP_KEY..."
    php artisan key:generate --force
fi

echo "[entrypoint] Aguardando o banco de dados..."
until mysqladmin ping -h"${DB_HOST:-db}" -P"${DB_PORT:-3306}" -u"${DB_USERNAME:-varandas}" -p"${DB_PASSWORD:-secret}" --ssl=0 --silent 2>/dev/null; do
    sleep 2
done
echo "[entrypoint] Banco de dados disponivel."

echo "[entrypoint] Rodando migrations..."
php artisan migrate --force

exec "$@"

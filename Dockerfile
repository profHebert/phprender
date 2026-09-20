FROM php:8.2-apache

# Instala o suporte ao PostgreSQL (pdo_pgsql) exigido pelo Neon/Supabase
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copia os arquivos do seu repositório para a pasta do servidor web
COPY . /var/www/html/

EXPOSE 80

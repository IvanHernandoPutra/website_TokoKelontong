FROM php:8.4-cli

RUN apt-get update && apt-get install -y --no-install-recommends \
    libicu-dev libzip-dev libsqlite3-dev unzip git \
    && docker-php-ext-install intl zip pdo_sqlite \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

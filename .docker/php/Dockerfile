FROM php:8.2.12-fpm

RUN apt-get update && apt-get install -y  curl \
    libmemcached-dev \
    libz-dev \
    libzip-dev \
    libpq-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-install pdo pdo_pgsql mbstring curl zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /data/localhost


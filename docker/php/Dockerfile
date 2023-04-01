FROM php:8.1-fpm-bullseye

COPY --from=composer/composer /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y libzip-dev zip unzip

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install pdo_mysql

EXPOSE 9000
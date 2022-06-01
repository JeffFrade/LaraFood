FROM composer:1 AS composer
FROM php:8-fpm

USER root
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN apt-get update \
    && apt-get install -y \
        autoconf \
        git \
        zip \
        unzip \
        zlib1g-dev \
        libssl-dev \
        libpng-dev \
        libzip-dev \
        net-tools \
    && useradd -m jefffrade
RUN docker-php-ext-install \
        gd \
        mysqli \
        pdo_mysql \
        pdo \
        zip
WORKDIR /larafood

RUN chown -R jefffrade:jefffrade /larafood
USER jefffrade

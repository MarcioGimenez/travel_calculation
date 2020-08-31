FROM php:7.2-apache
MAINTAINER Marcio Gimenez <marciogimenez1093@gmail.com>
RUN apt-get update && apt-get install -y \
    libmcrypt-dev \
    libreadline-dev \
    zlib1g-dev \
    libicu-dev \
    libxml2-dev \
    g++ \
    && docker-php-ext-install -j$(nproc) iconv intl mbstring zip xml pdo pdo_mysql \
    && pecl install mcrypt-1.0.1 \
    && docker-php-ext-enable mcrypt

RUN a2enmod rewrite && /etc/init.d/apache2 restart
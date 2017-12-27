FROM php:apache

MAINTAINER Robert Schneider <shakemedev@gmail.com>

RUN apt-get update \
    && apt-get install --assume-yes \
        ssmtp \
        libmemcached-dev \
        libpq-dev \
        zlib1g-dev

RUN echo "hostname=localhost.localdomain" > /etc/ssmtp/ssmtp.conf \
    && echo "root=developer@localhost" >> /etc/ssmtp/ssmtp.conf \
    && echo "mailhub=mailhog:1025" >> /etc/ssmtp/ssmtp.conf \
    && echo "localhost localhost.localdomain" >> /etc/hosts

RUN a2enmod rewrite

RUN docker-php-ext-install \
        mysqli \
        pdo \
        pdo_mysql \
        pdo_pgsql \
    && docker-php-ext-enable \
        mysqli \
        pdo \
        pdo_mysql \
        pdo_pgsql

RUN pecl install \
        memcached \
        redis \
        xdebug \
    && docker-php-ext-enable \
        memcached \
        redis \
        xdebug


FROM php:7.2-fpm-alpine

WORKDIR /var/www/

RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable mysqli

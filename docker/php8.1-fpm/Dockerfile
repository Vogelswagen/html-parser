FROM php:8.1-fpm

RUN apt-get update && apt-get install -y openssl curl git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

USER root

WORKDIR /var/www

VOLUME /var/www

EXPOSE 9000

CMD ["php-fpm"]

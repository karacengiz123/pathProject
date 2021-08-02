#composerı ındırıp bır degıkene atıyoruz ki tekrar uzun uzun yazmayalım
FROM composer:1.10.19 AS composerimage


#################################################################################
#php7.3 apache versıyonunu ındır base degıskenıne ata
FROM php:7.3-apache AS base

## Debian dep and Apache2 config
RUN apt-get update && \
    apt-get install -y libzip-dev zlib1g-dev zip unzip sendmail libpng-dev libicu-dev g++ && \
    docker-php-ext-configure zip --with-libzip && \
    docker-php-ext-install pdo pdo_mysql zip opcache mbstring zip gd && \
    docker-php-ext-configure intl && \
    docker-php-ext-install intl mysqli pdo pdo_mysql && \
    docker-php-ext-enable pdo_mysql && \
    rm -rf /var/lib/apt/lists/* && \
    rm -rf /etc/apache2/sites-available/* && \
    rm -rf /etc/apache2/sites-enabled/* && \
    echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY docker/php.ini /usr/local/etc/php/php.ini

## Conf Apache2
COPY docker/app.conf /etc/apache2/sites-available/app.conf
RUN usermod -u 1000 www-data && a2ensite app.conf && a2enmod rewrite

#################################################################################


## Install Composer
FROM base AS deps
COPY --from=composerimage /usr/bin/composer /usr/bin/composer

RUN rm -rf /var/www/* && mkdir -p /var/www/app && chown www-data:www-data /var/www/app
USER www-data
WORKDIR /var/www/app
COPY --chown=www-data:www-data composer* /var/www/app/
RUN composer install --no-cache --no-scripts --prefer-dist


#################################################################################



FROM base AS prod

USER www-data

COPY --from=deps /var/www /var/www

## Copy app files
COPY --chown=www-data:www-data . /var/www/app/
COPY --chown=www-data:www-data ./docker/.env /var/www/app/.env

WORKDIR /var/www/app

VOLUME /var/www/app

## EXPOSE 80
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]

#################################################################################

FROM prod AS test

COPY docker/.env ./.env
RUN php bin/console c:c

#################################################################################

FROM prod
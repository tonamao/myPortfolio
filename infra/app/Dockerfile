ARG LARADOCK_PHP_VERSION
# FROM laradock/workspace:latest-${LARADOCK_PHP_VERSION}
FROM php:7.4-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

########################
# timezone environment
########################
ARG DB_DATABASE
ARG DB_USERNAME
ARG DB_PASSWORD

ENV TZ=UTC \
  # locale
  LANG=en_US.UTF-8 \
  LANGUAGE=en_US:en \
  LC_ALL=en_US.UTF-8 \
  # composer environment
  COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer \
  # Laravel environment
  DB_CONNECTION=mysql \
  DB_HOST=db \
  DB_DATABASE=${DB_DATABASE} \
  DB_USERNAME=${DB_USERNAME} \
  DB_PASSWORD=${DB_PASSWORD}

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git libicu-dev libonig-dev libzip-dev unzip locales && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  locale-gen en_US.UTF-8 && \
  localedef -f UTF-8 -i en_US en_US.UTF-8 && \
  mkdir /var/run/php-fpm && \
  mkdir /var/log/php && \
  docker-php-ext-install intl pdo_mysql zip bcmath && \
  composer config -g process-timeout 3600 && \
  composer config -g repos.packagist composer https://packagist.jp

#####################
# Configuration
#####################
COPY myPortfolio/infra/app/php-fpm.d/zzz-www.conf /usr/local/etc/php-fpm.d/zzz-www.conf
COPY myPortfolio/infra/app/php-fpm.d/php7.4.ini /usr/local/etc/php/php.ini

RUN mkdir -p /var/www/myPortfolio
ADD ./myPortfolio /var/www/myPortfolio

WORKDIR /var/www/myPortfolio

RUN cd /var/www/myPortfolio && \
  composer install && \
  php artisan key:generate && \
  chmod -R a+w storage/ bootstrap/cache
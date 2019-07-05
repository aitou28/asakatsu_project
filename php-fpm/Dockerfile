FROM php:7.2-fpm-alpine

#ライブラリインストール
RUN apk update && apk add --no-cache \
  libpng-dev \
  vim tzdata \
  && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv \
  && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime \
  #タイムゾーン
  && apk del tzdata \
  && rm -rf /var/cache/apk/*

#pdoインストール
RUN docker-php-ext-install pdo_mysql

#composerインストール
# install composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html

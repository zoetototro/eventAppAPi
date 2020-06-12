FROM php:7.2-fpm

COPY php.ini /usr/local/etc/php/


# install composer
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer
RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
vim

RUN { \
  echo 'max_execution_time=-1'; \
  echo 'memory_limit=-1'; \
  echo 'post_max_size=-1'; \
}

RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql

RUN pecl install apfd

WORKDIR /var/www/html

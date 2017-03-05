FROM php:7.1
RUN apt-get update
RUN apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev git
RUN docker-php-ext-install gd iconv mbstring mcrypt mysqli pdo_mysql zip

RUN curl -sS https://getcomposer.org/installer | php \
  && mv composer.phar /usr/local/bin/composer

RUN composer global require hirak/prestissimo:^0.3

WORKDIR /app
CMD php -S 0.0.0.0:8080 -t public

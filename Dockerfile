FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Install pgsql extension
RUN docker-php-ext-install pgsql

COPY . /var/www/html/
EXPOSE 80
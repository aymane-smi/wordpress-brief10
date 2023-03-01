FROM php:8.1-apache
RUN a2enmod rewrite && service apache2 restart
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql
WORKDIR /var/www/html
#FROM nyanpass/php5.5:5.5.38-alpine
FROM php:7.4.1-alpine
RUN docker-php-ext-install pdo_mysql

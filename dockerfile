FROM php:8.2-apache
RUN docker-php-ext-install mysqli
# docker build -t Jason4931/mejakita ./
# docker compose up
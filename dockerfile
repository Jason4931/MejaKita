FROM php:8.2-apache
RUN docker-php-ext-install mysqli
# docker build -t Jason4931/mejakita ./
# docker run -p 80:8080 -v /xampp/htdocs/MejaKita:/var/www/html Jason4931/mejakita
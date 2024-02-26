FROM php:latest

COPY . /var/www/html

WORKDIR /var/www/html

EXPOSE 80

RUN docker-php-ext-install mysqli

CMD ["php", "-S", "0.0.0.0:80", "-t", "."]

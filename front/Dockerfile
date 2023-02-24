FROM php:8.1-apache

ENV APACHE_DOCUMENT_ROOT=/var/www/html/src

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install system dependencies
RUN apt-get update && apt-get install -y git unzip

# # Install PHP extensions
RUN docker-php-ext-install pdo_mysql

RUN pecl install xdebug && docker-php-ext-enable xdebug

# # Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# # Set working directory
WORKDIR /var/www/html/src

# EXPOSE 8002

# CMD [ "php", "-S localhost:8002", "./src/index.php" ]

# Gebruik de officiële PHP-beeldhouwer als basisbeeld
FROM php:8.2-fpm

# Installeer de benodigde PHP-extensies
RUN docker-php-ext-install pdo pdo_mysql

# Stel de werkmap in op de Laravel-applicatieroot
WORKDIR /var/www/html

# Kopieer de lokale code naar het containerbestandssysteem
COPY . .

# Installeer Composer en voer 'composer install' uit om afhankelijkheden te installeren
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

# Wijzig de eigenaar van de opslag- en cache-mappen om problemen met rechten te voorkomen
RUN chown -R www-data:www-data storage bootstrap/cache

# Start de PHP-FPM-server
CMD ["php-fpm"]

# Expose poort 9000 om te communiceren met Nginx of een andere webserver
EXPOSE 9000

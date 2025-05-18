# Uso la imagen de PHP 8.2 con Apache preinstalado
FROM php:8.2-apache

# Instalo la extensión mysqli necesaria para conectar PHP con MySQL
RUN docker-php-ext-install mysqli

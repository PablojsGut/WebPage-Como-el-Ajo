# Usa una imagen oficial de PHP con Apache
FROM php:8.1-apache

# Copia los archivos de tu proyecto al directorio raíz del servidor Apache
COPY ./ /var/www/html/

# Otorga los permisos necesarios para los archivos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Habilita el módulo de reescritura de Apache (opcional si usas URLs amigables)
RUN a2enmod rewrite

# Expone el puerto 80 para el servidor web
EXPOSE 80
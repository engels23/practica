# Usa una imagen base de PHP con soporte para MySQL
FROM php:7.4-apache

# Instala extensiones necesarias
RUN docker-php-ext-install mysqli

# Copia el contenido de la carpeta app al contenedor
COPY app/ /var/www/html/

# Copia el archivo de configuración de Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Exposición del puerto 80 para el tráfico web
EXPOSE 80

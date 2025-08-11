FROM php:8.2-apache
RUN docker-php-ext-install pdo pdo_mysql
RUN a2enmod rewrite headers
WORKDIR /var/www/html
COPY . /var/www/html
RUN printf '<Directory /var/www/html>\nAllowOverride All\n</Directory>\n' >> /etc/apache2/apache2.conf
EXPOSE 80

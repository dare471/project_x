# Использование PHP 8.2 с Nginx
FROM php:8.2-fpm

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    nginx \
    supervisor

# Установка расширений PHP
RUN docker-php-ext-install pdo pdo_pgsql zip

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Копирование кода приложения
WORKDIR /var/www
COPY . .

# Установка зависимостей приложения
RUN composer install --no-interaction --prefer-dist --optimize-autoloader --verbose

# Настройка прав доступа
RUN chown -R www-data:www-data /var/www

# Копирование конфигурации Nginx
COPY ./nginx.conf /etc/nginx/nginx.conf

# Копирование конфигурации Supervisor
COPY ./supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Запуск Supervisor
CMD ["/usr/bin/supervisord"]

# Использование PHP 8.2 с Nginx
FROM php:8.2-fpm

# Установка зависимостей для добавления ключей и репозиториев
RUN apt-get update && apt-get install -y --no-install-recommends \
    gnupg2 \
    curl \
    unixodbc-dev

# Добавление ключей и репозитория Microsoft
RUN curl -sSL https://packages.microsoft.com/keys/microsoft.asc | apt-key add - && \
    curl -sSL https://packages.microsoft.com/config/debian/11/prod.list > /etc/apt/sources.list.d/mssql-release.list

# Установка драйверов MSSQL и других зависимостей
RUN apt-get update && ACCEPT_EULA=Y apt-get install -y --no-install-recommends \
    msodbcsql18 \
    mssql-tools18 \
    unixodbc-dev \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    nginx \
    supervisor

# Установка PHP-расширений для MSSQL и PostgreSQL
RUN pecl install sqlsrv pdo_sqlsrv && \
    docker-php-ext-enable sqlsrv pdo_sqlsrv && \
    docker-php-ext-install pdo pdo_pgsql zip

# Установка Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Установка рабочей директории
WORKDIR /var/www

# Копирование кода приложения
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

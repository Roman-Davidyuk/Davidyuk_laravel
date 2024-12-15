# Вибираємо офіційний образ PHP з необхідними розширеннями
FROM php:8.2-fpm
# Встановлюємо системні залежності
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
# Встановлюємо PHP розширення
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
# Встановлюємо Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# Встановлюємо робочий каталог
WORKDIR /var/www
# Копіюємо файли проекту
COPY . .
# Встановлюємо залежності через Composer
RUN composer install --prefer-dist --no-dev --no-scripts --no-progress --no-interaction
# Node
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs
# Копіюємо права доступу
RUN chown -R www-data:www-data /var/www
# Перемикаємо на користувача www-data
USER www-data
# Команда за замовчуванням
CMD ["php-fpm"]

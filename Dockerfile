# Use an official PHP runtime as a parent image
FROM php:8.1-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev libzip-dev unzip git

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set the working directory
WORKDIR /var/www

# Copy the application code
COPY . .

# Install PHP dependencies
RUN composer install --optimize-autoloader --no-dev

# Set environment variables
ENV APP_ENV=production
ENV APP_DEBUG=false

# Expose port 80
# EXPOSE 80

# Start PHP-FPM server
CMD ["php-fpm"]



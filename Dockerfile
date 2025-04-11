FROM php:8.0-apache

# Install required system packages
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libxml2-dev \
    libzip-dev \
    unzip \
    git \
    zip \
    curl \
    libonig-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mysqli pdo pdo_mysql zip xml mbstring \
    && apt-get clean

# Enable Apache rewrite module
RUN a2enmod rewrite
RUN echo '<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/moodle.conf \
    && a2enconf moodle

# Copy source files
COPY ./moodle /var/www/html/moodle/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html/moodle/

# Set working directory
WORKDIR /var/www/html/moodle/

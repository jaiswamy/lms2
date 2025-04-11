FROM php:8.2-apache
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
WORKDIR /var/www/html/moodle/
RUN echo '<Directory /var/www/html>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/moodle.conf \
    && a2enconf moodle

# Copy source files
COPY ./lms2 /var/www/html/moodle/
COPY ./moodledata /var/www/moodledata/

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html /var/www/moodledata && \
    chmod -R 755 /var/www/html /var/www/moodledata


FROM ccr.ccs.tencentyun.com/cluster-alpha/phpfpm:base

RUN docker-php-ext-install -j$(nproc) opcache

ADD api /var/www/html

WORKDIR /var/www/html

RUN composer install \
    && chmod -R 777 /var/www/html/storage \
    && cp .env.example .env \
    && php artisan key:generate 

EXPOSE 9000

CMD ["php-fpm"]
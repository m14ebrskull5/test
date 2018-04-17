FROM ccr.ccs.tencentyun.com/cluster-alpha/phpfpm:base

ADD api /var/www/html

WORKDIR /var/www/html

RUN composer install && chmod -R 777 /var/www/html/storage

EXPOSE 9000

CMD ["php-fpm"]
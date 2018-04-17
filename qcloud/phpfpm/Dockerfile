FROM ccr.ccs.tencentyun.com/cluster-alpha/phpfpm:base

ADD api /var/www/html

WORKDIR /var/www/html

RUN composer install

EXPOSE 9000

CMD ["php-fpm"]
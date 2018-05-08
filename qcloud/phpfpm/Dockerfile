FROM ccr.ccs.tencentyun.com/cluster-alpha/phpfpm:latest

ADD api /var/www/html

WORKDIR /var/www/html

RUN chmod -R 777 /var/www/html/storage \
    && chmod 777 ./init.sh

RUN php artisan key:generate 

EXPOSE 9000

CMD ["php-fpm"]
FROM php:7.2-cli

RUN docker-php-ext-install bcmath

COPY consumer-default.php /root/consumer-default.php

CMD ["php","/root/consumer-default.php"]
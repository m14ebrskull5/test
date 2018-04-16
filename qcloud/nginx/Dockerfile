FROM nginx

MAINTAINER zhouzhan "zhanz@deepboosting.com"

ADD default.conf /etc/nginx/conf.d
ADD ssl.crt ~
ADD ssl.key ~

EXPOSE 80

STOPSIGNAL SIGTERM

CMD ["nginx", "-g", "daemon off;"]
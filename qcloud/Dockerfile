FROM nginx

MAINTAINER zhouzhan "zhanz@deepboosting.com"

ADD default.conf /etc/nginx/conf.d

ADD api/public/index.php /usr/share/nginx/html
#复制项目

EXPOSE 80

STOPSIGNAL SIGTERM

CMD ["nginx", "-g", "daemon off;"]
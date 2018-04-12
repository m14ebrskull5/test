FROM nginx

MAINTAINER zhouzhan "zhanz@deepboosting.com"

ADD default.conf /etc/nginx/conf.d

RUN mkdir /usr/share/nginx/html/api

ADD api /usr/share/nginx/html/api #复制项目

EXPOSE 80

STOPSIGNAL SIGTERM

CMD ["nginx", "-g", "daemon off;"]
FROM nginx

MAINTAINER zhouzhan "zhanz@deepboosting.com"

ADD default.conf /etc/nginx/conf.d

ADD ../server/api /usr/share/nginx/html

RUN ln -sf /dev/stdout /var/log/nginx/access.log \
	&& ln -sf /dev/stderr /var/log/nginx/error.log

EXPOSE 80

STOPSIGNAL SIGTERM

CMD ["nginx", "-g", "daemon off;"]
FROM ccr.ccs.tencentyun.com/4-9-develop/nginx_php:2.0

MAINTAINER zhouzhan

WORKDIR ~
RUN wget http://tengine.taobao.org/download/tengine-2.1.2.tar.gz && tar -xvf tengine-2.1.2.tar.gz
WORKDIR ~/tengine-2.1.2

RUN ./configure --prefix=/usr/local/nginx  --with-http_ssl_module && make && make install

CMD /bin/bash
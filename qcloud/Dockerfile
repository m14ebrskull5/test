FROM centos

MAINTAINER zhouzhan

RUN yum -y update

RUN yum install -y gcc zlib zlib-devel openssl gcc automake db4-devel libpng-devel libXpm-devel php-redis autoconf libtool make gcc-c++ curl curl-devel pcre-devel gmp-devel libmcrypt libmcrypt-devel zlib-devel openssl-devel vim which bzip2 bzip2-devel libjpeg libjpeg-devel libc-client-devel git  jemalloc pcre sqlite-devel sqlite supervisor gd gd-devel libxslt-devel htop nload libxml2 libxml2-devel php-gd freetype* lua lua-devel python34 python34-setuptools redis opencv-python wget epel-release libmcrypt-devel wget

WORKDIR ~

RUN wget http://tengine.taobao.org/download/tengine-2.1.2.tar.gz && tar -xvf tengine-2.1.2.tar.gz && rm tengine-2.1.2.tar.gz 
 
RUN ~/tengine-2.1.2/configure --prefix=/usr/local/nginx  --with-http_ssl_module && make && make install

EXPOSE 80

CMD /usr/local/nginx/sbin/ngnix
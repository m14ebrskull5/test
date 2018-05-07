##minicard 原型项目

## 查看docker容器ip ##

```shell
docker inspect --format='{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)
```


## 安装php扩展 ##
```shell
docker-php-ext-install [extension]
```

#简单的容器命令

## 运行consumer ##
docker run -d -v /D_DRIVE/test/qcloud/consumer:/root --link some-rabbit --name consumer [imageId]
## 运行php     ##
docker run -d -p 9000:9000 -v /D_DRIVE/test/qcloud/phpfpm/api:/var/www/html --name php --link some-rabbit [imageId|c662]
## 运行nginx ##
docker run -d -p 443:443 -p 80:80 --name nginx [imageId]
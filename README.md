##minicard 原型项目

## 查看docker容器ip ##

```shell
docker inspect --format='{{.Name}} - {{range .NetworkSettings.Networks}}{{.IPAddress}}{{end}}' $(docker ps -aq)
```
## 

## 安装php扩展 ##
```shell
docker-php-ext-install [extension]
```

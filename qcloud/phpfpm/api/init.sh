#!/bin/sh

if [ "$env" = "" ]
then
  echo "这是dev环境";
  cp .env.dev .env
else  
  echo "这是pro环境";
  cp .env.pro .env
fi


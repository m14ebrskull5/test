#!/bin/sh

if [ "$ENV" = "" ]
then
  cp .env.dev .env
else  
  cp .env.pro .env
fi


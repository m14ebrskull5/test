#!/bin/sh

if [ "$env" = "" ]
then
  cp .env.dev .env
else  
  cp .env.pro .env
fi


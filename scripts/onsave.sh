#!/usr/bin/env bash
# This script pushes the source code to the Apache Web Server located on
# /var/www/html
rm -rf /var/www/html/*
cp -r ./ /var/www/html/
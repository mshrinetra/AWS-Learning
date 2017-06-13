#!/bin/bash
yum update -y
yum install httpd php git -y
cd /var/www/html
git clone https://github.com/mshrinetra/AWS-Learning.git .
service httpd start
chkconfig httpd on


curl -sS https://getcomposer.org/installer | php
php composer.phar require aws/aws-sdk-php

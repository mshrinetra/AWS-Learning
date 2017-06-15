#!/bin/bash
yum update -y
yum install httpd php git -y
cd /var/www/html
git clone https://github.com/mshrinetra/AWS-Learning.git .
service httpd start
chkconfig httpd on


curl -sS https://getcomposer.org/installer | php
php composer.phar require aws/aws-sdk-php

cd /var/www/html
rm AWS-Learning -d -r -f
rm aws-resources -d -r -f
rm cssnjs -d -r -f
rm index.php -f
rm README.md -f
rm addDataToDynamoDb.php -f
rm createNewDynamoDb.php -f
git clone https://github.com/mshrinetra/AWS-Learning.git
ls -a
mv /var/www/html/AWS-Learning/* /var/www/html
rm AWS-Learning -d -r -f
ls -a
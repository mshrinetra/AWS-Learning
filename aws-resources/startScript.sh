#!/bin/bash
yum update -y
yum install httpd php git -y
cd /var/www/http
git clone https://github.com/mshrinetra/AWS-Learning.git .
service httpd start
chkconfig httpd on
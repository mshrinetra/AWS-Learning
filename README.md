# AWS-Learning
Files and documents for AWS Learning

# Pepare Amazon Linux AMI by running folloing commands
sudo su
yum update -y
yum install httpd php git -y
curl -sS https://getcomposer.org/installer | php
php composer.phar require aws/aws-sdk-php
cd /var/www/html
git clone https://github.com/mshrinetra/AWS-Learning.git
mv /var/www/html/AWS-Learning/* /var/www/html
rm AWS-Learning -d -r -f
ls -a
service httpd start
chkconfig httpd on

# To Update web Run following vommands
rm AWS-Learning -d -r -f
rm aws-resources -d -r -f
rm cssnjs -d -r -f
rm *.php -f
rm README.md -f
git clone https://github.com/mshrinetra/AWS-Learning.git
mv /var/www/html/AWS-Learning/* /var/www/html
rm AWS-Learning -d -r -f
ls -a



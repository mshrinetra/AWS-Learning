# AWS-Learning
Files and documents created during and are used for AWS Learning

## Pepare Amazon Linux AMI by running folloing commands
sudo su  
yum update -y  
yum install httpd php git -y  
cd /var/www/html
git clone https://github.com/mshrinetra/AWS-Learning.git .  
curl -sS https://getcomposer.org/installer | php  
php composer.phar require aws/aws-sdk-php  
service httpd start  
chkconfig httpd on  

## To Update web files Run following vommands
rm AWS-Learning -d -r -f  
rm aws-resources -d -r -f  
rm cssnjs -d -r -f  
rm *.php -f  
rm README.md -f  
git clone https://github.com/mshrinetra/AWS-Learning.git  
mv /var/www/html/AWS-Learning/* /var/www/html  
rm AWS-Learning -d -r -f  
ls -a



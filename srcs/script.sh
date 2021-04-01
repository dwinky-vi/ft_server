#!/bin/sh
service php7.3-fpm start
service mysql start
service nginx start

echo "CREATE DATABASE wordpress;" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'adm'@'localhost' IDENTIFIED BY 'adm' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password

bash
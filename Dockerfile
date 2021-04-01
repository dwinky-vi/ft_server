FROM debian:buster

RUN apt-get update && apt-get -y upgrade

RUN apt-get install bash && \
	apt-get install -y vim && \
	apt-get install -y wget && \
	apt-get install -y nginx && \
	apt-get install -y mariadb-server

WORKDIR /var/www/

		#INSTALL wordpress#
RUN wget https://wordpress.org/latest.tar.gz && \
	tar -xf latest.tar.gz && \
	rm -rf latest.tar.gz

		#INSTALL phpMyAdmin#
RUN apt-get -y install php7.3 php-mysql php-fpm php-pdo php-gd php-cli php-mbstring
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-all-languages.tar.gz && \
    tar -xf phpMyAdmin-5.0.4-all-languages.tar.gz && \
    mv phpMyAdmin-5.0.4-all-languages phpmyadmin && \
	rm -rf phpMyAdmin-5.0.4-all-languages.tar.gz
# Описание утилиты tar:
# -x	Извлечь файлы из архива
# -f file	Вывести результат в файл (или на устройство) file
# последовательность важна.

RUN openssl req -x509 -sha256 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/certs/privateKey.key -out /etc/ssl/certs/certificate.crt -subj \
		"/C=RU/ST=Tatarstan/L=Kazan/O=21school/OU=Evolution/CN=localhost"

COPY ./srcs/default /etc/nginx/sites-available/default
COPY ./srcs/config.inc.php /var/www/phpmyadmin
COPY ./srcs/wp-config.php /var/www/wordpress

WORKDIR /var/tmp
COPY ./srcs/script.sh .
CMD bash script.sh
FROM debian:buster

WORKDIR /var/www/html

COPY ./conf/wp-config.php /tmp

COPY ./tools/script.sh /tmp

RUN apt-get update && apt-get install -y curl mariadb-client php7.3 php7.3-fpm php7.3-mysql php7.3-readline php-common

RUN rm -rf /var/lib/apt/lists/*

RUN mkdir -p /var/www/html /var/run /run/php

RUN mv /tmp/wp-config.php /var/www

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar

RUN chmod +x wp-cli.phar

RUN mv wp-cli.phar /usr/local/bin/wp

RUN sed -i 's/listen = \/run\/php\/php7.3-fpm.sock/listen = 0.0.0.0:9000/g' /etc/php/7.3/fpm/pool.d/www.conf

RUN chmod 755 /var/www/html /tmp/script.sh

ENTRYPOINT ["sh", "-c", "/tmp/script.sh && php-fpm7.3 -F"]

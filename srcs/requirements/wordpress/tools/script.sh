#!/bin/sh

sed -i "s/DBNAME/$DBNAME/g" /var/www/wp-config.php
sed -i "s/DBROOT/$DBROOT/g" /var/www/wp-config.php
sed -i "s/PASSROOT/$PASSROOT/g" /var/www/wp-config.php

if ! wp --allow-root core is-installed; then
	wp --allow-root core download
	wp --allow-root core install --url="sobouatt.42.fr" --title="Inception" --admin_user="$DBROOT" --admin_password="$PASSROOT" --admin_email="admin@sobouatt.42.fr" --skip-email
	wp --allow-root user create sobouatt sobouatt@student.42.fr
fi

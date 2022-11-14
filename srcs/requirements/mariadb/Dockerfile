FROM debian:buster

ARG DBNAME
ARG DBUSER
ARG DBROOT
ARG PASSUSER
ARG PASSROOT

RUN apt-get update && apt-get install -y mariadb-server && rm -rf /var/lib/apt/lists/* 

RUN mkdir /var/run/mysqld

RUN chmod 777 /var/lib/mysql/ /run/mysqld

RUN sed -i 's/\/run\/mysqld\/mysqld.pid/\/var\/run\/mysqld\/mysqld.pid/g' /etc/mysql/mariadb.conf.d/50-server.cnf

RUN sed -i 's/\/run\/mysqld\/mysqld.sock/\/var\/run\/mysqld\/mysqld.sock/g' /etc/mysql/mariadb.conf.d/50-server.cnf

RUN sed -i 's/bind-address/#bind-address/g' /etc/mysql/mariadb.conf.d/50-server.cnf

RUN touch config.sql

RUN echo "flush privileges;" >> config.sql 

RUN echo "create database $DBNAME;" >> config.sql

RUN echo "grant all on $DBNAME.* to '$DBUSER'@'%' identified by '$PASSUSER';" >> config.sql

RUN echo "grant all on *.* to '$DBROOT'@'%' identified by '$PASSROOT' with grant option;" >> config.sql

RUN echo "grant all on *.* to $DBROOT@localhost identified by '$PASSROOT' with grant option;" >> config.sql

RUN chmod 755 config.sql

RUN mysqld --bootstrap < config.sql

ENTRYPOINT ["mysqld"]

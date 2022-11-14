FROM debian:buster

ARG NAME
ARG USER
ARG ROOT
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

RUN echo "create database $NAME;" >> config.sql

RUN echo "grant all on $NAME.* to '$USER'@'%' identified by '$PASSUSER';" >> config.sql

RUN echo "grant all on *.* to '$ROOT'@'%' identified by '$PASSROOT' with grant option;" >> config.sql

RUN echo "grant all on *.* to $ROOT@localhost identified by '$PASSROOT' with grant option;" >> config.sql

RUN chmod 755 config.sql

RUN mysqld --bootstrap < config.sql

ENTRYPOINT ["mysqld"]

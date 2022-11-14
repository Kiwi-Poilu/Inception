FROM debian:buster

COPY conf/default.conf /etc/nginx/conf.d/

RUN apt-get update && apt-get install -y nginx openssl && rm -rf /var/lib/apt/lists/*

RUN mkdir -p /etc/nginx/ssl/private /etc/nginx/ssl/certif

RUN openssl req -x509 -nodes -out /etc/nginx/ssl/certif/sobouatt.csr -keyout /etc/nginx/ssl/private/sobouatt.key -subj "/C=FR/ST=IledeFrance/L=Paris/O=42/OU=student/CN=sobouatt.42.fr"

ENTRYPOINT ["nginx", "-g", "daemon off;"]

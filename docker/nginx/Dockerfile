FROM ubuntu:latest
RUN apt-get update
RUN apt-get install -y nginx
COPY ./config/parser.dev.conf /etc/nginx/sites-enabled/parser.dev.conf
WORKDIR /var/www
VOLUME /var/www
EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
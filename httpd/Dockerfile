FROM httpd:latest

LABEL maintainer="Czompi Software (czompi@czompi.hu)"

COPY httpd.conf /usr/local/apache2/conf/httpd.conf
COPY httpd-ssl.conf /usr/local/apache2/conf/extra/httpd-ssl.conf

RUN mkdir -p /usr/local/apache2/conf/sites_enabled/

EXPOSE 80
EXPOSE 443

CMD ["httpd", "-D", "FOREGROUND"]
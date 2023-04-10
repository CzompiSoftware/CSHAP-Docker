FROM httpd:alpine

LABEL maintainer="Czompi Software (czompi@czompi.hu)"
LABEL version="1.5"

COPY httpd.conf /usr/local/apache2/conf/httpd.conf
COPY httpd-ssl.conf /usr/local/apache2/conf/extra/httpd-ssl.conf
COPY default.conf /usr/local/apache2/conf/default-site.conf

RUN mkdir -p /usr/local/apache2/conf/sites_enabled/

VOLUME [ "/apache-logs" ]
VOLUME [ "/apache-errors" ]
VOLUME [ "/apache-ssl" ]
VOLUME [ "/apache-sites" ]
VOLUME [ "/usr/local/apache2/conf/sites_enabled" ]

EXPOSE 443
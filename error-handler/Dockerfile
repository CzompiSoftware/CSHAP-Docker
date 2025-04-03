FROM trafex/php-nginx:latest

LABEL maintainer="Czompi Software (developer@czsoft.hu)"
LABEL version="2.0.0-3.8.0"

COPY ./src/app /var/www/html
COPY ./src/default-lang /app/default-lang


# CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
COPY ./src/entrypoint.sh /

# Make the script executable
RUN chmod +x /entrypoint.sh

# Set the entrypoint
ENTRYPOINT ["/entrypoint.sh"]
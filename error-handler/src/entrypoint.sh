#!/bin/sh

# Ensure /lang directory exists
mkdir -p /lang

# Copy files from /app/default-lang to /lang only if they don't already exist
for file in /app/default-lang/*; do
  filename=$(basename "$file")
  target="/lang/$filename"
  if [ ! -e "$target" ]; then
    cp "$file" "$target"
  fi
done
#/usr/bin/supervisord -c "/etc/supervisor/conf.d/supervisord.conf"

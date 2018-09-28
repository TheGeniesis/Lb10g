FROM nginx:alpine

WORKING_DIR /app

RUN chgrp -R www-data storage bootstrap/cache \
    && chmod -R ug+rwx storage bootstrap/cache

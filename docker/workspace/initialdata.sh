#!/bin/sh

if [ ! -e "/tmp/.initializedfile" ]; then
    cd /var/www/myPortfolio
    php artisan migrate --seed
    touch /tmp/.initializedfile
    echo "Successfully Initialize MyPortfolio Data."
else
    echo "Already Initialized."
fi

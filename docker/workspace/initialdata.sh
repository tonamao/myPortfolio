#!/bin/sh

# MySQLサーバーが起動するまでループで待機する
until mysqladmin ping -h mysql --silent; do
  echo 'waiting for mysql to be connectable...'
  sleep 2
done

echo "Insert init data."

if [ ! -e "/tmp/.initializedfile" ]; then
    cd /var/www/myPortfolio
    echo "pwd"
    pwd
    echo "ls -al"
    ls -al
    php artisan migrate --seed
    touch /tmp/.initializedfile
    echo "Successfully Initialize MyPortfolio Data."
else
    echo "Already Initialized."
fi

/bin/sh

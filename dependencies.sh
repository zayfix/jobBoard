#!/bin/bash

# LAMP
sudo apt install apache2 php libapache2-mod-php mysql-server php-mysql
# PHP Modules
sudo apt install php-curl php-gd php-intl php-json php-mbstring php-xml php-zip
# Composer for Symfony
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '795f976fe0ebd8b75f26a6dd68f78fd3453ce79f32ecb33e7fd087d39bfeb978342fb73ac986cd4f54edd0dc902601dc') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

echo "dependencies.sh finished."
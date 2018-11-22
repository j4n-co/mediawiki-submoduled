#!/bin/bash
. conf.ini

git submodule update --init --recursive --remote

rm ../w/LocalSettings.php

./1.create_symlinks.sh

php ../w/maintenance/install.php localwiki admin \
--conf=../LocalSettings.php \
--wiki=$DB_NAME \
--dbuser=$DB_USER \
--dbpass=$DB_PASS \
--dbname=$DB_NAME \
--dbserver=$DB_SERVER  \
--dbtype=$DB_TYPE \
--lang=en \
--pass=$ADMIN_PASS \
--with-extensions \
--mwdebug=true \
--scriptpath="/w"

./2.replace_localsettings.sh

./3.install_composer.sh

./4.update_db.sh

./5.extensions.sh

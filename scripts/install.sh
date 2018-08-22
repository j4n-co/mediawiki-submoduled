#!/bin/bash
. conf.ini

rm ../mediawiki/LocalSettings.php

./create_symlinks.sh

php ../mediawiki/maintenance/install.php localwiki admin \
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
--mwdebug=true

./replace_localsettings.sh

./install_composer.sh

./update_db.sh

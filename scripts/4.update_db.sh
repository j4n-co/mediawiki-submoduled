#!/bin/bash

php ./composer.phar update --no-dev --working-dir=../w

php ./composer.phar install --working-dir=../w

php ../w/maintenance/update.php

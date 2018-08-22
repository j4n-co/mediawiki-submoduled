#!/bin/bash

php ./composer.phar install --working-dir=../mediawiki

php ../mediawiki/maintenance/update.php

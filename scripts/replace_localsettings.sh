#!/bin/bash

cat <<EOT > ../mediawiki/LocalSettings.php
<?php

include_once '../LocalSettings.php';
EOT

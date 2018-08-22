<?php

$conf = parse_ini_file( "../scripts/conf.ini" );

## Database settings
$wgDBtype = $conf["DB_TYPE"];
$wgDBserver = $conf["DB_SERVER"];
$wgDBname = $conf["DB_NAME"];
$wgDBuser = $conf["DB_USER"];
$wgDBpassword = $conf["DB_PASS"];

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

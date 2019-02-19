<?php
## The protocol and server name to use in fully-qualified URLs
// $wgServer = "https://lazy-dolphin-20.localtunnel.me";
$wgServer = "http://localhost";
// $wgInternalServer = "http://localhost:80";

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "localwiki";
$wgMetaNamespace = "Localwiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "/w";        // this should already have been configured this way
$wgArticlePath = "/wiki/$1";
$wgUsePathInfo = true;

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

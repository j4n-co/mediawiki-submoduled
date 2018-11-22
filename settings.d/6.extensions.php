<?php
/** EventLogging */
wfLoadExtension( 'EventLogging' );
$wgEventLoggingBaseUri = 'http://localhost/event.gif';
$wgEventLoggingFile = '/var/log/mediawiki/events.log';

/** Cite */
wfLoadExtension( 'Cite' );

/** Echo */
wfLoadExtension( 'Echo' );

/** Interwiki */
wfLoadExtension( 'Interwiki' );

/** Math */
wfLoadExtension( 'Math' );

/** GeoData */
wfLoadExtension( 'GeoData' );

/** PageImages */
wfLoadExtension( 'PageImages' );

/** TextExtracts */
wfLoadExtension( 'TextExtracts' );

/** Popups */
wfLoadExtension('Popups');
$wgPopupsBetaFeature = true;
$wgPopupsExperiment = false;
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsOptInDefaultState = '1';

/** Scribunto
 * Set execute permissions for the Lua binaries bundled with this extension:
 * chmod a+x /path/to/extensions/Scribunto/includes/engines/LuaStandalone/binaries/yourOS/lua
 */
wfLoadExtension( 'Scribunto' );
$wgScribuntoDefaultEngine = 'luastandalone';

/** TemplateStyles */
wfLoadExtension( 'TemplateStyles' );

/** ParserFunctions */
wfLoadExtension( 'ParserFunctions' );
$wgPFEnableStringFunctions = true;

/** Wikibase - doesn't work! */
#$wgEnableWikibaseRepo = false;
#$wgEnableWikibaseClient = true;
#require_once "$IP/extensions/Wikibase/client/WikibaseClient.php";
#require_once "$IP/extensions/Wikibase/client/ExampleSettings.php";

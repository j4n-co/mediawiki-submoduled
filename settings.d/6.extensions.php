<?php
/** EventLogging */
wfLoadExtension( 'EventLogging' );
$wgEventLoggingBaseUri = 'http://localhost/event.gif';
$wgEventLoggingFile = '/var/log/mediawiki/events.log';

/* WikimediaEvents */
wfLoadExtension( 'WikimediaEvents' );
// enable readingDepth schema
$wgWMEReadingDepthEnabled = true;
$wgWMEReadingDepthSamplingRate = 1;

/** ULS */
wfLoadExtension( 'UniversalLanguageSelector' );

/** Cite */
wfLoadExtension( 'Cite' );

/** Echo */
wfLoadExtension( 'Echo' );

/** Interwiki */
wfLoadExtension( 'Interwiki' );

/** Math */
// wfLoadExtension( 'Math' );

/** GeoData */
wfLoadExtension( 'GeoData' );

/** PageImages */
wfLoadExtension( 'PageImages' );

/** TextExtracts */
wfLoadExtension( 'TextExtracts' );

/** Extrernal Guidance */
wfLoadExtension( 'ExternalGuidance' );
$GLOBALS['wgExternalGuidanceSimulate'] = true;
$GLOBALS['wgExternalGuidanceMTReferrers'] = [ "translate.google.com", "translate.googleusercontent.com" ];

/** Popups */
wfLoadExtension('Popups');
$wgPopupsBetaFeature = true;
$wgPopupsExperiment = false;
$wgPopupsHideOptInOnPreferencesPage = true;
$wgPopupsOptInDefaultState = '1';
/* live Popups content from enwiki */
$wgPopupsGateway = "restbaseHTML";
$wgPopupsRestGatewayEndpoint = 'https://en.wikipedia.org/api/rest_v1/page/summary/';


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

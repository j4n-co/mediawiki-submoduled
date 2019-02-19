<?php

wfLoadExtension( 'MobileFrontend' );
$wgMFAutodetectMobileView = true;
$wgMFDefaultSkinClass = 'SkinMinerva';

// -- Mobile frontend content --//
$wgMFContentProviderClass = 'MobileFrontend\ContentProviders\MwApiContentProvider';
$wgMFMwApiContentProviderBaseUri = 'https://en.m.wikipedia.org/w/api.php';
$wgMFDisplayWikibaseDescriptions = [
    'search' => true,
    'nearby' => true,
    'watchlist' => true,
    'tagline' => true,
];

$wgMFEnableBeta = true;

// Nearby feature
$wgMFNearby = true;
$wgMFNearbyEndpoint = 'https://en.m.wikipedia.org/w/api.php';

// AMC mode
$wgMFAdvancedMobileContributions = true;

// Wikidata descriptions
$wgMFEnableWikidataDescriptions =   [
	'beta' => false,
	'base' => false,
];


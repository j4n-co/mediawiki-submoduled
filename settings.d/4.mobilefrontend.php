<?php

wfLoadExtension( 'MobileFrontend' );
$wgMFAutodetectMobileView = true;
$wgMFDefaultSkinClass = 'SkinMinerva';

// -- Mobile frontend content --//
$wgMFNearbyEndpoint = 'https://en.m.wikipedia.org/w/api.php';
$wgMFContentProviderClass = 'MobileFrontend\ContentProviders\MwApiContentProvider';
$wgMFMwApiContentProviderBaseUri = 'https://en.m.wikipedia.org/w/api.php';
$wgMFDisplayWikibaseDescriptions = [
    'search' => true,
    'nearby' => true,
    'watchlist' => true,
    'tagline' => true,
];


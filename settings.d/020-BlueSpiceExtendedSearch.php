<?php
return; // Disabled. Needs Tomcat

wfLoadExtension( 'BlueSpiceExtendedSearch' );
// Set ExtendedSearch backend as default MW engine
$GLOBALS['wgSearchType'] = \BS\ExtendedSearch\MediaWiki\Backend\BlueSpiceSearch::class;

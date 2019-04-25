<?php
global $IP;
$GLOBALS['wgAutoloadClasses']['RebuildTitleKeys'] = "$IP/extensions/TitleKey/rebuildTitleKeys.php";
require_once "$IP/extensions/TitleKey/TitleKey_body.php";
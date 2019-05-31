<?php

require_once __DIR__ . '/includes/BsWebInstaller.php';
require_once __DIR__ . '/includes/BsWebInstallerOptions.php';
require_once __DIR__ . '/includes/BsWebInstallerOutput.php';
require_once __DIR__ . '/includes/BsLocalSettingsGenerator.php';

$overrides['LocalSettingsGenerator'] = 'BsLocalSettingsGenerator';
$overrides['WebInstaller'] = 'BsWebInstaller';

$GLOBALS['bsgSkipExtensions'] = array(
	'BlueSpiceFoundation'
);

<?php

$GLOBALS['wgAutoloadClasses']['BsWebInstaller'] = __DIR__ . '/includes/BsWebInstaller.php';
$GLOBALS['wgAutoloadClasses']['BsWebInstallerOptions'] = __DIR__ . '/includes/BsWebInstallerOptions.php';
$GLOBALS['wgAutoloadClasses']['BsWebInstallerOutput'] = __DIR__ . '/includes/BsWebInstallerOutput.php';
$GLOBALS['wgAutoloadClasses']['BsLocalSettingsGenerator'] = __DIR__ . '/includes/BsLocalSettingsGenerator.php';

$overrides['LocalSettingsGenerator'] = 'BsLocalSettingsGenerator';
$overrides['WebInstaller'] = 'BsWebInstaller';

$GLOBALS['bsgSkipExtensions'] = array(
	'BlueSpiceFoundation'
);
<?php
$overrides['LocalSettingsGenerator'] = 'BSLocalSettingsGenerator';

class BSLocalSettingsGenerator extends LocalSettingsGenerator {
	function getText() {
		// add a new setting
		$ls = parent::getText();
		return $ls . "\nrequire_once \"\$IP/LocalSettings.BlueSpice.php\";\n";
	}
}

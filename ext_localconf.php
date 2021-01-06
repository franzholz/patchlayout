<?php
defined('TYPO3_MODE') || die('Access denied.');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Backend\\View\\BackendLayoutView'] = [
	'className' => 'Bugfix\\Patchlayout\\Backend\\View\\BackendLayoutView'
];



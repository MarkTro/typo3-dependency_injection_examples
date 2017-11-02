<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Matrog.' . $_EXTKEY,
    'DIExamples',
    [
		'Examples' => 'index',
	],
	[
		'Examples' => 'index',
	]
);

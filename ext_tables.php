<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Matrog.' .$_EXTKEY,
    'DIExamples',
    'Dependency Injection Examples'
);

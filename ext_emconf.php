<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Examples of the dependeny injections',
    'description' => 'This extension shows the three methods of dependency injections in Typo3',
    'category' => 'plugin',
    'version' => '7.6.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => false,
    'author' => 'Markus Troeger',
    'author_email' => 'typo3@matrog.de',
    'author_company' => 'Matrog',
    'constraints' => [
        'depends' => [
            'php' => '5.3.7-0.0.0',
            'typo3' => '6.0.0-7.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

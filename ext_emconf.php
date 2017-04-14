<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Cart Extended Product',
    'description' => 'Shopping Cart(s) for TYPO3 - Extended Product Example',
    'category' => 'services',
    'author' => 'Daniel Lorenz',
    'author_email' => 'ext.cart@extco.de',
    'author_company' => 'extco.de UG (haftungsbeschränkt)',
    'shy' => '',
    'priority' => '',
    'module' => '',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'modify_tables' => '',
    'clearCacheOnLoad' => 0,
    'lockType' => '',
    'version' => '0.3.0',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-8.7.99',
            'php' => '5.4.0',
            'cart' => '3.0.1',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

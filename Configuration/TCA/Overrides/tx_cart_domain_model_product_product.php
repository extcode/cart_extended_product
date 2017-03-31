<?php

defined('TYPO3_MODE') or die();

$_LLL = 'LLL:EXT:cart_extended_product/Resources/Private/Language/locallang_db.xlf';

$temporaryColumns = [
    'manufacturer' => [
        'exclude' => 1,
        'label' => $_LLL . ':tx_cart_domain_model_product_product.manufacturer',
        'config' => [
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim'
        ],
    ],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_cart_domain_model_product_product',
    $temporaryColumns
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tx_cart_domain_model_product_product',
    'manufacturer',
    '',
    'after:title'
);

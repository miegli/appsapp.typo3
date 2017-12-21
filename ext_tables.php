<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Appsapp.Appsapp',
            'Appsapp',
            'Appsapp'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('appsapp', 'Configuration/TypoScript', 'Appsapp');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_appsapp_domain_model_appsapp', 'EXT:appsapp/Resources/Private/Language/locallang_csh_tx_appsapp_domain_model_appsapp.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_appsapp_domain_model_appsapp');

    }
);

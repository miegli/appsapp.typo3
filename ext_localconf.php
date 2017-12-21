<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {


        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \Appsapp\Appsapp\Command\CompilerCommandController::class;

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Appsapp.Appsapp',
            'Appsapp',
            [
                'Appsapp' => 'list'
            ],
            // non-cacheable actions
            [
                'Appsapp' => 'create, update, delete, '
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    appsapp {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('appsapp') . 'Resources/Public/Icons/user_plugin_appsapp.svg
                        title = LLL:EXT:appsapp/Resources/Private/Language/locallang_db.xlf:tx_appsapp_domain_model_appsapp
                        description = LLL:EXT:appsapp/Resources/Private/Language/locallang_db.xlf:tx_appsapp_domain_model_appsapp.description
                        tt_content_defValues {
                            CType = list
                            list_type = appsapp_appsapp
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);

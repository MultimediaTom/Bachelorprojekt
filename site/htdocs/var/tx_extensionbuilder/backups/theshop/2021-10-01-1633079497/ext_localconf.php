<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Theshop',
        'Theshop',
        [
            \AxelSchaefer\Theshop\Controller\KundeController::class => 'index, list, show, new, create, edit, update, delete',
            \AxelSchaefer\Theshop\Controller\ProduktController::class => 'index, list, show, new, create, edit, update, delete',
            \AxelSchaefer\Theshop\Controller\WarenkorbController::class => 'index, list, show, new, create, edit, update, delete'
        ],
        // non-cacheable actions
        [
            \AxelSchaefer\Theshop\Controller\KundeController::class => 'create, update, delete',
            \AxelSchaefer\Theshop\Controller\ProduktController::class => 'create, update, delete',
            \AxelSchaefer\Theshop\Controller\WarenkorbController::class => 'create, update, delete'
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    theshop {
                        iconIdentifier = theshop-plugin-theshop
                        title = LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_theshop.name
                        description = LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_theshop.description
                        tt_content_defValues {
                            CType = list
                            list_type = theshop_theshop
                        }
                    }
                }
                show = *
            }
       }'
    );

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
        'theshop-plugin-theshop',
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:theshop/Resources/Public/Icons/user_plugin_theshop.svg']
    );
});

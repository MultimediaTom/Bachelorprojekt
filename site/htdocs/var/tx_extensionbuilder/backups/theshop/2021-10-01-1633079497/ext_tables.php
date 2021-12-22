<?php
defined('TYPO3_MODE') || die();

call_user_func(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Theshop',
        'web',
        'theshop',
        '',
        [
            \AxelSchaefer\Theshop\Controller\KundeController::class => 'index, list, show, new, create, edit, update, delete',\AxelSchaefer\Theshop\Controller\ProduktController::class => 'index, list, show, new, create, edit, update, delete',\AxelSchaefer\Theshop\Controller\WarenkorbController::class => 'index, list, show, new, create, edit, update, delete',
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:theshop/Resources/Public/Icons/user_mod_theshop.svg',
            'labels' => 'LLL:EXT:theshop/Resources/Private/Language/locallang_theshop.xlf',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_theshop_domain_model_kunde', 'EXT:theshop/Resources/Private/Language/locallang_csh_tx_theshop_domain_model_kunde.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_theshop_domain_model_kunde');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_theshop_domain_model_produkt', 'EXT:theshop/Resources/Private/Language/locallang_csh_tx_theshop_domain_model_produkt.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_theshop_domain_model_produkt');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_theshop_domain_model_warenkorb', 'EXT:theshop/Resources/Private/Language/locallang_csh_tx_theshop_domain_model_warenkorb.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_theshop_domain_model_warenkorb');
});

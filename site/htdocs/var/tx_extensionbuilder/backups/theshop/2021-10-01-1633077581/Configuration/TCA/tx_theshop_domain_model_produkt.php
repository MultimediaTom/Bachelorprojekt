<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_domain_model_produkt',
        'label' => 'artikelnummer',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'artikelnummer,bezeichnung,beschreibung,bilddatei',
        'iconfile' => 'EXT:theshop/Resources/Public/Icons/tx_theshop_domain_model_produkt.gif'
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, artikelnummer, bezeichnung, beschreibung, preis, lagermenge, bilddatei, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_theshop_domain_model_produkt',
                'foreign_table_where' => 'AND {#tx_theshop_domain_model_produkt}.{#pid}=###CURRENT_PID### AND {#tx_theshop_domain_model_produkt}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'artikelnummer' => [
            'exclude' => true,
            'label' => 'LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_domain_model_produkt.artikelnummer',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'default' => ''
            ]
        ],
        'bezeichnung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_domain_model_produkt.bezeichnung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'beschreibung' => [
            'exclude' => true,
            'label' => 'LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_domain_model_produkt.beschreibung',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
        'preis' => [
            'exclude' => true,
            'label' => 'LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_domain_model_produkt.preis',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'double2'
            ]
        ],
        'lagermenge' => [
            'exclude' => true,
            'label' => 'LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_domain_model_produkt.lagermenge',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int',
                'default' => 0
            ]
        ],
        'bilddatei' => [
            'exclude' => true,
            'label' => 'LLL:EXT:theshop/Resources/Private/Language/locallang_db.xlf:tx_theshop_domain_model_produkt.bilddatei',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'default' => ''
            ],
        ],
    
    ],
];

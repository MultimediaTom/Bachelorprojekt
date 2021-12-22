<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "phpmyadmin".
 *
 * Auto generated 22-09-2021 09:49
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'phpMyAdmin',
  'description' => 'Third party \'phpMyAdmin\' administration module. Access to admin-users only.',
  'category' => 'module',
  'version' => '5.6.4',
  'state' => 'stable',
  'uploadfolder' => true,
  'clearcacheonload' => false,
  'author' => 'Andreas Beutel - mehrwert',
  'author_email' => 'typo3@mehrwert.de',
  'author_company' => 'mehrwert intermediale kommunikation GmbH',
  'doNotLoadInFE' => 1,
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.0.0-7.3.99',
      'typo3' => '8.7.0-10.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
);


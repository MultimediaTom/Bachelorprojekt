<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "sf_register".
 *
 * Auto generated 30-09-2021 09:03
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Frontend User Registration',
  'description' => 'Offers the possibility to maintain the fe_user data in frontend by the user self.',
  'category' => 'fe',
  'author' => 'Sebastian Fischer',
  'author_email' => 'typo3@evoweb.de',
  'author_company' => 'evoWeb',
  'state' => 'stable',
  'clearCacheOnLoad' => true,
  'version' => '10.1.5',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.4.0-10.4.99',
    ),
    'suggests' => 
    array (
      'extender' => '7.0.0-',
      'recaptcha' => '10.0.0-',
    ),
    'conflicts' => 
    array (
    ),
  ),
  'uploadfolder' => true,
  'clearcacheonload' => false,
);


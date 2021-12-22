<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "news".
 *
 * Auto generated 30-09-2021 09:02
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'News system',
  'description' => 'Versatile news extension, based on extbase & fluid. Editor friendly, default integration of social sharing and many other features',
  'category' => 'fe',
  'author' => 'Georg Ringer',
  'author_email' => 'mail@ringer.it',
  'state' => 'stable',
  'clearCacheOnLoad' => true,
  'version' => '8.6.0',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '9.5.17-10.9.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
      'rx_shariff' => '12.0.0-13.99.99',
    ),
  ),
  'uploadfolder' => false,
  'clearcacheonload' => true,
  'author_company' => NULL,
);


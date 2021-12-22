<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "introduction".
 *
 * Auto generated 20-12-2021 21:03
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'The Official TYPO3 Introduction Package',
  'description' => 'This package delivers a new website (page tree) and shows all out-of-the-box features of TYPO3, and includes a theme based on Twitter Bootstrap 3, and a style editor to customize the design. Sample backend groups are added',
  'category' => 'distribution',
  'version' => '4.3.2',
  'state' => 'stable',
  'clearcacheonload' => false,
  'author' => 'Introduction Package Team',
  'author_email' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'typo3' => '10.4.10-10.4.99',
      'bootstrap_package' => '12.0.2-12.9.99',
      'felogin' => '10.4.10-10.4.99',
      'filemetadata' => '10.4.10-10.4.99',
      'form' => '10.4.10-10.4.99',
      'impexp' => '10.4.10-10.4.99',
      'indexed_search' => '10.4.10-10.4.99',
      'tstemplate' => '10.4.10-10.4.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'uploadfolder' => false,
  'author_company' => NULL,
);


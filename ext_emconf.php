<?php

$EM_CONF[$_EXTKEY] = array(
  'title' => 'TYPO3 Foundation',
  'description' => 'Foundation framework for TYPO3 in addition to the Foundation extension. '
  . 'Manual: http://typo3-foundation.de/typo3conf/ext/t3foundation/doc/manual.pdf. '
  . 'Foundation: http://foundation.zurb.com/'
  ,
  'category' => 'be',
  'author' => 'Dirk Wildt (Die Netzmacher)',
  'author_email' => 'http://wildt.at.die-netzmacher.de',
  'state' => 'alpha',
  'internal' => '',
  'uploadfolder' => '0',
  'createDirs' => '',
  'clearCacheOnLoad' => 1,
  'version' => '1.0.0',
  'constraints' => array(
    'depends' => array(
      'typo3' => '6.2.0-6.2.99',
    ),
    'conflicts' => array(
    ),
    'suggests' => array(
    ),
  ),
);
?>
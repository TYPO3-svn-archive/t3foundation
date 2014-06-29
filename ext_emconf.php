<?php

$EM_CONF[$_EXTKEY] = array(
  'title' => 'TYPO3 Foundation',
  'description' => 'Foundation for TYPO3. The responsive front-end framework. '
  . 'Manual: http://typo3-foundation.de/typo3conf/ext/t3foundation/doc/manual.pdf. '
  . '.Foundation: http://foundation.zurb.com/'
  ,
  'category' => 'fe',
  'author' => 'Dirk Wildt (Die Netzmacher)',
  'author_email' => 'http://wildt.at.die-netzmacher.de',
  'state' => 'alpha',
  'internal' => '',
  'uploadfolder' => '0',
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '0.2.0',
  'constraints' => array(
    'depends' => array(
      'typo3' => '4.5.0-6.2.99',
    ),
    'conflicts' => array(
    ),
    'suggests' => array(
    ),
  ),
);
?>
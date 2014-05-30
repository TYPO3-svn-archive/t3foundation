<?php
if( ! defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}



  ////////////////////////////////////////////////////////////////////////////
  //
  // INDEX

  // Set TYPO3 version
  // Configuration by the extension manager
  //    Localization support
  // Enables the Include Static Templates
  // Add pagetree icons
  // Methods for backend workflows



  ////////////////////////////////////////////////////////////////////////////
  //
  // Set TYPO3 version

  // Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)
list( $main, $sub, $bugfix ) = explode( '.', TYPO3_version );
$version = ( ( int ) $main ) * 1000000;
$version = $version + ( ( int ) $sub ) * 1000;
$version = $version + ( ( int ) $bugfix ) * 1;
$typo3Version = $version;
  // Set TYPO3 version as integer (sample: 4.7.7 -> 4007007)

if( $typo3Version < 4005000 )
{
  $prompt = '<h1>ERROR</h1>
    <h2>Unproper TYPO3 version</h2>
    <ul>
      <li>
        TYPO3 version is smaller than 4.5.0
      </li>
      <li>
        constant TYPO3_version: ' . TYPO3_version . '
      </li>
      <li>
        integer $this->typo3Version: ' . ( int ) $this->typo3Version . '
      </li>
    </ul>
      ';
  die ( $prompt );
}
  // Set TYPO3 version




  ////////////////////////////////////////////////////////////////////////////
  //
  // Configuration by the extension manager

$confArr  = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['t3foundation']);

  // Language for labels of static templates and page tsConfig
$beLanguage = $confArr['beLanguage'];
switch( $beLanguage )
{
  case( 'German'):
    $beLanguage = 'de';
    break;
  default:
    $beLanguage = 'default';
}
  // Language for labels of static templates and page tsConfig
  // Configuration by the extension manager




  ////////////////////////////////////////////////////////////////////////////
  //
  // Enables the Include Static Templates

  // Case $beLanguage
switch( true )
{
  case( $beLanguage == 'de' ):
      // German
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Page/5x/',                'Foundation [1] 5x');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Page/4x/',                'Foundation [1] 4x ');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Foundation/4x/powermail', 'Foundation [2] 4x + Powermail 2x');
    break;
  default:
      // English
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Page/5x/',                'Foundation [1] 5x');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Page/4x/',                'Foundation [1] 4x ');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript/Foundation/4x/powermail', 'Foundation [2] 4x + Powermail 2x');
    break;
}
  // Case $beLanguage
  // Enables the Include Static Templates



  ////////////////////////////////////////////////////////////////////////////
  //
  // Add pagetree icons

  // Case $beLanguage
switch( true )
{
  case( $beLanguage == 'de' ):
      // German
    $TCA['pages']['columns']['module']['config']['items'][] =
       array( 'Foundation', 't3foundatn', t3lib_extMgm::extRelPath( $_EXTKEY ).'ext_icon.gif' );
    break;
  default:
      // English
    $TCA['pages']['columns']['module']['config']['items'][] =
       array( 'Foundation', 't3foundatn', t3lib_extMgm::extRelPath( $_EXTKEY ).'ext_icon.gif' );
}
  // Case $beLanguage

t3lib_SpriteManager::addTcaTypeIcon('pages', 'contains-t3foundatn', '../typo3conf/ext/t3foundation/ext_icon.gif');
  // Add pagetree icons



  ///////////////////////////////////////////////////////////
  //
  // Methods for backend workflows

//require_once(t3lib_extMgm::extPath($_EXTKEY).'lib/flexform/class.tx_t3foundation_flexform.php');
require_once(t3lib_extMgm::extPath($_EXTKEY).'lib/userfunc/class.tx_t3foundation_userfunc.php');
  // Methods for backend workflows



?>
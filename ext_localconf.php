<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

if ( TYPO3_MODE !== 'BE' )
{
  return;
}

// #i0001, 140629, dwildt, 1+
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig( '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/ext_localconf/addPageTSConfig/components/navigation/topbar.txt">' );

/* * ****************************************************************************
 * BackendLayoutDataProvider
 * **************************************************************************** */
$GLOBALS[ 'TYPO3_CONF_VARS' ][ 'SC_OPTIONS' ][ 'BackendLayoutDataProvider' ][ 't3foundation' ]  = 'Netzmacher\\T3foundation\\Provider\\BackendLayoutDataProvider';
?>
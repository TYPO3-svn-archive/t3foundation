<?php

namespace Netzmacher\T3Foundation\Provider;

/* * *************************************************************
 *
 *  The MIT License (MIT)
 *
 *  Copyright (c) 2014 Dirk Wildt, http://wildt.at.die-netzmacher.de
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 * ************************************************************* */


use TYPO3\CMS\Backend\View\BackendLayout\BackendLayout;
use TYPO3\CMS\Backend\View\BackendLayout\BackendLayoutCollection;
use TYPO3\CMS\Backend\View\BackendLayout\DataProviderContext;
#use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * @author Dirk Wildt <http://wildt.at.die-netzmacher.de>
 */

class BackendLayoutDataProvider implements \TYPO3\CMS\Backend\View\BackendLayout\DataProviderInterface
{

  /**
   * Default Backend Layouts for Bootstrap Theme
   *
   * @var array
   */
  protected $backendLayouts = array(
    'default' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.default',
      'config' => '
        backend_layout {
          colCount = 4
          rowCount = 1
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:cms/locallang_ttc.xlf:colPos.I.0
                  colPos  = 1
                }
                2 {
                  name = LLL:EXT:cms/locallang_ttc.xlf:colPos.I.1
                  colPos  = 0
                }
                3 {
                  name = LLL:EXT:cms/locallang_ttc.xlf:colPos.I.2
                  colPos  = 2
                }
                4 {
                  name = LLL:EXT:cms/locallang_ttc.xlf:colPos.I.3
                  colPos  = 3
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_default.gif'
    ),
    'bronze_01' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.bronze_01',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_bronze_01.gif'
    ),
    'bronze_02' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.bronze_02',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 8
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_bronze_02.gif'
    ),
    'bronze_03' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.bronze_03',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 8
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 4
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_bronze_03.gif'
    ),
    'bronze_04' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.bronze_04',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 4
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_bronze_04.gif'
    ),
    'silver_01' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.silver_01',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 4
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_silver_01.gif'
    ),
    'silver_02' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.silver_02',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 4
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 8
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_silver_02.gif'
    ),
    'silver_03' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.silver_03',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 4
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 8
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 4
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_silver_03.gif'
    ),
    'silver_04' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.silver_04',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 6
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 4
                  colspan = 12
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_silver_04.gif'
    ),
    'gold_01' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.gold_01',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 10
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.top
                  colPos  = 10
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.left
                  colPos  = 13
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.right
                  colPos  = 14
                  colspan = 3
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.bottom
                  colPos  = 12
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 4
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 12
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            7 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.top
                  colPos  = 20
                  colspan = 12
                }
              }
            }
            8 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.left
                  colPos  = 23
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.right
                  colPos  = 24
                  colspan = 3
                }
              }
            }
            9 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.bottom
                  colPos  = 22
                  colspan = 12
                }
              }
            }
            10 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_gold_01.gif'
    ),
    'gold_02' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.gold_02',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 10
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.top
                  colPos  = 10
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.left
                  colPos  = 13
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.right
                  colPos  = 14
                  colspan = 3
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.bottom
                  colPos  = 12
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 4
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 4
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 8
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            7 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.top
                  colPos  = 20
                  colspan = 12
                }
              }
            }
            8 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.left
                  colPos  = 23
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.right
                  colPos  = 24
                  colspan = 3
                }
              }
            }
            9 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.bottom
                  colPos  = 22
                  colspan = 12
                }
              }
            }
            10 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_gold_02.gif'
    ),
    'gold_03' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.gold_03',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 10
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.top
                  colPos  = 10
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.left
                  colPos  = 13
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.right
                  colPos  = 14
                  colspan = 3
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.bottom
                  colPos  = 12
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 4
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 8
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 4
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            7 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.top
                  colPos  = 20
                  colspan = 12
                }
              }
            }
            8 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.left
                  colPos  = 23
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.right
                  colPos  = 24
                  colspan = 3
                }
              }
            }
            9 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.bottom
                  colPos  = 22
                  colspan = 12
                }
              }
            }
            10 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_gold_03.gif'
    ),
    'gold_04' => array(
      'title' => 'LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.gold_04',
      'config' => '
        backend_layout {
          colCount = 12
          rowCount = 10
          rows {
            1 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.top
                  colPos  = 10
                  colspan = 12
                }
              }
            }
            2 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.left
                  colPos  = 13
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header
                  colPos  = 11
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.right
                  colPos  = 14
                  colspan = 3
                }
              }
            }
            3 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.header.bottom
                  colPos  = 12
                  colspan = 12
                }
              }
            }
            4 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.top
                  colPos  = 4
                  colspan = 12
                }
              }
            }
            5 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.left
                  colPos  = 1
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content
                  colPos  = 0
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.right
                  colPos  = 2
                  colspan = 3
                }
              }
            }
            6 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.content.bottom
                  colPos  = 3
                  colspan = 12
                }
              }
            }
            7 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.top
                  colPos  = 20
                  colspan = 12
                }
              }
            }
            8 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.left
                  colPos  = 23
                  colspan = 3
                }
                2 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer
                  colPos  = 21
                  colspan = 6
                }
                3 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.right
                  colPos  = 24
                  colspan = 3
                }
              }
            }
            9 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.footer.bottom
                  colPos  = 22
                  colspan = 12
                }
              }
            }
            10 {
              columns {
                1 {
                  name = LLL:EXT:t3foundation/Resources/Private/Language/Backend.xlf:backend_layout.column.hidden
                  colPos  = -2
                  colspan = 12
                }
              }
            }
          }
        }
      ',
      'icon' => 'EXT:t3foundation/Resources/Private/Images/BackendLayouts/t3foundation_gold_04.gif'
    ),
  );

  /**
   * @param DataProviderContext $dataProviderContext
   * @param BackendLayoutCollection $backendLayoutCollection
   * @return void
   */
  public function addBackendLayouts( DataProviderContext $dataProviderContext, BackendLayoutCollection $backendLayoutCollection )
  {
    foreach ( $this->backendLayouts as $key => $data )
    {
      $data[ 'uid' ] = $key;
      $backendLayout = $this->createBackendLayout( $data );
      $backendLayoutCollection->add( $backendLayout );
    }
  }

  /**
   * Gets a backend layout by (regular) identifier.
   *
   * @param string $identifier
   * @param integer $pageId
   * @return NULL|BackendLayout
   */
  public function getBackendLayout( $identifier, $pageId )
  {
    $backendLayout = NULL;
    if ( array_key_exists( $identifier, $this->backendLayouts ) )
    {
      return $this->createBackendLayout( $this->backendLayouts[ $identifier ] );
    }
    return $backendLayout;
  }

  /**
   * Creates a new backend layout using the given record data.
   *
   * @param array $data
   * @return BackendLayout
   */
  protected function createBackendLayout( array $data )
  {
    $backendLayout = BackendLayout::create( $data[ 'uid' ], $data[ 'title' ], $data[ 'config' ] );
    $backendLayout->setIconPath( $this->getIconPath( $data[ 'icon' ] ) );
    $backendLayout->setData( $data );
    return $backendLayout;
  }

  /**
   * Gets and sanitizes the icon path.
   *
   * @param string $icon Name of the icon file
   * @return string
   */
  protected function getIconPath( $icon )
  {
    $iconPath = '';
    if ( !empty( $icon ) )
    {
      $iconPath = $icon;
    }
    return $iconPath;
  }

}

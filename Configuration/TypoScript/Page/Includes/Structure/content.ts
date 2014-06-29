t3foundation =
t3foundation {
  // content, footer, header
  structure =
  structure {
    // bottom (3), left (1), main (0), right (2), top (4)
    content =
    content {
      // CONTENT, stdWrap
      bottom = COA
      bottom {
        // table, select, stdWrap
        10 < styles.content.get
        10 {
          select {
            where = colPos=3
          }
          stdWrap {
            ifEmpty {
              cObject = CONTENT
              cObject {
                table = tt_content
                select {
                  pidInList = {$t3foundation.pages.root}
                  orderBy   = sorting
                  where     = colPos=3
                }
              }
            }
          }
        }
        stdWrap {
          wrap = <!--TYPO3SEARCH_begin--> | <!--TYPO3SEARCH_end-->
        }
      }
      // CONTENT, stdWrap
      left < t3foundation.structure.content.bottom
      left {
        10 {
          select {
            where = colPos=1
          }
          stdWrap {
            ifEmpty {
              cObject {
                select {
                  where = colPos=1
                }
              }
            }
          }
        }
      }
      // CONTENT, stdWrap
      main < t3foundation.structure.content.bottom
      main {
        10 {
          select {
            where = colPos=0
          }
          stdWrap {
            ifEmpty {
              cObject {
                select {
                  where = colPos=0
                }
              }
            }
          }
        }
      }
      // CONTENT, stdWrap
      right < t3foundation.structure.content.bottom
      right {
        10 {
          select {
            where = colPos=2
          }
          stdWrap {
            ifEmpty {
              cObject {
                select {
                  where = colPos=2
                }
              }
            }
          }
        }
      }
      // CONTENT, stdWrap
      top < t3foundation.structure.content.bottom
      top {
        10 {
          select {
            where = colPos=4
          }
          stdWrap {
            ifEmpty {
              cObject {
                select {
                  where = colPos=4
                }
              }
            }
          }
        }
      }
    }
  }
}
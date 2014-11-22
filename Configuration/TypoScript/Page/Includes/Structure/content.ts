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
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--contentbottom--><!--TYPO3SEARCH_begin--><section class="content contentbottom"><div class="row"><div class="small-12 columns"> |</div></div></section><!--TYPO3SEARCH_end--><!--/contentbottom-->
          }
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
            required  = 1
            wrap      = <!--contentleft--><!--TYPO3SEARCH_begin--><section class="content contentleft"><div class="row"><div class="small-12 columns"> |</div></div></section><!--TYPO3SEARCH_end--><!--/contentleft-->
            required  >
            wrap      >
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
          slide >
          stdWrap {
            required  >
            wrap      >
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
            required  = 1
            wrap      = <!--contentright--><!--TYPO3SEARCH_begin--><section class="content contentright"><div class="row"><div class="small-12 columns"> |</div></div></section><!--TYPO3SEARCH_end--><!--/contentright-->
            required  >
            wrap      >
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
            required  = 1
            wrap      = <!--contenttop--><!--TYPO3SEARCH_begin--><section class="content contenttop"><div class="row"><div class="small-12 columns"> |</div></div></section><!--TYPO3SEARCH_end--><!--/contenttop-->
          }
        }
      }
    }
  }
}
t3foundation =
t3foundation {
  structure {
    // bottom (12), main (11), top (10)
    header =
    header {
      // CONTENT, stdWrap
      bottom = COA
      bottom {
        // table, select, stdWrap
        10 < styles.content.get
        10 {
          select {
            where = colPos=12
          }
          stdWrap {
            required  = 1
            wrap      = <!--headerbottom--><section class="header headerbottom"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headerbottom-->
          }
        }
      }
      // CONTENT, stdWrap
      main < t3foundation.content.bottom
      main {
        10 {
          select {
            where = colPos=11
          }
          stdWrap {
            wrap      = <!--headermain--><section class="header headermain"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headermain-->
          }
        }
      }
      // CONTENT, stdWrap
      top < t3foundation.content.bottom
      top {
        10 {
          select {
            where = colPos=10
          }
          stdWrap {
            wrap      = <!--headertop--><section class="header headertop"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headertop-->
          }
        }
      }
    }
  }
}
t3foundation =
t3foundation {
  structure {
    // bottom (12), left (13), main (11), right (14), top (10)
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
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--headerbottom--><section class="header headerbottom"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headerbottom-->
          }
        }
      }
      // CONTENT, stdWrap
      left < t3foundation.structure.header.bottom
      left {
        10 {
          select {
            where = colPos=13
          }
          stdWrap {
            wrap      = <!--headerleft--><section class="header headerleft"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headerleft-->
          }
        }
      }
      // CONTENT, stdWrap
      main < t3foundation.structure.header.bottom
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
      right < t3foundation.structure.header.bottom
      right {
        10 {
          select {
            where = colPos=14
          }
          stdWrap {
            wrap      = <!--headerright--><section class="header headerright"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headerright-->
          }
        }
      }
      // CONTENT, stdWrap
      top < t3foundation.structure.header.bottom
      top {
        10 {
          select {
            where = colPos=10
          }
          stdWrap {
            ifEmpty {
              cObject {
                select {
                  where = colPos=10
                }
              }
            }
            wrap      = <!--headertop--><section class="header headertop"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/headertop-->
          }
        }
      }
    }
  }
}
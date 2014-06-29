t3foundation =
t3foundation {
  structure {
    // bottom (22), main (21), top (20)
    footer =
    footer {
      // CONTENT, stdWrap
      bottom = COA
      bottom {
        // table, select, stdWrap
        10 < styles.content.get
        10 {
          select {
            where = colPos=22
          }
          stdWrap {
            required  = 1
            wrap      = <!--footerbottom--><section class="footer footerbottom footerbottom"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/footerbottom-->
          }
        }
      }
      main < t3foundation.structure.content.bottom
      main {
        10 {
          select {
            where = colPos=21
          }
          stdWrap {
            wrap      = <!--footermain--><section class="footer footermain"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/footermain-->
          }
        }
      }
      // CONTENT, stdWrap
      top < t3foundation.structure.content.bottom
      top {
        10 {
          select {
            where = colPos=20
          }
          stdWrap {
            wrap      = <!--footertop--><section class="footer footertop"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/footertop-->
          }
        }
      }
    }
  }
}
t3foundation =
t3foundation {
  structure {
    // bottom (22), left (23), main (21), right (24), top (20)
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
          slide = -1
          stdWrap {
            required  = 1
            wrap      = <!--footerbottom--><section class="footer footerbottom"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/footerbottom-->
          }
        }
      }
      left < t3foundation.structure.content.bottom
      left {
        10 {
          select {
            where = colPos=23
          }
          stdWrap {
            wrap      = <!--footerleft--><section class="footer footerleft"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/footerleft-->
            required  >
            wrap      >
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
            required  >
            wrap      >
          }
        }
      }
      right < t3foundation.structure.content.bottom
      right {
        10 {
          select {
            where = colPos=24
          }
          stdWrap {
            wrap      = <!--footerright--><section class="footer footerright"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/footerright-->
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
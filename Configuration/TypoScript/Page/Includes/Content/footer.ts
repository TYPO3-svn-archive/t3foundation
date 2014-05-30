t3foundation =
t3foundation {
  // bottom01 (22), bottom02 (23), main (21), top (20)
  footer =
  footer {
    // CONTENT, stdWrap
    bottom01 = COA
    bottom01 {
      // table, select, stdWrap
      10 < styles.content.get
      10 {
        select {
          where = colPos=22
        }
        stdWrap {
          required  = 1
          wrap      = <!--footerbottom01--><section class="footer footerbottom footerbottom01"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/footerbottom01-->
        }
      }
    }
    // CONTENT, stdWrap
    bottom02 < t3foundation.content.bottom01
    bottom02 {
      10 {
        select {
          where = colPos=23
        }
        stdWrap {
          wrap      = <!--footerbottom02--><section class="footer footerbottom footerbottom02"><div class="row"><div class="small-12 columns"> |</div></div></section><!--/footerbottom02-->
        }
      }
    }
    // CONTENT, stdWrap
    main < t3foundation.content.bottom01
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
    top < t3foundation.content.bottom01
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
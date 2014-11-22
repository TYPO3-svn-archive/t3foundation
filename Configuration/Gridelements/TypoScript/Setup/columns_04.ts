lib.gridelements {
  4 < .defaultGridSetup
  4 {
    wrap = <div class="row">|</div>
    columns {
      default {
        wrap {
          field = flexform_columns
          listNum = 1
          listNum.splitChar = /
          noTrimWrap = |<div class="small-| columns">|
          }
        wrap2 = |</div>
      }
      1 < .default
      1.wrap.listNum = 0
      2 < .default
      2.wrap.listNum = 2
      3 < .default
      3.wrap.listNum = 3
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.4 < lib.gridelements.4
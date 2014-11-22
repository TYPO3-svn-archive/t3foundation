lib.gridelements {
  3 < .defaultGridSetup
  3 {
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
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.3 < lib.gridelements.3
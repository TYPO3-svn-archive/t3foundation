lib.gridelements {
  2 < .defaultGridSetup
  2 {
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
    }
  }
}

tt_content.gridelements_pi1.20.10.setup.2 < lib.gridelements.2
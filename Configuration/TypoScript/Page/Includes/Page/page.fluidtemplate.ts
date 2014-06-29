page {
    // layoutRootPath, partialRootPath, file
  10 = FLUIDTEMPLATE
  10 {
    layoutRootPath  = {$t3foundation.fluid.path.layouts}
    partialRootPath = {$t3foundation.fluid.path.partials}
    file {
      // key, default, 1, 2, 3, 4, 11, 12, 13, 14, 21, 22, 23, 24
      cObject = CASE
      cObject {
        key {
          field = backend_layout
          ifEmpty {
            data = levelfield:-2, backend_layout_next_level, slide
          }
        }
        default = TEXT
        default {
          value = {$t3foundation.fluid.path.templates}contentMain.html
        }
          // bronze 1: MAIN
        1 = TEXT
        1 {
          value = {$t3foundation.fluid.path.templates}bronze_1.html
        }
          // bronze 2: MAIN + right
        2 = TEXT
        2 {
          value = {$t3foundation.fluid.path.templates}bronze_2.html
        }
          // bronze 3: left + MAIN
        3 = TEXT
        3 {
          value = {$t3foundation.fluid.path.templates}bronze_3.html
        }
          // bronze 4: left + MAIN + right
        4 = TEXT
        4 {
          value = {$t3foundation.fluid.path.templates}bronze_4.html
        }
          // silver 1: MAIN
        11 = TEXT
        11 {
          value = {$t3foundation.fluid.path.templates}silver_1.html
        }
          // silver 2: MAIN + right
        12 = TEXT
        12 {
          value = {$t3foundation.fluid.path.templates}silver_2.html
        }
          // silver 3: left + MAIN
        13 = TEXT
        13 {
          value = {$t3foundation.fluid.path.templates}silver_3.html
        }
          // silver 4: left + MAIN + right
        14 = TEXT
        14 {
          value = {$t3foundation.fluid.path.templates}silver_4.html
        }
          // gold 1: MAIN
        21 = TEXT
        21 {
          value = {$t3foundation.fluid.path.templates}gold_1.html
        }
          // gold 2: MAIN + right
        22 = TEXT
        22 {
          value = {$t3foundation.fluid.path.templates}gold_2.html
        }
          // gold 3: left + MAIN
        23 = TEXT
        23 {
          value = {$t3foundation.fluid.path.templates}gold_3.html
        }
          // gold 4: left + MAIN + right
        24 = TEXT
        24 {
          value = {$t3foundation.fluid.path.templates}gold_4.html
        }
      }
    }
  }
}
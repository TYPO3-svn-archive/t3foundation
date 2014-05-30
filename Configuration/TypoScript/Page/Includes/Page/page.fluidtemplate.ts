page {
    // layoutRootPath, partialRootPath, file
  10 = FLUIDTEMPLATE
  10 {
    layoutRootPath  = {$t3foundation.fluid.path.layouts}
    partialRootPath = {$t3foundation.fluid.path.partials}
    file {
      // key, default, 1, 2, 3
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
        1 = TEXT
        1 {
          value = {$t3foundation.fluid.path.templates}contentMain.html
        }
        2 = TEXT
        2 {
          value = {$t3foundation.fluid.path.templates}contentMainRight.html
        }
        3 = TEXT
        3 {
          value = {$t3foundation.fluid.path.templates}contentLeftMainRight.html
        }
      }
    }
  }
}
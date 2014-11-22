page {
    // layoutRootPath, partialRootPath, file
  xx10 = FLUIDTEMPLATE
  xx10 {
      file.stdWrap.cObject = TEXT
      file.stdWrap.cObject {
          data = levelfield:-2,backend_layout_next_level,slide
          override.field = backend_layout
          split {
              token = file__
              1.current = 1
              1.wrap = |
          }
          wrap = EXT:modernpackage/Resources/Private/Templates/|.html
      }
      layoutRootPath = EXT:modernpackage/Resources/Private/Templates/Layouts/
      variables {

      }
  }
  xx20 = TEXT
  xx20 {
    data = levelfield:-2,backend_layout_next_level,slide
    override.field = backend_layout
    split {
        token = t3foundation__
        1.current = 1
        1.wrap = |
    }
    wrap = EXT:t3foundation/Resources/Private/Templates/|.html
  }
  63148 = FLUIDTEMPLATE
  63148 {
    file {
      stdWrap {
        cObject = TEXT
        cObject {
          data = levelfield:-2,backend_layout_next_level,slide
          override {
            field = backend_layout
          }
          split {
            token = t3foundation__
            1 {
              current = 1
              wrap = |
            }
          }
          wrap = {$t3foundation.fluid.path.templates}|.html
        }
      }
    }
    layoutRootPath  = {$t3foundation.fluid.path.layouts}
    partialRootPath = {$t3foundation.fluid.path.partials}
    variables {

    }
  }
}
menu.all = HMENU
menu.all {
	1 = TMENU
	1 {
		wrap = <ul class="side-nav">|</ul>
		expAll = 1

		# Define the normal state (not active, not selected) of menu items
		# Using NO=1 to activate normal state is not necessary, but useful when copying
		NO = 1
		NO {
			# Use the page title field the title property on the A-tag, but only if the navigation title is set
			ATagTitle {
				field = title
				fieldRequired = nav_title
			}

			# Use the option-split feature to generate a different wrap for the last item on a level of the menu
			# The last item on each level gets class="last" added for CSS styling purposes.
			#
			# See the TSref documentation for details about option split and other features:
			# http://typo3.org/documentation/document-library/references/doc_core_tsref/current/
			wrapItemAndSub = <li>|</li>
			#ATagBeforeWrap = 1
			#ATagParams.wrap = class="xx |"

			# HTML-encode special characters according to the PHP-function htmlSpecialChars
			stdWrap.htmlSpecialChars = 1
		}
		IFSUB < .NO
		IFSUB {
			wrapItemAndSub = <li class="hassub">|</li>
		}
		# Copy properties of normal to active state, and then add a CSS class for styling
		ACT < .NO
		ACT {
			wrapItemAndSub = <li class="active">|</li>
		}
		ACTIFSUB < .NO
		ACTIFSUB {
			wrapItemAndSub = <li class="has-dropdown active">|</li>
		}
		# Copy properties of normal to current state, and then add a CSS class for styling
		CUR < .NO
		CUR {
			wrapItemAndSub = <li class="cur active">|</li>
		}

		# Copy properties of normal to current state, and then add a CSS class for styling
		CURIFSUB < .NO
		CURIFSUB {
			wrapItemAndSub = <li class="has-dropdown cur">|</li>
		}
	}
}

menu.all-inline < menu.all
menu.all-inline.1.wrap = <ul class="inline-list">|</ul>

#######################################################
# menu.sub-nav
#######################################################

menu.sub-nav = HMENU
menu.sub-nav {
	stdWrap.wrap = {$subnav.sub-nav.wrap}
  excludeUidList = {$subnav.sub-nav.excludeUidList}
  entryLevel = {$subnav.sub-nav.entryLevel}
  1 = TMENU
  1 {
    expAll = 1
    collapse = 0
    noBlur = 1
    wrap = <dl class="sub-nav">|</dl>

    NO = 1
    NO {
      ATagTitle.field = abstract // description // subtitle
      allWrap = |
      ATagBeforeWrap = 1
      insertData = 1
      wrapItemAndSub = <dd>|</dd>

    }
    ACT < .NO
    ACT = 1
    ACT.wrapItemAndSub = <dd class="active">|</dd>
    CUR < .NO
    CUR = 1
    CUR.wrapItemAndSub = <dd class="current">|</dd>
  }
}

#######################################################
# menu.side-nav
#######################################################
menu.side-nav = COA
menu.side-nav {
	stdWrap.wrap = {$sidenav.side-nav.wrap}
  10 = TEXT
  10.data = leveltitle:{$sidenav.side-nav.levelTitle}
  10.typolink.parameter.data=leveluid:{$sidenav.side-nav.levelTitleLink}
  10.wrap = {$sidenav.side-nav.leveltitleWrap}

  20 = HMENU
  20 {
    excludeUidList = {$sidenav.side-nav.excludeUidList}
    entryLevel = {$sidenav.side-nav.entryLevel}
    1 = TMENU
    1 {
      expAll = {$sidenav.side-nav.expandAll}
      collapse = {$sidenav.side-nav.collapse}
      noBlur = 1
      wrap = <ul class="side-nav level1">|</ul>

      NO = 1
      NO {
        ATagTitle.field = abstract // description // subtitle
        allWrap = |
        ATagBeforeWrap = 1
        wrapItemAndSub = <li>|</li>
      }
      ACT < .NO
      ACT = 1
      ACT.wrapItemAndSub = <li class="active">|</li>
      CUR < .NO
      CUR = 1
      CUR.wrapItemAndSub = <li class="current">|</li>
    }
    2 < .1
    2.wrap = <ul class="side-nav level2">|<li class="divider"></li></ul>
    3 < .2
    3.wrap = <ul class="side-nav level3">|<li class="divider"></li></ul>
  }
}


#######################################################
# menu.dropdown-nav
#######################################################
menu.dropdown-nav = HMENU
menu.dropdown-nav {
  special = list
  special.value = {$dropdown.dropdown-nav.uidlist}
  1 = TMENU
  1 {
    noBlur = 1
    stdWrap.dataWrap (
    <a href="#" data-dropdown="drop{field:uid}" data-options="is_hover:{$dropdown.dropdown-nav.is_hover};" class="{$dropdown.dropdown-nav.linktype} {$dropdown.dropdown-nav.linksize}">{$dropdown.dropdown-nav.title}</a>
    <ul id="drop{field:uid}" class="f-dropdown {$dropdown.dropdown-nav.boxsize}" data-dropdown-content">|</ul>
    )
    NO = 1
    NO {
      ATagTitle.field =
      wrapItemAndSub = <li>|</li>
    }
    ACT < .NO
    ACT = 1
    ACT.wrapItemAndSub = <li class="active">|</li>
  }
}

/*
main menu template - for foundation framework
*/

menu.base = HMENU
menu.base {
	stdWrap.wrap = <div class="{$topbar.top-bar.position}">|</div>
  	wrap = <nav class="top-bar" data-options="mobile_show_parent_link:{$topbar.top-bar.mobileShowParentLink};is_hover:{$topbar.top-bar.is_hover};back_text:{$topbar.top-bar.back_text}">|</nav>
  	
	1 = TMENU
	1 {
		expAll = 1
		collapse = 0
		noBlur = 1
		wrap (
		
		<ul class="title-area">
		  <li class="name"><!-- Leave this empty --></li>
		  <li class="toggle-topbar menu-icon"><a href="#"><span>{$topbar.top-bar.smallTitle}</span></a></li>
		</ul>
		<section class="top-bar-section"><ul>|</ul></section>
		)

		# Define the normal state (not active, not selected) of menu items
		# Using NO=1 to activate normal state is not necessary, but useful when copying
		NO = 1
		NO {
			# Use the page title field the title property on the A-tag, but only if the navigation title is set
			#ATagTitle {
			#	field = title
			#	fieldRequired = nav_title
			#}
			
			ATagTitle.field = abstract // subtitle // title
      		wrapItemAndSub = <li>|</li> <li class="divider"></li>
			
			# wrapItemAndSub = <li>|</li>
			ATagParams.wrap = class="first firstlevel |" |*| class="all firstlevel |" |*| class="last firstlevel |"
			#ATagParams.wrap = class="firstlevel |" 

			# HTML-encode special characters according to the PHP-function htmlSpecialChars
			stdWrap.htmlSpecialChars = 1
		}
		IFSUB = 1
		IFSUB < .NO
		IFSUB.wrapItemAndSub = <li class="has-dropdown">|</li> <li class="divider"></li>
	
		ACT < .NO
		ACT = 1
		ACT.wrapItemAndSub = <li class="active">|</li> <li class="divider"></li>
	
		ACTIFSUB < .NO    
		ACTIFSUB = 1
		ACTIFSUB.wrapItemAndSub = <li class="active has-dropdown">|</li> <li class="divider"></li>
		
		CUR < .NO
		CUR = 1
		CUR.wrapItemAndSub = <li class="current">|</li> <li class="divider"></li>
	
		CURIFSUB < .NO    
		CURIFSUB = 1
		CURIFSUB.wrapItemAndSub = <li class="current has-dropdown">|</li> <li class="divider"></li>
		}
}

######################################################
#+++++++++++++++++++++++++++++++++++++++++++++++++++++
# BACKUP
#+++++++++++++++++++++++++++++++++++++++++++++++++++++
######################################################
/*
menu.base = HMENU
menu.base {
	1 = TMENU
	1 {
		wrap = <ul>|</ul>
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

			wrapItemAndSub = <li>|</li>
			#ATagParams.wrap = class="first |" |*| class="all |" |*| class="last |"
			ATagParams.wrap = class="firstlevel |" 

			# HTML-encode special characters according to the PHP-function htmlSpecialChars
			stdWrap.htmlSpecialChars = 1
		}
		IFSUB < .NO
		IFSUB {
			wrapItemAndSub = <li class="has-dropdown">|</li>
			ATagParams.wrap = class="firstlevel |"
		}
		# Copy properties of normal to active state, and then add a CSS class for styling
		ACT < .NO
		ACT {
			wrapItemAndSub = <li class="act has-dropdown">|</li>
			ATagParams.wrap = class="firstlevel |"
		}
		ACTIFSUB < .NO
		ACTIFSUB {
			wrapItemAndSub = <li class="has-dropdown act">|</li>
			ATagParams.wrap = class="firstlevel |"
		}
		# Copy properties of normal to current state, and then add a CSS class for styling
		CUR < .NO
		CUR {
			wrapItemAndSub = <li class="cur">|</li>
			ATagParams.wrap = class="firstlevel |"
		}

		# Copy properties of normal to current state, and then add a CSS class for styling
		CURIFSUB < .NO
		CURIFSUB {
			wrapItemAndSub = <li class="has-dropdown cur">|</li>
			ATagParams.wrap = class="firstlevel |"
		}
	}
}
*/
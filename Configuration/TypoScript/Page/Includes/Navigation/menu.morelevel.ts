/*
more level menu template - for foundation framework
*/

menu.morelevel < menu.base
menu.morelevel {
	# Since this is the top-level menu, we start this menu at the root level of the website
	#entryLevel = 0
	#1.wrap = <ul id="nav_main">|</ul>
	2 < .1
	2.wrap = <ul class="dropdown">|</ul>
	2.NO.ATagParams.wrap = class="secondlevel |"
	2.ACT.ATagParams.wrap = class="secondlevel |"
	2.IFSUB.ATagParams.wrap = class="secondlevel |"
	2.ACTIFSUB.ATagParams.wrap = class="secondlevel |"
	2.CUR.ATagParams.wrap = class="secondlevel |"
	2.CURIFSUB.ATagParams.wrap = class="secondlevel |"
	3 < .2
	3.NO.ATagParams.wrap = class="thirdlevel |"
	3.ACT.ATagParams.wrap = class="thirdlevel |"
	3.IFSUB.ATagParams.wrap = class="thirdlevel |"
	3.ACTIFSUB.ATagParams.wrap = class="thirdlevel |"
	3.CUR.ATagParams.wrap = class="thirdlevel |"
	3.CURIFSUB.ATagParams.wrap = class="thirdlevel |"
	4 < .3
	4.NO.ATagParams.wrap = class="fourthlevel |"
	4.ACT.ATagParams.wrap = class="fourthlevel |"
	4.IFSUB.ATagParams.wrap = class="fourthlevel |"
	4.ACTIFSUB.ATagParams.wrap = class="fourthlevel |"
	4.CUR.ATagParams.wrap = class="fourthlevel |"
	4.CURIFSUB.ATagParams.wrap = class="fourthlevel |"
}

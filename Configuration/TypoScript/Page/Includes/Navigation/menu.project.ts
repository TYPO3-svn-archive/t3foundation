/*
zoo menu template - for foundation framework
*/

# Copy basic menu object from TS template 'menu' so we don't have to repeat all that
menu.project < menu.morelevel 
menu.project {
	# Also show pages which have not-in-menu flag set in page properties
	includeNotInMenu = 0

	# Create a menu out of the pages specifically listed under special.value
	#special = directory
	#special.value = {$rootpaths.rootpage}
	#excludeUidList = 7 
	#entryLevel = 0
	excludeUidList = {$topbar.top-bar.excludeUidList}
  	entryLevel = {$topbar.top-bar.entryLevel}
}
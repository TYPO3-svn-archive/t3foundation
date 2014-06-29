<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/Gridelements/TypoScript/grids.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/TypoScript/Page/Includes/Navigation/menu.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/TypoScript/Page/Includes/Structure/content.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/TypoScript/Page/Includes/Structure/footer.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/TypoScript/Page/Includes/Structure/header.ts">

page = PAGE
page {
	bodyTagCObject = TEXT
	bodyTagCObject {
		insertData = 1
		value = <body id="bodyId-{TSFE:id}">
	}
	meta {
    viewport = width=device-width, initial-scale=1.0
  }
	shortcutIcon = {$filepaths.images}favicon.ico
	typeNum = 0
}

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/TypoScript/Page/Includes/Page/page.fluidtemplate.ts">

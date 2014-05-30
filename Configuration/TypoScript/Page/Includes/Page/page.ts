<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/TypoScript/Page/Includes/Content/content.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/TypoScript/Page/Includes/Content/footer.ts">
<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3foundation/Configuration/TypoScript/Page/Includes/Content/header.ts">

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
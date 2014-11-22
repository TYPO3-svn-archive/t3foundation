
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Section Configuration - id=10
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


lib.gridelements {
	10 < .defaultGridSetup
	10 {
		dataWrap = <{field:flexform_sectiontype} {field:flexform_dataoptions}>
		wrap2 = |</div>
		columns {
		  default {
			renderObj.20 >
			renderObj.20 = CASE
			renderObj.20 {
				key.dataWrap = {field:CType}_{field:parentgrid_flexform_section}
				text_0 =< tt_content.text
				text_1 = COA
				text_1.wrap = <section> | </section>
				text_1.10 = TEXT
				text_1.10.dataWrap = <p class="title" data-section-title><a href="#panel{COBJ:parentRecordNumber}">{field:header}</a></p>
				text_1.20 = COA
				text_1.20.wrap = <div class="content" data-section-content>|</div>
				text_1.20.20 =< tt_content.text.20
				textpic_0 =< tt_content.textpic
				textpic_1 < .text_1
				textpic_1.20.20 < tt_content.textpic.20
				textpic_1.20.20.text.10 >
				}
			}
		}
	}
}
tt_content.gridelements_pi1.20.10.setup.10 < lib.gridelements.10


#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# Orbit Slider Configuration - id=2
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

tt_content.gridelements_pi1.20.10.setup {
    # Slider
    2 < lib.gridelements.defaultGridSetup
    2 {
        # FLUIDTEMPLATE konfigurieren
        cObject = FLUIDTEMPLATE
        cObject {
            file = {$filepaths.ts_templates}gridelements/orbit/orbit.html
        }
    }
}

#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
# easytabs Configuration - id=11
#+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


tt_content.gridelements_pi1.20.10.setup {
    # Easytabs
    11 < lib.gridelements.defaultGridSetup
    11 {
        # FLUIDTEMPLATE konfigurieren
        cObject = FLUIDTEMPLATE
        cObject {
            file = {$filepaths.ts_templates}gridelements/easytabs/easytabs.html
        }
    }
}

tt_content.gridelements_pi1.20.10.setup.11 < lib.gridEasyTabs
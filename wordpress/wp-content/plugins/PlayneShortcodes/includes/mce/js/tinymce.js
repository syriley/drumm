(function() {	
	tinymce.create('tinymce.plugins.ShortcodeMce', {
		init : function(ed, url){
			tinymce.plugins.ShortcodeMce.theurl = url;
		},
		createControl : function(btn, e) {
			if ( btn == "shortcodes_button" ) {
				var a = this;	
				var btn = e.createSplitButton('button', {
	                title: "Insert Shortcode",
					image: tinymce.plugins.ShortcodeMce.theurl +"/images/shortcodes.png",
					icons: false,
	            });
	            btn.onRenderMenu.add(function (c, b) {
	            	
					a.render( b, "Message box", "message_box" );
					a.render( b, "Buttons", "button" );
					a.render( b, "Clear Columns", "clear" );
					a.render( b, "Columns", "column" );
					a.render( b, "Highlights", "highlight" );

					a.render( b, "Icons", "icon" );

					a.render( b, "Divider", "divider" );
					
					a.render( b, "Dropcap", "dropcap" );
					
					a.render( b, "Intro", "intro" );
					
					a.render( b, "Blockquote", "blockquote" );
					
					a.render( b, "Code", "code" );
					
					a.render( b, "Social icons", "social" );
					
					a.render( b, "Tabs", "tabs" );
					
					a.render( b, "Toggles", "toggle" );
					
					a.render( b, "Skillbar", "skillbar" );
				});
	            
	          return btn;
			}
			return null;               
		},
		render : function(ed, title, id) {
			ed.add({
				title: title,
				onclick: function () {
					
					// Message Box
					if(id == "message_box") {
						tinyMCE.activeEditor.selection.setContent('[message_box color="gray"]Box Content[/message_box]');
					}
					
					// Buttons
					if(id == "button") {
						tinyMCE.activeEditor.selection.setContent('[button color="normal" size="regular" url="Put your URL here" title=""]Button Text[/button]');
					}

					// Dropcap
					if(id == "dropcap") {
						tinyMCE.activeEditor.selection.setContent('[dropcap]Dropcap letter[/dropcap]');
					}

					// Blockquote
					if(id == "blockquote") {
						tinyMCE.activeEditor.selection.setContent('[blockquote]Your quote[/blockquote]');
					}

					// Code
					if(id == "code") {
						tinyMCE.activeEditor.selection.setContent('[code]Your code[/code]');
					}
					
					// Clear Floats
					if(id == "clear") {
						tinyMCE.activeEditor.selection.setContent('[clear_floats]');
					}
					
					// Clear Floats
					if(id == "icon") {
						tinyMCE.activeEditor.selection.setContent('[icon type="rocket" size="14px" color=""]');
					}
					
					// Columns
					if(id == "column") {
						tinyMCE.activeEditor.selection.setContent('[column size="one-half" position="first"]Column content[/column]');
					}

					// Intro
					if(id == "intro") {
						tinyMCE.activeEditor.selection.setContent('[intro]Intro text[/intro]');
					}
					
					// Highlights
					if(id == "highlight") {
						tinyMCE.activeEditor.selection.setContent('[highlight color="yellow"]highlighted text[/highlight]');
					}

				     // Divider
					if(id == "divider") {
						tinyMCE.activeEditor.selection.setContent('[divider][/divider]');
					}

					//Social
					if(id == "social") {
						tinyMCE.activeEditor.selection.setContent('[social icon="twitter" url="http://www.yoursocial.com" target="self" rel=""]');
					}

					//Tabs
					if(id == "tabs") {
						tinyMCE.activeEditor.selection.setContent('[tabgroup]<br />[tab title="First Tab"]<br />First tab content<br />[/tab]<br />[tab title="Second Tab"]<br />Second Tab Content.<br />[/tab]<br />[/tabgroup]');
					}

					//Toggle
					if(id == "toggle") {
						tinyMCE.activeEditor.selection.setContent('[toggle title="This Is Your Toggle Title"]Your Toggle Content[/toggle]');
					}

					//Skillbar
					if(id == "skillbar") {
						tinyMCE.activeEditor.selection.setContent('[skillbar title="Your skill" percentage="100" color="#6adcfa"]');
					}
					
					
					
					return false;
				}
			})
		}
	
	});
	tinymce.PluginManager.add("shortcodes", tinymce.plugins.ShortcodeMce);
})();  
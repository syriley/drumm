<?php

if( !function_exists ('shortcodes_scripts') ) :
	function shortcodes_scripts() {
		wp_enqueue_style('shortcode_styles', plugin_dir_url( __FILE__ ) . 'css/elements.css');

		wp_register_script('tabs',  plugin_dir_url( __FILE__ ) . 'mce/js/tabs.js', array('jquery'), '1.0', true);
		wp_register_script('toggle',  plugin_dir_url( __FILE__ ) . 'mce/js/toggle.js', array('jquery'), '1.0', true);
		wp_register_script('skillbar',  plugin_dir_url( __FILE__ ) . 'mce/js/skillbar.js', array('jquery'), '1.0', true);
		
	}
	add_action('wp_enqueue_scripts', 'shortcodes_scripts');
endif;
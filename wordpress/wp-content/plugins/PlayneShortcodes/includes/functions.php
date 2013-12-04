<?php

//These are all the different shortcodes provided with this plugin. They can be altered in the css/elements.css stylesheet file located within this file structure.



//Clear floats 


if( !function_exists('clear_floats_shortcode') ) {

	function clear_floats_shortcode() {

	   return '<div class="clear-floats"></div>';

	}

	add_shortcode( 'clear_floats', 'clear_floats_shortcode' );

}







//Spacing between elements


if( !function_exists('spacing_shortcode') ) {

	function spacing_shortcode( $atts ) {

		extract( shortcode_atts( array(

			'size' => '20px',

		  ),

		  $atts ) );

	 return '<hr class="spacing" style="height: '. $size .'"></hr>';

	}

	add_shortcode( 'spacing', 'spacing_shortcode' );

}





//Shortcode p wrap fix


if( !function_exists('fix_shortcodes') ) {

	function fix_shortcodes($content){   

		$array = array (

			'<p>[' => '[', 

			']</p>' => ']', 

			']<br />' => ']'

		);

		$content = strtr($content, $array);

		return $content;

	}

	add_filter('the_content', 'fix_shortcodes');

}

//Toggles

if( !function_exists('toggle_shortcode') ) {

	function toggle_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

			'title' => 'Toggle Title',

			'class' => '',

		), $atts ) );

		 

		// Enque scripts

		wp_enqueue_script('toggle');

		

		// Display the Toggle

		return '<div class="toggle '. $class .'"><h3 class="toggle-trigger">'. $title .'</h3><div class="toggle-container">' . do_shortcode($content) . '</div></div>';

	}

	add_shortcode('toggle', 'toggle_shortcode');

}





//Skillbars

if( !function_exists('skillbar_shortcode') ) {

	function skillbar_shortcode( $atts  ) {		

		extract( shortcode_atts( array(

			'title' => '',

			'percentage' => '100',

			'color' => '#6adcfa',

			'class' => '',

			'show_percent' => 'true'

		), $atts ) );

		

		// Enque scripts

		wp_enqueue_script('skillbar');

		

		// Display the accordion	';

		$output = '<div class="skillbar clearfix '. $class .'" data-percent="'. $percentage .'%">';

			if ( $title !== '' ) $output .= '<div class="skillbar-title" style="background: '. $color .';"><span>'. $title .'</span></div>';

			$output .= '<div class="skillbar-bar" style="background: '. $color .';"></div>';

			if ( $show_percent == 'true' ) {

				$output .= '<div class="skill-bar-percent">'.$percentage.'%</div>';

			}

		$output .= '</div>';

		

		return $output;

	}

	add_shortcode( 'skillbar', 'skillbar_shortcode' );

}


//Highlights


if ( !function_exists( 'highlight_shortcode' ) ) {

	function highlight_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

			'color' => 'yellow',

		  ),

		  $atts ) );

		  return '<span class="highlight-'. $color .'">' . do_shortcode( $content ) . '</span>';

	

	}

	add_shortcode('highlight', 'highlight_shortcode');

}

//Divider


if ( !function_exists( 'divider_shortcode' ) ) {

	function divider_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

		  ),

		  $atts ) );

		  return '<div class="divider"></div>';

	

	}

	add_shortcode('divider', 'divider_shortcode');

}


//Blockquotes


if ( !function_exists( 'blockquote_shortcode' ) ) {

	function blockquote_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

		  ),

		  $atts ) );

		  return '<blockquote><p>' . do_shortcode( $content ) . '</p></blockquote>';

	

	}

	add_shortcode('blockquote', 'blockquote_shortcode');

}

//Code box


if ( !function_exists( 'code_shortcode' ) ) {

	function code_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

		  ),

		  $atts ) );

		  return '<code>' . do_shortcode( $content ) . '</code>';

	

	}

	add_shortcode('code', 'code_shortcode');

}




//Intro text


if ( !function_exists( 'intro_shortcode' ) ) {

	function intro_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

		  ),

		  $atts ) );

		  return '<div class="intro">' . do_shortcode( $content ) . '</div>';

	

	}

	add_shortcode('intro', 'intro_shortcode');

}

//Social icons

if( !function_exists('social_shortcode') ) {

	function social_shortcode( $atts ){   

		extract( shortcode_atts( array(

			'icon' => 'twitter',

			'url' => 'http://www.yoursocial.com',

			'target' => 'self',

			'rel' => '',

			'class' => '',

		), $atts ) );

		

		return '<a href="' . $url . '" class="social-icon '. $class .'" target="_'.$target.'" rel="'. $rel .'"

><img src="'. plugin_dir_url( __FILE__ ) .'images/social/'. $icon .'.png" alt="'. $icon .'" /></a>';

	}

	add_shortcode('social', 'social_shortcode');

}

//Dropcaps


if ( !function_exists( 'dropcap_shortcode' ) ) {

	function dropcap_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

		  ),

		  $atts ) );

		  return '<span class="dropcap">' .do_shortcode( $content ) . '</span>';

	

	}

	add_shortcode('dropcap', 'dropcap_shortcode');

}

//Tabs


if (!function_exists('tabgroup_shortcode')) {

	function tabgroup_shortcode( $atts, $content = null ) {

		

		//Enque scripts

		wp_enqueue_script('jquery-ui-tabs');

		wp_enqueue_script('tabs');

		

		// Display Tabs

		$defaults = array();

		extract( shortcode_atts( $defaults, $atts ) );

		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );

		$tab_titles = array();

		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }

		$output = '';

		if( count($tab_titles) ){

		    $output .= '<div id="tab-'. rand(1, 100) .'" class="tabs">';

			$output .= '<ul class="ui-tabs-nav clearfix">';

			foreach( $tab_titles as $tab ){

				$output .= '<li><a href="#tab-'. sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';

			}

		    $output .= '</ul>';

		    $output .= do_shortcode( $content );

		    $output .= '</div>';

		} else {

			$output .= do_shortcode( $content );

		}

		return $output;

	}

	add_shortcode( 'tabgroup', 'tabgroup_shortcode' );

}

if (!function_exists('tab_shortcode')) {

	function tab_shortcode( $atts, $content = null ) {

		$defaults = array(

			'title' => 'Tab',

			'class' => ''

		);

		extract( shortcode_atts( $defaults, $atts ) );

		return '<div id="tab-'. sanitize_title( $title ) .'" class="tab-content '. $class .'">'. do_shortcode( $content ) .'</div>';

	}

	add_shortcode( 'tab', 'tab_shortcode' );

}





//Buttons


if( !function_exists('button_shortcode') ) {

	function button_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

			'color' => 'green',
			'size' => 'regular',

			'url' => 'put your url here',

			'title' => '',

			'target' => 'self',

			'rel' => '',

		), $atts ) );

		

		return '<a href="' . $url . '" class="button ' . $color . ' ' . $size . '" target="_'.$target.'" title="'. $title .'" rel="'.$rel.'">' . $content . '</a>';

	}

	add_shortcode('button', 'button_shortcode');

}

//Iconz


if( !function_exists('icon_shortcode') ) { 

	function icon_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

			'size' => '14px',
			
			'color' => '',
			
			'type' => 'rocket',

		  ), $atts ) );

		  return '<i class=" icon-'. $type . ' " style="font-size:'. $size . ';color:'. $color . '"></i>';

	}

	add_shortcode('icon', 'icon_shortcode');

}

//Message boxes


if( !function_exists('message_box_shortcode') ) { 

	function message_box_shortcode( $atts, $content = null ) {

		extract( shortcode_atts( array(

			'color' => 'gray',

		  ), $atts ) );

		  $alert_content = '';

		  $alert_content .= '<div class="message_box-'. $color . '">';

		  $alert_content .= ' '. do_shortcode($content) .'</div>';

		  return $alert_content;

	}

	add_shortcode('message_box', 'message_box_shortcode');

}



//Columns


if( !function_exists('column_shortcode') ) {

	function column_shortcode( $atts, $content = null ){

		extract( shortcode_atts( array(

			'size' => 'one-third',

			'position' =>'first'

		  ), $atts ) );

		  return '<div class="' . $size . ' column-'.$position.'">' . do_shortcode($content) . '</div>';

	}

	add_shortcode('column', 'column_shortcode');

}
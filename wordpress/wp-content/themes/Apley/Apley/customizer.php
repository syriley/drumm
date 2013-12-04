<?php
 
add_filter( 'customize_register', 'theme_customizer_register' );

function theme_customizer_register($wp_customize) {

	class Example_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    }
}	
	//Section Style Options

	$wp_customize->add_section( 'theme_customizer_basic', array(
		'title' => __( 'Logo image', 'section' ),
		'priority' => 100
	) );
	
	//Logo Image
	$wp_customize->add_setting( 'theme_customizer_logo', array(
		
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_logo', array(
		'label' => __( 'Logo Upload', 'section' ),
		'section' => 'theme_customizer_basic',
		'settings' => 'theme_customizer_logo'
	) ) );

	//Favicon Image
	$wp_customize->add_section( 'theme_customizer_favicon', array(
		'title' => __( 'Favicon image', 'section' ),
		'priority' => 120
	) );
	
	$wp_customize->add_setting( 'theme_customizer_favicon', array(
		
	) );
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_favicon', array(
		'label' => __( 'Favicon Upload', 'section' ),
		'section' => 'theme_customizer_favicon',
		'settings' => 'theme_customizer_favicon'
	) ) );


	$wp_customize->add_setting( 'theme_customizer_footerfacebook', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerfacebook', array(
		'label' => __( 'Facebook link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footerfacebook'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footergithub', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footergithub', array(
		'label' => __( 'Github link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footergithub'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footermail', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footermail', array(
		'label' => __( 'Mail link (mailto:youremail@provider.com)', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footermail'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertwitter', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footertwitter', array(
		'label' => __( 'Twitter link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footertwitter'
	) ) );

	$wp_customize->add_setting( 'theme_customizer_footertumblr', array(
		
	) );

	$wp_customize->add_setting( 'theme_customizer_footerlinkedin', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerlinkedin', array(
		'label' => __( 'Linkedin link', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footerlinkedin'
	) ) );

	//Header box text

	
	
	//Header Phone Image
	$wp_customize->add_section( 'theme_customizer_showcaseimage', array(
		'title' => __( 'Showcase image', 'section' ),
		'priority' => 120
	) );
	
	$wp_customize->add_setting( 'theme_customizer_showcaseimage', array(
		
	) );

	//Intro header text
	$wp_customize->add_section( 'theme_customizer_headertext', array(
		'title' => __( 'Header text & button', 'section' ),
		'priority' => 110
	) );
	

	$wp_customize->add_setting( 'theme_customizer_headertextlineone', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_headertextlineone', array(
		'label' => __( 'Intro text', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_headertextlineone',
		'priority' => 1
	) ) );
	
	class WP_Customize_Textarea_Control extends WP_Customize_Control {
    public $type = 'textarea';
 
    public function render_content() {
        ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
        <?php
    }
}
	
	$wp_customize->add_setting( 'theme_customizer_headertextlinetwo', array(	
	) );
 
	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'theme_customizer_headertextlinetwo', array(
    'label'   => 'Main text',
    'section' => 'theme_customizer_headertext',
    'settings'   => 'theme_customizer_headertextlinetwo',
    'priority' => 2
	) ) );


	$wp_customize->add_setting( 'theme_customizer_buttontext', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttontext', array(
		'label' => __( 'Button text', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_buttontext',
		'priority' => 3
	) ) );

	$wp_customize->add_setting( 'theme_customizer_linkbutton', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_linkbutton', array(
		'label' => __( 'Button link (start with http://)', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_linkbutton',
		'priority' => 4
	) ) );

	$wp_customize->add_setting( 'theme_customizer_buttonicon', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttonicon', array(
		'label' => __( 'Download Button icon', 'section' ),
		'type'    => 'radio',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_buttonicon',
		'priority' => 5,
		'choices'    => array(
        'value1' => 'Phone',
        'value2' => 'Tablet',
        'value3' => 'Computer',
	'value4' => 'Heart',
	'value5' => 'Dashboard',
	'value6' => 'Cloud',
	'value7' => 'Camera',
	'value8' => 'Star',
	'value9' => 'Beaker',
	'value10' => 'Coffee cup',
	'value11' => 'Gift',
	'value12' => 'Share arrow',
        ),
	) ) );

	$wp_customize->add_setting( 'theme_customizer_hidedownbutton', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_hidedownbutton', array(
		'label' => __( 'Hide down button', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_hidedownbutton'
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_showsubscribe', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_showsubscribe', array(
		'label' => __( 'Show subscribe field', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_showsubscribe'
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_hidesubscribe', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_hidesubscribe', array(
		'label' => __( 'Hide subscribe form', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_hidesubscribe',
		'priority' => 3
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_hidedownload2', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_hidedownload2', array(
		'label' => __( 'Hide download button', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_hidedownload2',
		'priority' => 6
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_hidedownload', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_hidedownload', array(
		'label' => __( 'Hide download button', 'section' ),
		'type'    => 'checkbox',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_hidedownload',
	) ) );

	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'theme_customizer_showcaseimage', array(
		'label' => __( 'Showcase image Upload', 'section' ),
		'section' => 'theme_customizer_showcaseimage',
		'settings' => 'theme_customizer_showcaseimage'
	) ) );

	//Footer button text
	$wp_customize->add_section( 'theme_customizer_footertext', array(
		'title' => __( 'Footer socials, button & subscribe', 'section' ),
		'priority' => 110
	) );

	$wp_customize->add_setting( 'theme_customizer_buttonfootertext', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttonfootertext', array(
		'label' => __( 'Button text', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_buttonfootertext',
		'priority' => 5
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_buttonfooterlink', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttonfooterlink', array(
		'label' => __( 'Button Link (start with http://)', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_buttonfooterlink',
		'priority' => 6
	) ) );


	$wp_customize->add_setting( 'textarea_setting', array(
    'default'        => 'Insert your mailchimp light form here',
	) );
 
	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'textarea_setting', array(
    'label'   => 'Mailchimp form action=""',
    'section' => 'theme_customizer_footertext',
    'settings'   => 'textarea_setting',
    'priority' => 4
	) ) );
	
	$wp_customize->add_setting( 'textarea_setting_footertext', array(
	) );
 
	$wp_customize->add_control( new WP_Customize_Textarea_Control( $wp_customize, 'textarea_setting_footertext', array(
    'label'   => 'Outro text footer',
    'section' => 'theme_customizer_footertext',
    'settings'   => 'textarea_setting_footertext',
    'priority' => 2
	) ) );
	
	$wp_customize->add_setting( 'theme_customizer_footerheader', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_footerheader', array(
		'label' => __( 'Footer header', 'section' ),
		'type'    => 'text',
		'section' => 'theme_customizer_footertext',
		'settings' => 'theme_customizer_footerheader',
		'priority' => 1
	) ) );

	$wp_customize->add_setting( 'theme_customizer_buttonfootericon', array(
		
	) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'theme_customizer_buttonfootericon', array(
		'label' => __( 'Down Button icon', 'section' ),
		'type'    => 'radio',
		'section' => 'theme_customizer_headertext',
		'settings' => 'theme_customizer_buttonfootericon',
		'choices'    => array(
        'value1' => 'Circle arrow',
        'value2' => 'Cloud arrow',
        'value3' => 'Doubble arrow',
	'value4' => 'Single arrow',
	'value5' => 'Caret arrow',
	'value6' => 'Hand arrow',
        ),
	) ) );


	// Accent color
  	$colors = array();
  	$colors[] = array( 'slug'=>'accent_color', 'default' => '#5bad8a', 'label' => __( 'Accent Color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	// Top navigation section color
  	$colors = array();
  	$colors[] = array( 'slug'=>'nav_color', 'default' => '#666', 'label' => __( 'Top navigation hover / active Color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	// Top navigation section color
  	$colors = array();
  	$colors[] = array( 'slug'=>'nav2_color', 'default' => '#999', 'label' => __( 'Top navigation inactive Color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	// Social icons color
  	$colors = array();
  	$colors[] = array( 'slug'=>'socials_color', 'default' => '#9aa7ad', 'label' => __( 'Social icons Color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}

	// Copyright color
  	$colors = array();
  	$colors[] = array( 'slug'=>'copyright_color', 'default' => '#999', 'label' => __( 'Copyright text Color', 'section' ) );

  	foreach($colors as $color)
  	{
   	 // SETTINGS
    	$wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'], 'type' => 'option', 'capability' => 'edit_theme_options' ));
	// CONTROLS
    	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $color['slug'], array( 'label' => $color['label'], 'section' => 'colors', 'settings' => $color['slug'], 'capability' => 'edit_theme_options' )));
  	}


	
	//Real Time Settings Preview
	
	$wp_customize->get_setting('blogname')->transport='postMessage';
	
	if ( $wp_customize->is_preview() && ! is_admin() )
	add_filter( 'wp_footer', 'customizer_preview', 21);
	
	function customizer_preview() {
		?>
		<script type="text/javascript">
		( function( $ ){
		
		wp.customize('blogname',function( value ) {
			value.bind(function(to) {
				$('#logo h1 a, #logo h2 a').html(to);
			});
		});
		
		} )( jQuery )
		</script>
		<?php 
	}
	
}
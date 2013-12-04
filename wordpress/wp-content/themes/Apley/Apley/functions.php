<?php

//Load all scripts and stylesheets

function playne_scripts_styles() {
	
	//Main Stylesheet
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	//Font Awesome css
	wp_enqueue_style( 'font_awesome_css', get_template_directory_uri() . "/includes/fontawesome/font-awesome.css", array(), '0.1', 'screen' );
	
	//Google Fonts
	wp_enqueue_style('google_opensans', 'http://fonts.googleapis.com/css?family=Open Sans:400,700');
	wp_enqueue_style('google_pacifico', 'http://fonts.googleapis.com/css?family=Pacifico');

	//PrettyPhoto css
	wp_enqueue_style( 'prettyPhoto_css', get_template_directory_uri() . "/includes/prettyPhoto/css/prettyPhoto.css", array(), '0.1', 'screen' );

	//jQuery
	wp_enqueue_script('jquery');
	
	//Custom
	wp_enqueue_script('custom_js', get_template_directory_uri() . '/includes/js/custom.js', false, false , true);
	
	//Responsiveness
	wp_enqueue_script('responsiveness_js', get_template_directory_uri() . '/includes/js/responsiveness.js', false, false , true);

	//Flexslider
	wp_enqueue_script('flexslider_js', get_template_directory_uri() . '/includes/js/flexslider-min.js', false, false , true);
		
	//PrettyPhoto
	wp_enqueue_script('prettyPhoto_js', get_template_directory_uri() . '/includes/prettyPhoto/jquery.prettyPhoto.js', false, false , true);

}
add_action( 'wp_enqueue_scripts', 'playne_scripts_styles' );

// Header image support
add_theme_support( 'custom-header');

//Read more link
function playne_new_excerpt_more($more) {
       global $post;
	return '<div class="centered"><a class="more-linkd" href="'. get_permalink() . '">Read More</a></div>';
}
add_filter('excerpt_more', 'playne_new_excerpt_more');

function playne_readmore() {
	global $post;
	$ismore = @strpos( $post->post_content, '<!--more-->');
	if($ismore) : the_content(__( '<div class="centered"><a class="more-linkd" href="'. get_permalink() . '">Read More</a></div>','playne'));
	else : the_excerpt(__( '<div class="centered"><a class="more-linkd" href="'. get_permalink() . '">Read More</a></div>','playne'));
	endif;
}

// Custom background support
$argss = array(
	'default-color'          => '#eceef1'
);
add_theme_support( 'custom-background', $argss );

// Flexslider rotator script
require_once( get_template_directory() .'/includes/scripts/rotator.php' );

// Languages
load_theme_textdomain( 'playne', get_template_directory() . '/includes/languages' );
 
$locale = get_locale();
$locale_file = get_template_directory_uri() . "/includes/languages/$locale.php";
if ( is_readable($locale_file) )
	require_once($locale_file);	

//widget shortcodes

add_filter('widget_text', 'do_shortcode');

// Pagination
function playne_page_has_nav() {
	global $wp_query;
	return ($wp_query->max_num_pages > 1);
}

//Customizer
require_once(dirname(__FILE__) . "/customizer.php");

function playne_customizer_admin() {
	add_theme_page( 'Customize', 'Customize', 'edit_theme_options', 'customize.php' ); 
}
add_action ('admin_menu', 'playne_customizer_admin');


//Custom post formats support
add_theme_support('post-formats', array( 'quote', 'image', 'video', 'link', 'aside', 'gallery', 'chat'));

//Change editor fonts
require_once(dirname(__FILE__) . "/includes/scripts/add-styles.php");

add_theme_support( 'automatic-feed-links' );

//Menus
add_theme_support( 'menus' );
register_nav_menu('main', 'Main Menu');

//Thumbnails
add_theme_support('post-thumbnails');
add_image_size( 'large-image', 9999, 9999, false ); // Large Post Image

if ( ! isset( $content_width ) ) $content_width = 720;

//Footer widgets
if ( function_exists('register_sidebars') )

register_sidebar(array(

	'name' => __( 'Footer 1', 'writer'),

	'id' => 'footer-one',

	'description' => __( 'Widgets in this area are used in the first footer column', 'writer'),

	'before_widget' => '<div class="widget %2$s clearfix">',
	'after_widget' => '</div>'

));



register_sidebar(array(

	'name' => __( 'Footer 2', 'writer'),

	'id' => 'footer-two',

	'description' => __( 'Widgets in this area are used in the second footer column', 'writer' ),

	'before_widget' => '<div class="widget %2$s clearfix">',
	'after_widget' => '</div>'

));



register_sidebar(array(

	'name' => __( 'footer 3', 'writer'),

	'id' => 'footer-three',

	'description' => __( 'Widgets in this area are used in the third footer column', 'writer' ),

	'before_widget' => '<div class="widget %2$s clearfix">',
	'after_widget' => '</div>'

));


//Comments
function playne_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('clearfix'); ?> id="li-comment-<?php comment_ID() ?>">
		
		<div class="comment-block" id="comment-<?php comment_ID(); ?>">
			<div class="comment-info">	
				<div class="comment-author vcard clearfix">
					<?php echo get_avatar( $comment->comment_author_email, 75 ); ?>
					
					<div class="comment-meta commentmetadata">
						<?php printf(__('<cite class="fn">%s</cite>', 'playne'), get_comment_author_link()) ?>
						<div style="clear:both;"></div>
						<a class="comment-time" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s', 'playne'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)', 'playne'),'  ','') ?>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
			
			<div class="comment-text">
				<?php comment_text() ?>
				<p class="reply">
					<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</p>
			</div>
		
			<?php if ($comment->comment_approved == '0') : ?>
				<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'playne') ?></em>
			<?php endif; ?>    
		</div>
<?php
}

function playne_alter_comment_form_fields($fields){

	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
    $fields['author'] = '<p class="comment-form-author">' . '<label for="author">' . __( 'Your Name *', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="author" name="author" type="text" placeholder="Your Name *" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>';
                    
    $fields['email'] = '<p class="comment-form-email">' . '<label for="email">' . __( 'Your Email *', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="email" name="email" type="text" placeholder="Your Email *" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>';
    
    $fields['url'] = '<p class="comment-form-url">' . '<label for="url">' . __( 'Your Website', 'playne' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
                    '<input id="url" name="url" type="text" placeholder="Your Website" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30"' . $aria_req . ' /></p>';

    return $fields;
}
add_filter('comment_form_default_fields','playne_alter_comment_form_fields');


function playne_cancel_comment_reply_button($html, $link, $text) {
    $style = isset($_GET['replytocom']) ? '' : ' style="display:none;"';
    $button = '<div id="cancel-comment-reply-link"' . $style . '>';
    return $button . '<i class="icon-remove-sign"></i> </div>';
}
 
add_action('cancel_comment_reply_link', 'playne_cancel_comment_reply_button', 10, 3);

// project option in admin area 
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );
function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}

//Customizer css
function accent_color()
{
    $accent_color = get_option( 'accent_color' );
    $nav_color = get_option( 'nav_color' );
    $nav2_color = get_option( 'nav2_color' );
    $socials_color = get_option( 'socials_color' );
    $copyright_color = get_option( 'copyright_color' );
    ?>
        <style type="text/css"> 
#wrap .post-entry-meta a, #wrap h1 a:hover, #wrap .format-quote a:hover, #wrap h3 a:hover, #wrap h4 a:hover, #wrap h5 a:hover, #wrap h6 a:hover, body a, #wrap .post-entry-meta a:hover, #wrap .post-entry-footer p.author a, #wrap #post-pagination a:hover, #wrap .entry-title a:hover{color:  <?php echo $accent_color; ?>;} #wrap .button.normal, #wrap .button.dark:hover, #wrap #mc_embed_signup .button {background:  <?php echo $accent_color; ?>;}body ::selection {background:  <?php echo $accent_color; ?>;}body ::-moz-selection {background:  <?php echo $accent_color; ?>;}body ::-webkit-selection {background:  <?php echo $accent_color; ?>;}.link-mored {background:  <?php echo $accent_color; ?>;}.button-download, .post .more-link, #commentform #submit {background:  <?php echo $accent_color; ?>;}.nav .current-menu-item a, .nav a:hover {color:  <?php echo $nav_color; ?>;}.nav a {color:  <?php echo $nav2_color; ?>;}.socials a {color:  <?php echo $socials_color; ?> !important;}#footer-bottom-inside, #footer-bottom-inside a, #footer-bottom-inside a:hover {color:  <?php echo $copyright_color; ?> !important;}
</style>
    <?php
}
add_action( 'wp_head', 'accent_color');


function post_even() {
	global $post_num;

	if ( ++$post_num % 2 )
		$class = 'even';
	else
		$class = 'odd';

	echo $class;
}

//Homepage items
add_action('init', 'project_custom_init');  
	
	/*-- Custom Post Init Begin --*/
	function project_custom_init()
	{
	  $labels = array(
		'name' => _x('Items', 'post type general name', 'playne'),
		'singular_name' => _x('Item', 'post type singular name', 'playne'),
		'add_new' => _x('Add New', 'project', 'playne'),
		'add_new_item' => __('Add New Item', 'playne'),
		'edit_item' => __('Edit Item', 'playne'),
		'new_item' => __('New Item', 'playne'),
		'view_item' => __('View Item', 'playne'),
		'search_items' => __('Search Items', 'playne'),
		'not_found' =>  __('No Items found', 'playne'),
		'not_found_in_trash' => __('No Items found in Trash', 'playne'),
		'parent_item_colon' => '',
		'menu_name' => 'Homepage'

	  );
	  
	 $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor', 'thumbnail', 'custom-fields')
	  );
	  // The following is the main step where we register the post.
	  register_post_type('project',$args);
	  	  
	}

	add_filter('post_updated_messages', 'project_updated_messages');
	
	function project_updated_messages( $messages ) {
	  global $post, $post_ID;

	  $messages['project'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Homepage Item updated. <a href="%s">View item</a>'), esc_url( get_permalink($post_ID) ) ),
		2 => __('Custom field updated.', 'playne'),
		3 => __('Custom field deleted.', 'playne'),
		4 => __('Item updated.', 'playne'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Homepage Item restored to revision from %s', 'playne'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Homepage Item published. <a href="%s">View item</a>'), esc_url( get_permalink($post_ID) ) ),
		7 => __('Item saved.', 'playne'),
		8 => sprintf( __('Homepage Item submitted. <a target="_blank" href="%s">Preview item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
		9 => sprintf( __('Homepage Item scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview item</a>'),
		  // translators: Publish box date format, see http://php.net/date
		  date_i18n( __( 'M j, Y @ G:i', 'playne' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
		10 => sprintf( __('Homepage Item draft updated. <a target="_blank" href="%s">Preview item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
	  );

	  return $messages;
}
	
// Custom meta boxes

function playne_metaboxes( $meta_boxes ) {
	$prefix = '_playne_'; // Prefix for all fields
	$meta_boxes[] = array(
		'id' => 'test_metabox',
		'title' => 'Homepage item options',
		'pages' => array('project'), // post type
		'context' => 'normal',
		'priority' => 'high',
		'show_names' => true, // Show field names on the left
		'fields' => array(
			array(

	            'name' => 'Background color',

	            'desc' => 'Change the background color of the homepage item',

	            'id'   => $prefix . 'colorpickerz',

	            'type' => 'colorpicker',

		    'std'  => '#ffffff'

	        ),
			array(

	            'name' => 'Header text color',

	            'desc' => 'Change the header text color of the homepage item',

	            'id'   => $prefix . 'colorpickerz2',

	            'type' => 'colorpicker',

		    'std'  => '#444'

	        ),
			array(

	            'name' => 'Main text color',

	            'desc' => 'Change the main text color of the homepage item',

	            'id'   => $prefix . 'colorpickerz3',

	            'type' => 'colorpicker',

		    'std'  => '#777'

	        ),

			array(
				'name' => 'Background Image',
				'desc' => 'Upload an image or enter an URL as background of the homepage item (this will overwrite the color background)',
				'id'   => $prefix . 'imagepickerz',
				'type' => 'file',
			),

			array(
				'name' => 'Background height',
				'desc' => 'Give a height in pixels for the background image (example: 800px)',
				'id'   => $prefix . 'imageheightz',
				'type' => 'text',
			),

			array(
				'name' => 'Background scrolling effect',
				'desc' => 'When scrolling the background will shift when this is checked',
				'id'   => $prefix . 'imagescrolling',
				'type' => 'select',
				'options' => array(
					array( 'name' => 'no', 'value' => 'no', ),
					array( 'name' => 'yes', 'value' => 'yes', ),	
			),
			),

			array(
				'name' => 'Featured image slider',
				'desc' => 'When activated you can upload your featured images and it will automaticly turn into a slider',
				'id'   => $prefix . 'imageslider',
				'type' => 'select',
				'options' => array(
					array( 'name' => 'no', 'value' => 'no', ),
					array( 'name' => 'yes', 'value' => 'yes', ),	
			),
			),

			array(

				'name'    => 'Align featured image / video',

				'desc'    => 'Use this to align the featured image or video to the left or right.',

				'id'      => $prefix . 'selectplayne',

				'type'    => 'select',

				'options' => array(

					array( 'name' => 'align right', 'value' => 'standard', ),

					array( 'name' => 'align left', 'value' => 'switch', ),
					array( 'name' => 'full width', 'value' => 'switch2', ),

				),

			),
		),
	);

	return $meta_boxes;
}
add_filter( 'cmb_meta_boxes', 'playne_metaboxes' );

add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
	if ( !class_exists( 'cmb_Meta_Box' ) ) {
		require_once( 'includes/metabox/init.php' );
	}
}
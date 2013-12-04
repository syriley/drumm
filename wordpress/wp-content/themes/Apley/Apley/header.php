<?php 
global $data;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<title><?php wp_title( '-', true, 'right' ); ?><?php echo bloginfo( 'name' ); ?></title>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0" />
	
	<!--[if lte IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/includes/css/ie.css" media="screen"/>
	<![endif]-->

	<!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
	document.documentElement.className = 'js';
	</script>
	
	<?php if ( get_theme_mod('theme_customizer_favicon') ) { ?>
	<!-- Get the favicon -->
	<link rel="icon" type="image/png" href="<?php echo '' .get_theme_mod( 'theme_customizer_favicon', '' )."\n";?>" />
	<?php } ?>

	<?php if ( is_singular() && is_home() ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
<?php { ?>
	<!-- Get the backgrounds -->
	<style type="text/css">
	#header-wrap, #load {background: url(<?php header_image(); ?>) no-repeat center center;}
	</style>
<?php } ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap"><!-- Start the main wrap -->
		<header class="clearfix">
			<!-- Get the navigation -->
			<div class="header-top">
				<div class="header-top-inner">
					<div class="left-float">
						<?php if ( get_theme_mod('theme_customizer_logo') ) { ?>
	    					<div class="logo-image">
							<a href="<?php echo home_url( '/' ); ?>"><img class="logo" src="<?php echo '' .get_theme_mod( 'theme_customizer_logo', '' )."\n";?>" alt="<?php the_title(); ?>" /></a>
							</div>
	    					<?php } else { ?>
	    
		    				<div class="left">	
		    				<h1 class="logo-text"><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name') ?></a></h1>
		    				</div>
	    					<?php } ?>
					</div>
					<div class="right-float">
						<nav class="header-nav"><?php wp_nav_menu(array('theme_location' => 'main', 'menu_class' => 'nav')); ?></nav>
					</div>
				</div>
			</div>
<div id="header-wrap">
	<div class="header-wrap-overlay">
		<div class="header-inner">
				<div class="headerimage"><!-- Get the featured image -->
					<?php if ( get_theme_mod('theme_customizer_showcaseimage') ) { ?>
					<img src="<?php echo '' .get_theme_mod( 'theme_customizer_showcaseimage', '' )."\n";?>" alt="" class="attachment-large-image" />
					<?php } ?>
				</div>
				<div class="subtitle-inner">
					<div class="logo-subtitle-wrap">
					<?php if ( get_theme_mod('theme_customizer_headertextlineone') ) { ?><!-- Get tagline if filled -->
					<div class="logo-subtitle"><span><?php echo '' .get_theme_mod( 'theme_customizer_headertextlineone', '' )."\n";?></span></div>
	 				<?php } ?>
	 				
	 				<?php if ( get_theme_mod('theme_customizer_headertextlinetwo') ) { ?><!-- Get tagline if filled -->
					<div class="logo-subtitle-text"><?php echo '' .get_theme_mod( 'theme_customizer_headertextlinetwo', '' )."\n";?></div>
	 				<?php } ?>
		
					<div class="buttons">
					<?php if( get_theme_mod( 'theme_customizer_showsubscribe' ) == '1') { ?>
					<div id="mc_embed_signup" class="lefts">
						<form action="<?php echo '' .get_theme_mod( 'textarea_setting', '' )."\n";?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<label for="mce-EMAIL">Subscribe to our mailing list</label>
						<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						</form>
					</div>
					<?php } ?>		
					<?php if( get_theme_mod( 'theme_customizer_hidedownload' ) == '0') { ?><!-- Get download button if not hidden -->
					<a href="<?php echo '' .get_theme_mod( 'theme_customizer_linkbutton', '' )."\n";?>" class="button-download"><?php if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value1') { ?><i class="icon-mobile-phone"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value2') { ?><i class="icon-tablet"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value3') { ?><i class="icon-desktop"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value4') { ?><i class="icon-heart"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value5') { ?><i class="icon-dashboard"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value6') { ?><i class="icon-cloud-download"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value7') { ?><i class="icon-camera"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value8') { ?><i class="icon-star"></i> <?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value9') { ?><i class="icon-beaker"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value10') { ?><i class="icon-coffee"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value11') { ?><i class="icon-gift"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value12') { ?><i class="icon-share-alt"></i><?php } ?> <?php echo '' .get_theme_mod( 'theme_customizer_buttontext', '' )."\n";?></a>
					<?php } else { ?>
					<?php } ?>

					<?php if( get_theme_mod( 'theme_customizer_hidedownbutton' ) == '0') { ?><!-- Get scroll button if not hidden -->
					<a href="#" id="link" class="button-download alt"><?php if( get_theme_mod( 'theme_customizer_buttonfootericon' ) == 'value1') { ?><i class="icon-circle-arrow-down"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonfootericon' ) == 'value2') { ?><i class="icon-cloud-download"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonfootericon' ) == 'value3') { ?><i class="icon-double-angle-down"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonfootericon' ) == 'value4') { ?><i class="icon-angle-down"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonfootericon' ) == 'value5') { ?><i class="icon-caret-down"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonfootericon' ) == 'value6') { ?><i class="icon-hand-down"></i><?php } ?></a>
					<?php } else { ?>
					<?php } ?>
					</div>
					</div>
					
				</div>
		</div>
	</div>
</div>
		</header>
		
<div id="wrapper" class="clearfix">
	<div id="main">
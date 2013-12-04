<div id="load">
	<div id="load-wrap-overlay">
		<!-- Grab the call to action button -->	
		<div class="load-text-line">
			<div class="inside">
			<?php if ( is_home() ) { ?>
			<div id="footer">
			<!-- Hidden footer widgets-->
			<div id="footer-inside">
				<?php if (function_exists('dynamic_sidebar')) : else : ?>		
				<?php endif; ?>
				<?php dynamic_sidebar('footer-one'); ?>
				<?php dynamic_sidebar('footer-two'); ?>
				<?php dynamic_sidebar('footer-three'); ?>
			</div>
			<?php } else { ?>
			<div id="inside-wrap">
			<h2><?php echo '' .get_theme_mod( 'theme_customizer_footerheader', '' )."\n";?></h2>
			
			<div class="textoutro">
			<?php echo '' .get_theme_mod( 'textarea_setting_footertext', '' )."\n";?>
			</div>
			
			<?php if( get_theme_mod( 'theme_customizer_hidedownload2' ) == '1') { ?>
			<?php } else { ?>
			<a href="<?php echo '' .get_theme_mod( 'theme_customizer_buttonfooterlink', '' )."\n";?>" class="link-mored totop"><?php if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value1') { ?><i class="icon-mobile-phone"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value2') { ?><i class="icon-tablet"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value3') { ?><i class="icon-desktop"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value4') { ?><i class="icon-heart"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value5') { ?><i class="icon-dashboard"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value6') { ?><i class="icon-cloud-download"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value7') { ?><i class="icon-camera"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value8') { ?><i class="icon-star"></i> <?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value9') { ?><i class="icon-beaker"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value10') { ?><i class="icon-coffee"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value11') { ?><i class="icon-gift"></i><?php } else if( get_theme_mod( 'theme_customizer_buttonicon' ) == 'value12') { ?><i class="icon-share-alt"></i><?php } ?> <?php echo '' .get_theme_mod( 'theme_customizer_buttonfootertext', '' )."\n";?></a>
			<?php } ?>	
			
		<?php if( get_theme_mod( 'theme_customizer_hidesubscribe' ) == '1') { ?>
		<?php } else { ?>
		<div id="mc_embed_signup">
			<form action="<?php echo '' .get_theme_mod( 'textarea_setting', '' )."\n";?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<label for="mce-EMAIL">Subscribe to our mailing list</label>
			<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
			</form>
		</div>
		<?php } ?>	
		<?php } ?>	
		</div>
		</div>
</div>
</div>
</div>
	
</div><!-- Main wrap -->
<footer class="clearfix">
<div id="footer-bottom">
<!-- Get the copyright -->
	<div id="footer-bottom-inside">
		<div class="left-float">
		Copyright &copy; <?php $the_year = date("Y"); echo $the_year; ?>&nbsp; <a href="<?php echo home_url( '/' ); ?>"><?php bloginfo('name'); ?></a>
		</div>
		<div class="right-float">
		<div class="socials">
				<?php if ( get_theme_mod('theme_customizer_footerfacebook') ) { ?>
		<a href="<?php echo '' .get_theme_mod( 'theme_customizer_footerfacebook', '' )."\n";?>"><i class="icon-facebook"></i></a>
		<?php } ?>

		<?php if ( get_theme_mod('theme_customizer_footertwitter') ) { ?>
		<a href="<?php echo '' .get_theme_mod( 'theme_customizer_footertwitter', '' )."\n";?>"><i class="icon-twitter"></i></a>
		<?php } ?>

		<?php if ( get_theme_mod('theme_customizer_footerlinkedin') ) { ?>
		<a href="<?php echo '' .get_theme_mod( 'theme_customizer_footerlinkedin', '' )."\n";?>"><i class="icon-linkedin"></i></a>
		<?php } ?>

		<?php if ( get_theme_mod('theme_customizer_footergithub') ) { ?>
		<a href="<?php echo '' .get_theme_mod( 'theme_customizer_footergithub', '' )."\n";?>"><i class="icon-github-alt"></i></a>
		<?php } ?>

		<?php if ( get_theme_mod('theme_customizer_footermail') ) { ?>
		<a href="<?php echo '' .get_theme_mod( 'theme_customizer_footermail', '' )."\n";?>"><i class="icon-envelope"></i></a>
		<?php } ?>
		</div>
		</div>
	</div>
</div><!-- Footer bottom -->
</footer>
<!-- Load the scripts -->
<?php wp_footer(); ?>
</div>
</div>
</body>
</html>
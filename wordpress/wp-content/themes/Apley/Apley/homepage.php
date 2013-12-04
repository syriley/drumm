<?php
/*
Template Name: Custom homepage
*/
?>  
<?php get_header(); ?>
<?php $loop = new WP_Query(array('post_type' => 'project', 'posts_per_page' => -1)); $count =0; ?>
		
<a name="content"></a>
<div id="content">
	<div class="content-posts">
	
<?php if ( $loop ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
					
		<!-- Grab the Homepage item -->		
		<article <?php post_class('post clearfix'); ?> style="<?php if ( get_post_meta($post->ID, '_playne_imagepickerz', true) ) { ?><?php global $post; $image = get_post_meta( $post->ID, '_playne_imagepickerz', true ); echo "background:url('$image') no-repeat center center fixed"; ?>;<?php } else if ( get_post_meta($post->ID, '_playne_colorpickerz', true) ) { ?><?php global $post; $color = get_post_meta( $post->ID, '_playne_colorpickerz', true ); echo "background-color:$color"; ?>;<?php } ?><?php if ( get_post_meta($post->ID, '_playne_imageheightz', true) ) { ?><?php global $post; $height = get_post_meta( $post->ID, '_playne_imageheightz', true ); echo "height:$height"; ?>;<?php }?>"<?php if( get_post_meta( $post->ID, '_playne_imagescrolling', true ) == 'no') { ?>id="scrolling"<?php }?>>
			
			<div class="entry-wraps">
				<div class="entry-contents">
					<?php if ( get_post_meta($post->ID, 'video', true) ) { ?>

					<div class="media media-<?php the_ID(); ?>" <?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?> style=" <?php } ?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') { echo "width:100%;"; }?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') { echo "float:left !important;"; }?><?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?>"<?php }?>>
						<!-- Homepage item Video -->	
						<div class="fitvid">
						<?php echo get_post_meta($post->ID, 'video', true) ?>
						
						</div>
					</div>
					<?php } else if ( get_post_meta($post->ID, '_playne_imageslider', true) == 'yes' ) { ?>

					<div class="media media-<?php the_ID(); ?>"<?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?> style=" <?php } ?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') { echo "width:100%;"; }?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') { echo "float:left !important;"; }?><?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?>"<?php }?>>
						<!-- Homepage item Slideshow -->
						<div class="flexslider-container">
        						<div class="flexslider">
            							<ul class="slides">
                					<?php
                						$single_gallery_attachments = get_posts(
               							array(
                    						'orderby' => 'menu_order',
                    						'post_type' => 'attachment',
                    						'post_parent' => get_the_ID(),
		    								'post_thumbnail' => get_the_ID(),
		    								'post_excerpt' => get_the_ID(),
                    						'post_mime_type' => 'image',
                    						'post_status' => null,
                    						'posts_per_page' => -1
                							)
            							); 
                						foreach ( $single_gallery_attachments as $single_gallery_attachment ) :
                
                						if( get_post_meta($single_gallery_attachment->ID, 'be_rotator_include', true) !== '1' ) {
                					?>
               								<li class="slide">
									<img src="<?php echo ( wp_get_attachment_url( $single_gallery_attachment->ID, 'full' )); ?>" alt="<?php echo the_title(); ?>" />
									</li>
                					<?php } endforeach; ?>
            							</ul>
        						</div>
    						</div>
					</div>

					<?php } else if ( has_post_thumbnail() && get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') { ?>

					<div class="media media-<?php the_ID(); ?>"<?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?> style="<?php } ?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') { echo "width:100%;"; }?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') { echo "float:left!important;"; }?><?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?>"<?php }?>>
						<!-- Homepage item aligned left -->
						<?php the_post_thumbnail( 'large-image rightfloat' ); ?>

					</div>
					<?php } else if ( has_post_thumbnail() ) { ?>

					<div class="media media-<?php the_ID(); ?>"<?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?> style="<?php } ?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') { echo "width:100%;"; }?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') { echo "float:left!important;"; }?><?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?>"<?php }?>>
							<!-- Homepage item aligned right -->
							<?php the_post_thumbnail( 'large-image float' ); ?>
					</div>
					<?php } else if ( get_post_meta($post->ID, 'maps', true) ) { ?>

					<div class="media media-<?php the_ID(); ?>"<?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?> style="<?php } ?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') { echo "width:100%;"; }?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') { echo "float:left!important;"; }?><?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch')) { ?>"<?php }?>>
					
						<!-- Homepage item Google Maps -->
						<div class="maps">
							<?php echo get_post_meta($post->ID, 'maps', true) ?>
						</div>
					</div>
					<?php } else { ?>
					<?php } ?>

					<?php if ( empty( $post->post_title ) && empty( $post->post_content )) { ?>
					<?php } else { ?>
					<!-- Homepage item text content -->
					<div class="text text-<?php the_ID(); ?>" <?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') || ( get_post_meta( $post->ID, '_playne_colorpickerz3', true ))) { ?>style="<?php } ?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') { echo "width:100%;"; }?><?php if( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') { echo "float:right!important;"; }?><?php global $post; $color = get_post_meta( $post->ID, '_playne_colorpickerz3', true ); echo "color:$color"; ?><?php if (( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch2') || ( get_post_meta( $post->ID, '_playne_selectplayne', true ) == 'switch') || ( get_post_meta( $post->ID, '_playne_colorpickerz3', true ))) { ?>"<?php } ?>>

						<?php if ( empty( $post->post_title ) ) { ?>
						<?php } else { ?>
 						<h2 class="entry-title"<?php if (get_post_meta( $post->ID, '_playne_colorpickerz2', true )) { ?><?php global $post; $color = get_post_meta( $post->ID, '_playne_colorpickerz2', true ); echo " style='color:$color'" ?><?php }?>><?php the_title(); ?></h2>
						<?php } ?>
						<?php if ( empty( $post->post_content ) ) { ?>
						<?php } else { ?>
 						<?php the_content(); ?>
						<?php } ?>		
					</div>
					<?php } ?>
				</div>						
			</div>
		</article>
			<?php endwhile; else: ?>							
		<?php endif; ?>
	<div class="clearboth">

	</div>
</div>
<?php get_footer(); ?>
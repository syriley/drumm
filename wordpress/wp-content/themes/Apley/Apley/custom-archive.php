<?php 
/* 
Template Name: Custom Archive
*/ 
?>

<?php get_header(); ?>
		
		<div id="content">
			<div class="posts">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
				<article <?php post_class('post'); ?>>
										
					<?php if ( get_post_meta($post->ID, 'video', true) ) { ?>
						<div class="fitvid">
						<?php echo get_post_meta($post->ID, 'video', true) ?>
						</div>
					
					<?php } else { ?>
						<?php if ( has_post_thumbnail() ) { ?>
						<a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'large-image' ); ?></a>
						<?php } ?>
					<?php } ?>
					
					<div class="entry-wrap">
						<div class="entry-content">
							<header>
								<div class="date-title"><?php echo get_the_date(); ?></div>
								
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								<?php } else { ?>					
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php } ?>
							</header>
							<div class="post-content-page">
								<?php the_content(__( '<div class="line"><span class="whitespace">Read More</span></div>','playne')); ?>
									<div id="archive">
										<div class="toggle">
                    									<div class="toggle_title"><a href=""><span class="toggle_icon">+</span><h5><?php _e('Archive By Day','playne'); ?></h5></a>
											</div>
                    									<div class="toggle_inner">
											<ul>
												<?php wp_get_archives('type=daily&limit=15'); ?>
											</ul>
											</div>
										</div>
										
										<div class="toggle">
                 									<div class="toggle_title"><a href=""><span class="toggle_icon">+</span><h5><?php _e('Archive By Month','playne'); ?></h5></a>
											</div>
											<div class="toggle_inner">
											<ul>
												<?php wp_get_archives('type=monthly&limit=12'); ?>
											</ul>
											</div>
										</div>
										
										<div class="toggle">
							 				<div class="toggle_title"><a href=""><span class="toggle_icon">+</span><h5><?php _e('Archive By Year','playne'); ?></h5></a>
											</div>
											<div class="toggle_inner">
											<ul>
												<?php wp_get_archives('type=yearly&limit=12'); ?>
											</ul>
											</div>
										</div>
									
										<div class="toggle">
											<div class="toggle_title"><a href=""><span class="toggle_icon">+</span><h5><?php _e('Latest Posts','playne'); ?></h5></a>
											</div>
											<div class="toggle_inner">
											<ul>
												<?php wp_get_archives('type=postbypost&limit=20'); ?>
											</ul>
											</div>
										</div>
										
										<div class="toggle">
											 <div class="toggle_title"><a href=""><span class="toggle_icon">+</span><h5><?php _e('Authors','playne'); ?></h5></a>
											</div>
											<div class="toggle_inner">
											<ul>
											<?php wp_list_authors('show_fullname=1&optioncount=1&orderby=post_count&order=DESC'); ?>
											</ul>
											</div>
										</div>
									
										<div class="toggle">
											<div class="toggle_title"><a href=""><span class="toggle_icon">+</span><h5><?php _e('Pages','playne'); ?></h5></a>
											</div>
										<div class="toggle_inner">
											<ul>
											<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
											</ul>
	
											</div>
										</div>
										
										<div class="toggle">
											 <div class="toggle_title"><a href=""><span class="toggle_icon">+</span><h5><?php _e('Categories','playne'); ?></h5></a>
											</div>
											<div class="toggle_inner">
											<ul>
											<?php wp_list_categories('orderby=name&title_li='); ?> 
											</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</article>
			</div>
			
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
			
			<?php if( playne_page_has_nav() ) : ?>
				<div class="post-nav">
					<div class="post-nav-inside">
						<div class="post-nav-left"><?php previous_posts_link(__('<i class="icon-arrow-left"></i> Newer Posts', 'playne')) ?></div>
						<div class="post-nav-right"><?php next_posts_link(__('Older Posts <i class="icon-arrow-right"></i>', 'playne')) ?></div>	
					</div>
				</div>
			<?php endif; ?>
			
			<?php if( is_single () ) { ?>
				<?php if ('open' == $post->comment_status) { ?>
				<div id="comment-jump" class="comments">
				<?php comments_template(); ?>
				</div>
				<?php } ?>
			<?php } ?>
		
<?php get_footer(); ?>
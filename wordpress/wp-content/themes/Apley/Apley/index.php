<?php get_header(); ?>
		<div id="content">
			<div class="content-posts">
	
				<?php if(is_search()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Results for','playne'); ?> "<?php the_search_query() ?>" </h2></div>
				<?php } else if(is_tag()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php single_tag_title(); ?></h2>
				<?php } else if(is_day()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php echo get_the_date(); ?></h2></div>
				<?php } else if(is_month()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php echo get_the_date('F Y'); ?></h2></div>
				<?php } else if(is_year()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php echo get_the_date('Y'); ?></h2></div>
				<?php } else if(is_404()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php _e('Page Not Found!','playne'); ?></h2></div>
				<?php } else if(is_category()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php _e('Archive:','playne'); ?> <?php single_cat_title(); ?></h2></div>
				<?php } else if(is_author()) { ?>
					<div class="archive-title-wrapper"><h2 class="entry-title"><?php
					$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); echo $curauth->display_name; ?></h2></div>
				<?php } ?>
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<article <?php post_class('post clearfix'); ?>>
					<?php
						if(!get_post_format()) {
						   get_template_part('format', 'standard');
						} else {
						   get_template_part('format', get_post_format());
						};
					?>
				</article>
				
				<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<?php if( playne_page_has_nav() ) : ?>

<!-- If there is pagination display nav area -->
<div id="nav-footer">
					<div class="post-nav-left">
					<?php previous_posts_link(__('Next', 'playne')) ?>
					</div>
		
					<div class="post-nav-right">
					<?php next_posts_link(__('Previous', 'playne')) ?>
					</div>
</div>
			<?php endif; ?>
			
			<?php if( is_single () ) { ?>
				<?php if ('open' == $post->comment_status) { ?>
					<div class="comments">
						<?php comments_template(); ?>
					</div>
			<?php } ?>
<div id="nav-footer">
				<div class="post-nav-left">
				<?php previous_post_link('%link', '<i class="icon-chevron-left"></i>'); ?>
				</div>
				<div class="post-nav-right">
				<?php next_post_link('%link', '<i class="icon-chevron-right"></i>'); ?>
				</div>
</div>
			<?php } ?>
	</div>
	
			<?php get_footer(); ?>
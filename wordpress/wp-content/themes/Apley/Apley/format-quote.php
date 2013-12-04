					<div class="entry-wrap <?php post_even(); ?>">
						<div class="entry-content">
							<header>
								<!-- Quote -->
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								<?php } else { ?>					
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php } ?>
								<div class="line"><div class="whitespace"><div class="date-title"><i class="icon-time"></i> <?php echo get_the_date(); ?> &nbsp; - &nbsp; <i class="icon-comments-alt"></i> <?php if(comments_open()) { ?><?php comments_popup_link(__('0 comments', 'playne'), __('1 comment', 'playne'), __('% comments', 'playne'), 'comments-link', 'playne' ); ?><?php } ?> &nbsp; - &nbsp; <?php if ( is_sticky () ) { ?><i class="icon-pushpin"></i> Featured<?php } ?></div></div></div>

							</header>
							</header>

<!-- Check if there is a video or image -->
<?php if ( get_post_meta($post->ID, 'video', true) ) { ?>
						<div class="fitvid">
							<?php echo get_post_meta($post->ID, 'video', true) ?>
						</div>
					
					<?php } else { ?>
					
				
						<?php if ( has_post_thumbnail() ) { ?>
							<a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

<?php the_post_thumbnail( 'large-image' ); ?>
</a>
						<?php } ?>
					
					<?php } ?>

<!-- Quote author -->
<?php the_content(''); ?>


						</div>
					</div>

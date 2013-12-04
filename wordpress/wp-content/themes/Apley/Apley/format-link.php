				<div class="entry-wrap <?php post_even(); ?>">
						<div class="entry-content">
							<header>
								
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php echo get_post_meta($post->ID, 'link', true) ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								<?php } else { ?>					
									<h2 class="entry-title"><a href="<?php echo get_post_meta($post->ID, 'link', true) ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php } ?>
								<div class="line"><div class="whitespace"><div class="date-title"><i class="icon-time"></i> <?php echo get_the_date(); ?></div></div></div>

							</header>

							
							<div class="posts-content">
								
						<?php if ( has_post_thumbnail() ) { ?>
							<a class="featured-image" href="<?php echo get_post_meta($post->ID, 'link', true) ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail( 'large-image' ); ?></a>
						<?php } ?>
					

								<?php if(is_search() || is_archive()) { ?>
									<div class="excerpt-more">
										<?php playne_readmore(); ?>
									</div>
								<?php } else { ?>
									<?php the_content(''); ?>																	<div class="centered"><a href="<?php echo get_post_meta($post->ID, 'link', true) ?>" class="more-link" title="<?php _e('visit','playne'); ?>"><?php _e('visit','playne'); ?></a></div>	
									
									<?php if(is_single() || is_page()) { ?>
										<div class="pagelink">
											<?php wp_link_pages(); ?>
										</div>
									<?php } ?>
									
									
								<?php } ?>
							</div>
						</div>
					</div>
				<div class="entry-wrap <?php post_even(); ?>">
			
						<?php if ( has_post_thumbnail() ) { ?>
							<a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail( 'large-image' ); ?>
							</a>
						<?php } ?>

						<div class="entry-content">
							<header>
								
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								<?php } else { ?>					
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php } ?>
								
								<div class="line"><div class="whitespace"><div class="date-title"><i class="icon-time"></i> <?php echo get_the_date(); ?> &nbsp; - &nbsp; <i class="icon-comments-alt"></i> <?php if(comments_open()) { ?><?php comments_popup_link(__('0 comments', 'playne'), __('1 comment', 'playne'), __('% comments', 'playne'), 'comments-link', 'playne' ); ?><?php } ?> &nbsp; - &nbsp; <?php if ( is_sticky () ) { ?><i class="icon-pushpin"></i> Featured<?php } ?></div></div></div>


</header>

							
							<div class="posts-content">
					

								<?php if(is_search() || is_archive()) { ?>
									<div class="excerpt-more">
										<?php playne_readmore(); ?></div>
								<?php } else { ?>
									<?php the_content(''); ?>																				<div class="centered">
											<a href="<?php the_permalink(); ?>" class="more-link" title="<?php _e('read more','playne'); ?>"><?php _e('read more','playne'); ?>
											</a>
										</div>
									<?php if(is_single() || is_page()) { ?>
										<div class="pagelink">
											<?php wp_link_pages(); ?>
										</div>
									<?php } ?>
								
								<?php } ?>
							</div>
						</div>
				</div>
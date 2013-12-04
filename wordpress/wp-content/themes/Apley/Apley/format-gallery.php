	<div class="entry-wrap <?php post_even(); ?>">

						<div class="entry-content">
							<header>
								
								<?php if(is_single() || is_page()) { ?>
									<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
								<?php } else { ?>					
									<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<?php } ?>
								<div class="line"><div class="whitespace"><div class="date-title"><i class="icon-time"></i> <?php echo get_the_date(); ?> &nbsp; - &nbsp; <i class="icon-comments-alt"></i> <?php if(comments_open()) { ?><?php comments_popup_link(__('0 comments', 'playne'), __('1 comment', 'playne'), __('% comments', 'playne'), 'comments-link', 'playne' ); ?><?php } ?></div></div></div>

							</header>

		<!-- Get the flexslider container and script -->					
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

							<div class="posts-content">					
								
								<?php if(is_search() || is_archive()) { ?>
									<div class="excerpt-more">
										<?php playne_readmore(); ?></div>
								<?php } else { ?>
									<!-- Post content -->
									<?php the_content(''); ?>																	<div class="centered"><a href="<?php the_permalink(); ?>" class="more-link" title="<?php _e('read more','playne'); ?>"><?php _e('read more','playne'); ?></a></div>
								<?php if(is_single() || is_page()) { ?>
										<div class="pagelink">
											<?php wp_link_pages(); ?>
										</div>
									<?php } ?>
									
									<?php if(is_single()) { ?>
										<ul class="meta">
											<li class="author">
											By <?php the_author_posts_link(); ?></li>
											<li><strong>Category</strong>: <?php the_category(', '); ?></li>
											<?php $posttags = get_the_tags(); if ($posttags) { ?>
												<li><strong>Tags</strong>: <?php the_tags('', ', ', ''); ?></li>
											<?php } ?>
											
										</ul>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
<?php get_header(); ?>
		
		<div id="content">
			<div class="posts">
				<article class="post">
					<div class="entry-wrap">
						<div class="entry-content">
							<header>
							<h1 class="entry-title underline"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php _e('404 Page Not Found','playne'); ?></a></h1>
							</header>
							
							<div class="post-content">

								<div class="intro">
								<?php _e('Sorry, but the page you are looking for has moved or no longer exists. Please use the search below, or the menu above to locate what you are looking for.','playne'); ?>
								</div>
								
								<?php get_search_form();?>
								<br/><br/>
								<h3 style="text-align:center;">Latest posts</h3>

								<ul>
									<?php $the_query = new WP_Query( 'showposts=5' ); ?>
									<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
									<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
									<li><?php the_excerpt(__('(Read more)', 'playne')); ?></li>
									<?php endwhile;?>
								</ul>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>

		<div id="load">
			<div class="load-wrap-overlay">
				<div class="load-text-line">
					<div class="inside">
						<a href="" class="link-mored totop">Back to top</a>											</div>
				</div>
			</div>
		</div>
	
<?php get_footer(); ?>
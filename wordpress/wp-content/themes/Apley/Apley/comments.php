<?php

if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( post_password_required() ) { ?>
	<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'playne'); ?></p>
<?php
	return;
}
?>

<div id="comments">
	<div class="comments-wrap">
	
		<ol class="commentlist">
			<?php wp_list_comments("callback=playne_comment"); ?>
		</ol>
		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
			<nav id="comment-nav-below" role="navigation">
				<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'playne' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'playne' ) ); ?></div>
			</nav>
		<?php endif; // check for comment navigation ?>
	
		<?php comment_form(); ?>
	</div>
</div>

<?php if (have_comments()) : ?>
	<h4 class="comments-title">
		<?php
			printf(__('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', '_gxtheme'),
				number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
		?>
	</h4>
	<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
	<nav id="comment-nav-above" class="comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e('Comment navigation', '_gxtheme'); ?></h1>
		<div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', '_gxtheme')); ?></div>
		<div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', '_gxtheme')); ?></div>
	</nav>
	<?php endif;?>
	<ol class="comment-list">
		<?php wp_list_comments(array(
				'style'      => 'ol',
				'short_ping' => true,
			)); ?>
	</ol>
	<?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : // are there comments to navigate through ?>
	<nav id="comment-nav-below" class="comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e('Comment navigation', '_gxtheme'); ?></h1>
		<div class="nav-previous"><?php previous_comments_link(__('&larr; Older Comments', '_gxtheme')); ?></div>
		<div class="nav-next"><?php next_comments_link(__('Newer Comments &rarr;', '_gxtheme')); ?></div>
	</nav>
	<?php endif;?>
<?php endif;?>
<?php if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
	<p class="no-comments"><?php _e('Comments are closed.', '_gxtheme'); ?></p>
<?php endif; ?>
<?php comment_form(); ?>

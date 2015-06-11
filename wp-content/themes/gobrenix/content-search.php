<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package gobrenix
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title(sprintf('<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
		<?php if ('post' == get_post_type()) : ?>
		<div class="entry-meta">
			<?php _gxtheme_posted_on(); ?>
		</div>
		<?php endif; ?>
	</header>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<footer class="entry-footer">
		<?php if ('post' == get_post_type()) : ?>
			<?php
				$categories_list = get_the_category_list(__(', ', '_gxtheme'));
				if ($categories_list && _gxtheme_categorized_blog()) :
			?>
			<span class="cat-links">
				<?php printf(__('Posted in %1$s', '_gxtheme'), $categories_list); ?>
			</span>
			<?php endif;?>
			<?php
				$tags_list = get_the_tag_list('', __(', ', '_gxtheme'));
				if ($tags_list) :
			?>
			<span class="tags-links">
				<?php printf(__('Tagged %1$s', '_gxtheme'), $tags_list); ?>
			</span>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) : ?>
		<span class="comments-link"><?php comments_popup_link(__('Leave a comment', '_gxtheme'), __('1 Comment', '_gxtheme'), __('% Comments', '_gxtheme')); ?></span>
		<?php endif; ?>
		<?php edit_post_link(__('Edit', '_gxtheme'), '<span class="edit-link">', '</span>'); ?>
	</footer>
</article>

<?php
/**
 * The template for displaying the front page.
 *
 * This is the template that displays on the front page only.
 *
 * @package gobrenix
 */
get_header(); ?>
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('content', 'page'); ?>
			<?php
				if (comments_open() || '0' != get_comments_number()) :
					comments_template();
				endif;
			?>
		<?php endwhile; ?>
	</div>
<?php get_footer(); ?>

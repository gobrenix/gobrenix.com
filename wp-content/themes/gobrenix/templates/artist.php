<?php
/**
 * Template Name: Artist Page
 *
 * Displays content about an artist
 *
 * @package gobrenix
 */

get_header(); ?>
	<main role="main">
		<div class="container artist-container">
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('content', 'page'); ?>
			<?php if (comments_open() || '0' != get_comments_number()) {
					comments_template();
			} ?>
		<?php endwhile; ?>
		</div>
	</main>
<?php get_footer(); ?>

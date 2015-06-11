<?php
/**
 * Template Name: Event Calendar
 *
 * Hides the toplevel navigation and wraps content
 *
 * @package gobrenix
 */

get_header('nonav'); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <div class="container">
			<?php while (have_posts()) : the_post(); ?>
				<?php get_template_part('content', 'page'); ?>
				<?php if (comments_open() || '0' != get_comments_number()) {
						comments_template();
				} ?>
			<?php endwhile; ?>
            </div>
		</main>
	</div>
<?php get_footer(); ?>

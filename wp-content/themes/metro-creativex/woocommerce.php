<?php
/**
 * The template for displaying all pages.
 * @package metro-creativex
 */
get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php woocommerce_content(); ?>
	<?php endif; ?>
<?php get_footer(); ?>

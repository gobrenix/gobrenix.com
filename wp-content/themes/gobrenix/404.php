<?php
/**
* The template for displaying 404 pages (not found).
*
* @package gobrenix
*/

get_header(); ?>
<main role="main">
	<div class="container">
		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', '_gxtheme'); ?></h1>
			</header>
			<div class="page-content">
				<p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', '_gxtheme'); ?></p>
				<?php get_search_form(); ?>
				<?php the_widget('WP_Widget_Recent_Posts'); ?>
				<?php if (_gxtheme_categorized_blog()) : ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php _e('Most Used Categories', '_gxtheme'); ?></h2>
						<ul>
							<?php
							wp_list_categories(array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							));
							?>
						</ul>
					</div>
				<?php endif; ?>
				<?php
				$archive_content = '<p>' . sprintf(__('Try looking in the monthly archives. %1$s', '_gxtheme'), convert_smilies(':)')) . '</p>';
				the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content");
				?>
				<?php the_widget('WP_Widget_Tag_Cloud'); ?>
			</div>
		</section>
	</div>
</main>
<?php get_footer(); ?>

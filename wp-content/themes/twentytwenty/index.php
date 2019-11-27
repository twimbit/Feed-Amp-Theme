<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">

	<section id="main-widget-area" class="widget-area-section">
		<?php
		$widgets = get_field('add_widgets', 'options'); ?>
		<div class="custom-carousel amp-carousel-style explore-all">
			<?php get_template_part('widgets/widget', 'custom'); ?>
		</div>

		<div class="featured-widget amp-carousel-style explore-all">
			<?php get_template_part('widgets/widget', 'featured'); ?>
		</div>

		<div class="trending-widget explore-all">
			<?php get_template_part('widgets/widget', 'trending'); ?>
		</div>

		<div class="trending-widget explore-all">
			<?php get_template_part('widgets/widget', 'latest'); ?>
		</div>
	</section>
</main><!-- #site-content -->

<?php
get_footer();

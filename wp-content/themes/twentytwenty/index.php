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

	<section id="main-widget-area">
		<?php
		if (is_active_sidebar('sidebar-1')) : ?>

			<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e('Home', 'twimcast'); ?>">
				<?php
					if (is_active_sidebar('sidebar-1')) {
						?>
					<div class="widget-column footer-widget-1">
						<?php dynamic_sidebar('sidebar-1'); ?>
					</div>
				<?php
					}
					?>
			</aside><!-- .widget-area -->

		<?php endif; ?>
	</section>
</main><!-- #site-content -->

<?php
get_footer();

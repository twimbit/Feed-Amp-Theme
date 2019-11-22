<?php
get_header();
// include "page-templates/pf.php";
$template_directory = get_template_directory_uri();
?>

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


<?php get_footer(); ?>
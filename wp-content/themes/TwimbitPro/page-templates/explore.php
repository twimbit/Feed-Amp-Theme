<?php
get_header();
/**
 * Template Name: Explore template
 *
 * The template for the page builder full-width.
 *
 * It contains header, footer and 100% content width.
 *
 * @package Twimbit Lite
 */

$trending = array(
    'numberposts' => 0,
    'category' => get_category_by_slug('trending')->term_id,
    'orderby' => 'date',
    'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('video', 'post', 'podcast', 'explore'),
    'suppress_filters' => true,
);
$get_trending = get_posts($trending);


$business = get_category_by_slug('business_model');
$business_child = get_categories(array('child_of' => $business->term_id, 'hide_empty' => FALSE));


$careers = get_category_by_slug('careers');
$careers_child = get_categories(array('child_of' => $careers->term_id, 'hide_empty' => FALSE));


$companies = get_category_by_slug('companies');
$companies_child = get_categories(array('child_of' => $companies->term_id, 'hide_empty' => FALSE));


$technology = get_category_by_slug('technology');
$technology_child = get_categories(array('child_of' => $technology->term_id, 'hide_empty' => FALSE));


$events = get_category_by_slug('events');
$events_child = get_categories(array('child_of' => $events->term_id, 'hide_empty' => FALSE));


$exclusive = get_category_by_slug('exclusive');
$exclusive_child = get_categories(array('child_of' => $exclusive->term_id, 'hide_empty' => FALSE));


$geography = get_category_by_slug('geographies');
$geography_child = get_categories(array('child_of' => $geography->term_id, 'hide_empty' => FALSE));


$industry = get_category_by_slug('industry');
$industry_child = get_categories(array('child_of' => $industry->term_id, 'hide_empty' => FALSE));

?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('#explore-button').className += ' active-nav';
        document.querySelector('#explore-nav').className += ' active-nav';
    });
</script>

<section id="explore">
    <div class="container" style="margin-top:5rem">
        <div class="section-heading">
            <h3 class="explore-title">Trending</h3>
            <hr class="divider">
        </div>
        <amp-carousel class="treanding-carousel d-lg-none d-md-none" type="slides" controls height="400">
            <?php
            foreach ($get_trending as $val) {
                $trending_img = get_the_post_thumbnail_url($val);
                $trending_url = get_the_permalink($val);
                $trending_title = get_the_title($val);
                $type = get_post_type($val);
                ?>
                <div class="feed-card" style="height: 313px;">
                    <div class="single-thumbnail">
                        <amp-img src="<?php echo $trending_img; ?>" layout="fill" alt="<?php echo $val->ID; ?>"></amp-img>
                        <div class="fade"></div>
                        <a href="<?php echo $trending_url; ?>" class="feed-link" aria-label="<?php echo $trending_title; ?>">
                            <div class="feed-title">
                                <h3><?php echo $trending_title; ?></h3>

                                <p class="feed-subtitle">#<?php echo get_the_category($val)[0]->cat_name; ?></p>

                            </div>
                        </a>
                        <div class="feed-action">
                            <div class="feed-button">
                                <div class="feed-wrap">
                                    <div class="feed-button-in">
                                        <div class="atomic-heart">
                                            <?php if ($type == "post") { ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 41.817 37.171">
                                                    <path class="a" d="M3,31.878H14.616V27.232H3Zm15.1,0H29.716V27.232H18.1Zm15.1,0H44.817V27.232H33.2ZM3,41.171H7.646V36.524H3Zm9.293,0h4.646V36.524H12.293Zm9.293,0h4.646V36.524H21.585Zm9.293,0h4.646V36.524H30.878Zm9.293,0h4.646V36.524H40.171ZM3,22.585H21.585V17.939H3Zm23.232,0H44.817V17.939H26.232ZM3,4v9.293H44.817V4Z" transform="translate(-3 -4)" />
                                                </svg>
                                            <?php
                                            } else if ($type == "video") { ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 49.131 49.131">
                                                    <path class="a" d="M26.566,2A24.566,24.566,0,1,0,51.131,26.566,24.574,24.574,0,0,0,26.566,2ZM21.652,37.62V15.511L36.392,26.566Z" transform="translate(-2 -2)" />
                                                </svg>
                                            <?php
                                            } else if ($type == "podcast") { ?>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 48.491 39.675">
                                                    <path class="a" d="M45.083,3H5.408A4.421,4.421,0,0,0,1,7.408V38.266a4.421,4.421,0,0,0,4.408,4.408H45.083a4.421,4.421,0,0,0,4.408-4.408V7.408A4.421,4.421,0,0,0,45.083,3Zm0,35.266H5.408V7.408H45.083ZM16.429,29.45a6.568,6.568,0,0,1,8.817-6.216V9.612H36.266v4.408H29.654v15.5a6.613,6.613,0,0,1-13.225-.066Z" transform="translate(-1 -3)" />
                                                </svg>
                                            <?php
                                            } else if ($type == "amp_story") { ?>
                                                <svg id="amp-stories" viewBox="0 0 36 32" style="    transform: translate(0.5px, 2px) scale(0.6);">
                                                    <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                                </svg>

                                            <?php
                                            } ?>
                                        </div>
                                    </div>
                                    <div class="count">
                                        <?php if ($type == "post") {
                                            echo "Insight";
                                        } else if ($type == "video") {
                                            echo "Video";
                                        } else if ($type == "podcast") {
                                            echo "Podcast";
                                        } else if ($type == "amp_story") {
                                            echo "Story";
                                        }  ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </amp-carousel>
    </div>

    <!-- Business model -->
    <?php if (!empty($business_child)) { ?>
        <section id="business_model">
            <div class="container cat-section" style="margin-bottom: 2rem;padding-right:0px;padding-left:0px;">
                <div class="section-heading" style="margin:0px 0px 30px 0px">
                    <div style="padding-left:15px;">
                        <h3 class="explore-title"><?php echo get_cat_name($business->term_id); ?></h3>
                        <hr>
                    </div>

                    <amp-carousel class="sub-cat" type="carousel" controls height="150">
                        <div class="sub-cat-inner-container">
                            <?php
                            foreach ($business_child as $val) {
                                $post_img = get_field('featured_image', $val);
                                ?>
                                <a href="<?php echo get_category_link($val->term_id); ?>" aria-label="Bussiness Model">
                                    <div class="sub-cat-img">
                                        <amp-img src="<?php echo $post_img['url']; ?>" width="140" height="140" alt="<?php echo $val->ID; ?>"></amp-img>
                                        <p><?php echo $val->name; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </amp-carousel>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- careers section -->
    <?php if (!empty($careers_child)) { ?>
        <section id="careers_model">
            <div class="container cat-section" style="margin-bottom: 2rem;padding-right:0px;padding-left:0px;">
                <div class="section-heading" style="margin:0px 0px 30px 0px">
                    <div style="padding-left:15px;">
                        <h3 class="explore-title"><?php echo get_cat_name($careers->term_id); ?></h3>
                        <hr>
                    </div>

                    <amp-carousel class="sub-cat" type="carousel" controls height="150">
                        <div class="sub-cat-inner-container">
                            <?php
                            foreach ($careers_child as $val) {
                                $post_img = get_field('featured_image', $val);
                                ?>
                                <a href="<?php echo get_category_link($val->term_id); ?>" aria-label="Careers Section">
                                    <div class="sub-cat-img">
                                        <amp-img src="<?php echo $post_img['url']; ?>" width="140" height="140" alt="<?php echo $val->ID; ?>"></amp-img>
                                        <p><?php echo $val->name; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </amp-carousel>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- companies section -->
    <?php if (!empty($companies_child)) { ?>
        <section id="companies_model">
            <div class="container cat-section" style="margin-bottom: 2rem;padding-right:0px;padding-left:0px;">
                <div class="section-heading" style="margin:0px 0px 30px 0px">
                    <div style="padding-left:15px;">
                        <h3 class="explore-title"><?php echo get_cat_name($companies->term_id); ?></h3>
                        <hr>
                    </div>

                    <amp-carousel class="sub-cat" type="carousel" controls height="150">
                        <div class="sub-cat-inner-container">
                            <?php
                            foreach ($companies_child as $val) {
                                $post_img = get_field('featured_image', $val);
                                ?>
                                <a href="<?php echo get_category_link($val->term_id); ?>" aria-label="Companies Section">
                                    <div class="sub-cat-img">
                                        <amp-img src="<?php echo $post_img['url']; ?>" width="140" height="140" alt="<?php echo $val->ID; ?>"></amp-img>
                                        <p><?php echo $val->name; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </amp-carousel>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- technology section -->
    <?php if (!empty($technology_child)) { ?>
        <section id="technology_model">
            <div class="container cat-section" style="margin-bottom: 2rem;padding-right:0px;padding-left:0px;">
                <div class="section-heading" style="margin:0px 0px 30px 0px">
                    <div style="padding-left:15px;">
                        <h3 class="explore-title"><?php echo get_cat_name($technology->term_id); ?></h3>
                        <hr>
                    </div>

                    <amp-carousel class="sub-cat" type="carousel" controls height="150">
                        <div class="sub-cat-inner-container">
                            <?php
                            foreach ($technology_child as $val) {
                                $post_img = get_field('featured_image', $val);
                                ?>
                                <a href="<?php echo get_category_link($val->term_id); ?>" aria-label="Technology Section">
                                    <div class="sub-cat-img">
                                        <amp-img src="<?php echo $post_img['url']; ?>" width="140" height="140" alt="<?php echo $val->ID; ?>"></amp-img>
                                        <p><?php echo $val->name; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </amp-carousel>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- events section -->
    <?php if (!empty($events_child)) { ?>
        <section id="events_model">
            <div class="container cat-section" style="margin-bottom: 2rem;padding-right:0px;padding-left:0px;">
                <div class="section-heading" style="margin:0px 0px 30px 0px">
                    <div style="padding-left:15px;">
                        <h3 class="explore-title"><?php echo get_cat_name($events->term_id); ?></h3>
                        <hr>
                    </div>

                    <amp-carousel class="sub-cat" type="carousel" controls height="150">
                        <div class="sub-cat-inner-container">
                            <?php
                            foreach ($events_child as $val) {
                                $post_img = get_field('featured_image', $val);
                                ?>
                                <a href="<?php echo get_category_link($val->term_id); ?>" aria-label="Events Section">
                                    <div class="sub-cat-img">
                                        <amp-img src="<?php echo $post_img['url']; ?>" width="140" height="140" alt="<?php echo $val->ID; ?>"></amp-img>
                                        <p><?php echo $val->name; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </amp-carousel>
                </div>
            </div>
        </section>
    <?php } ?>


    <!-- exclusive section -->
    <?php if (!empty($exclusive_child)) { ?>
        <section id="exclusive_model">
            <div class="container cat-section" style="margin-bottom: 2rem;padding-right:0px;padding-left:0px;">
                <div class="section-heading" style="margin:0px 0px 30px 0px">
                    <div style="padding-left:15px;">
                        <h3 class="explore-title"><?php echo get_cat_name($exclusive->term_id); ?></h3>
                        <hr>
                    </div>

                    <amp-carousel class="sub-cat" type="carousel" controls height="150">
                        <div class="sub-cat-inner-container">
                            <?php
                            foreach ($exclusive_child as $val) {
                                $post_img = get_field('featured_image', $val);
                                ?>
                                <a href="<?php echo get_category_link($val->term_id); ?>" aria-label="Exclusive Section">
                                    <div class="sub-cat-img">
                                        <amp-img src="<?php echo $post_img['url']; ?>" width="140" height="140" alt="<?php echo $val->ID; ?>"></amp-img>
                                        <p><?php echo $val->name; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </amp-carousel>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- geography section -->
    <?php if (!empty($geography_child)) { ?>
        <section id="geography_model">
            <div class="container cat-section" style="margin-bottom: 2rem;padding-right:0px;padding-left:0px;">
                <div class="section-heading" style="margin:0px 0px 30px 0px">
                    <div style="padding-left:15px;">
                        <h3 class="explore-title"><?php echo get_cat_name($geography->term_id); ?></h3>
                        <hr>
                    </div>

                    <amp-carousel class="sub-cat" type="carousel" controls height="150">
                        <div class="sub-cat-inner-container">
                            <?php
                            foreach ($geography_child as $val) {
                                $post_img = get_field('featured_image', $val);
                                ?>
                                <a href="<?php echo get_category_link($val->term_id); ?>" aria-label="Geography Section">
                                    <div class="sub-cat-img">
                                        <amp-img src="<?php echo $post_img['url']; ?>" width="140" height="140" alt="<?php echo $val->ID; ?>"></amp-img>
                                        <p><?php echo $val->name; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </amp-carousel>
                </div>
            </div>
        </section>
    <?php } ?>

    <!-- industry section -->
    <?php if (!empty($industry_child)) { ?>
        <section id="industry_model">
            <div class="container cat-section" style="margin-bottom: 2rem;padding-right:0px;padding-left:0px;">
                <div class="section-heading" style="margin:0px 0px 30px 0px">
                    <div style="padding-left:15px;">
                        <h3 class="explore-title"><?php echo get_cat_name($industry->term_id); ?></h3>
                        <hr>
                    </div>

                    <amp-carousel class="sub-cat" type="carousel" controls height="150">
                        <div class="sub-cat-inner-container">
                            <?php
                            foreach ($industry_child as $val) {
                                $post_img = get_field('featured_image', $val);
                                ?>
                                <a href="<?php echo get_category_link($val->term_id); ?>" aria-label="Industry Section">
                                    <div class="sub-cat-img">
                                        <amp-img src="<?php echo $post_img['url']; ?>" width="140" height="140" alt="<?php echo $val->ID; ?>"></amp-img>
                                        <p><?php echo $val->name; ?></p>
                                    </div>
                                </a>
                            <?php } ?>
                        </div>
                    </amp-carousel>
                </div>
            </div>
        </section>
    <?php } ?>
</section>
<?php get_footer(); ?>
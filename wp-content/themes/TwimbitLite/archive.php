<?php
get_header();
$args = array(
    'numberposts' => 0,
    'category' => get_the_category()[0]->term_id,
    'orderby' => 'date',
    'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('video', 'post', 'podcast', 'amp_story'),
    'suppress_filters' => true,
);
$get_sub_cat = get_posts($args);

// $post_args = array(
//     'numberposts' => 1,
//     'category' => array('business_model'),
//     'orderby' => 'date',
//     'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
//     'include' => array(),
//     'exclude' => array(),
//     'meta_key' => '',
//     'meta_value' => '',
//     'post_type' => array('video', 'post', 'podcast', 'amp_story'),
//     'suppress_filters' => true,
// );
// $get_post = get_posts($post_args);
?>

<!-- Top Category -->
<section id="cards-feed" class="mb4" style="margin-top:4.5rem">
    <div class="container mt2">
        <div class="col-12">
            <div class="feed-card">
                <div class="single-thumbnail">
                    <amp-img src="<?php echo get_field('featured_image', get_the_category()[0])['url']; ?>"></amp-img>
                    <div class="fade"></div>
                    <div class="feed-link">
                        <div class="feed-title" style="bottom:auto">
                            <h3><?php echo get_the_category()[0]->name; ?></h3>

                            <p class="feed-subtitle"><?php echo get_the_category()[0]->description; ?></p>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<?php print_r(get_the_category());
?>
<!-- Remaining categories -->
<section id="cards-feed" class="mb4">
    <div class="container mt2" style="margin-bottom: 6rem;">
        <div class="lg-col-7 md-col-6 sm-col-7 xs-col-12">
            <?php
            foreach (array_slice($get_sub_cat, 0) as $val) {
                $post_img = get_the_post_thumbnail_url($val);
                $post_url = get_the_permalink($val);
                $post_title = get_the_title($val);
                ?>
                <div class="feed-card">
                    <div class="single-thumbnail">
                        <amp-img src="<?php print $post_img; ?>"></amp-img>
                        <div class="fade"></div>
                        <a href="<?php print $post_url; ?>" class="feed-link">
                            <div class="feed-title" style="bottom:auto">
                                <h3><?php print $post_title; ?></h3>

                                <p class="feed-subtitle">#5: Lay off the social media.</p>

                            </div>
                        </a>

                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
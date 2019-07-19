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
            <div class="feed-card feed-card-archive">
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
<?php //print_r(get_the_category());
?>


<div class="archive-filter-card-container container">
    <!-- Filter section -->
    <section id="filter" style="flex: 1 1 150px;margin-right:20px;">
        <div class="menu">
            <ul>
                <li class="menu-item">
                    <button class="tablinks active" onclick="toggler(event,'All')"> All </button>
                </li>
                <li class="menu-item">
                    <button class="tablinks" onclick="toggler(event,'post')"> Insights </button>
                </li>
                <li class="menu-item">
                    <button class="tablinks" onclick="toggler(event,'video')"> Videos </button>
                </li>
                <li class="menu-item">
                    <button class="tablinks" onclick="toggler(event,'podcast')"> Podcasts </button>
                </li>
                <li class="menu-item">
                    <button class="tablinks" onclick="toggler(event,'amp_story')"> Stories </button>
                </li>



                </li>
            </ul>
        </div>
    </section>

    <!-- Remaining categories -->
    <section id="cards-feed" class="mb4" style="flex: 3 1 500px;">
        <div class="flex" style="flex-wrap:wrap">
            <div class="feed-card-container">
                <?php
                foreach (array_slice($get_sub_cat, 0) as $val) {
                    $post_img = get_the_post_thumbnail_url($val);
                    $post_url = get_the_permalink($val);
                    $post_title = get_the_title($val);
                    $type = get_post_type($val);
                    ?>
                    <div class="feed-card feed-toggle fade-animate <?php echo $type ?>">
                        <div class="single-thumbnail">
                            <amp-img src="<?php echo $post_img; ?>"></amp-img>
                            <div class="fade"></div>
                            <a href="<?php echo $post_url; ?>" class="feed-link">
                                <div class="feed-title">
                                    <h3><?php echo $post_title; ?></h3>

                                    <p class="feed-subtitle">#5: Lay off the social media.</p>

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
            </div>

        </div>
    </section>
</div>
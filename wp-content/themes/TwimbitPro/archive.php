<?php
get_header();

$post_args = array(
    'numberposts' => 5,
    'cat' => get_queried_object()->term_id,
    'orderby' => 'date',
    'order' => 'DESC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('post'),
    'suppress_filters' => true,
);
$get_post_feed = get_posts($post_args);

$video_args = array(
    'numberposts' => 5,
    'cat' => get_queried_object()->term_id,
    'orderby' => 'date',
    'order' => 'DESC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('video'),
    'suppress_filters' => true,
);
$get_video = get_posts($video_args);

$podcast_args = array(
    'numberposts' => 5,
    'cat' => get_queried_object()->term_id,
    'orderby' => 'date',
    'order' => 'DESC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('podcast'),
    'suppress_filters' => true,
);
$get_podcast = get_posts($podcast_args);

$story_args = array(
    'numberposts' => 5,
    'cat' => get_queried_object()->term_id,
    'orderby' => 'date',
    'order' => 'DESC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('amp_story'),
    'suppress_filters' => true,
);
$get_story = get_posts($story_args);

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
<section id="" class="mb1" style="margin-top:4.5rem">
    <div class="container mt2">
        <div class="col-12">
            <div class="feed-card feed-card-archive" style="margin-bottom:0px;">
                <div class="single-thumbnail">
                    <amp-img layout="fill" src="<?php echo get_field('featured_image', get_queried_object())['url']; ?>"></amp-img>
                    <div class="fade"></div>
                    <div class="feed-link">
                        <div class="feed-title" style="bottom:auto">
                            <h3><?php echo single_cat_title(); ?></h3>

                            <p class="feed-subtitle" style="line-height: 1.4;font-size:14px"><?php echo the_archive_description(); ?></p>

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
    <section id="filter">
        <div class="">
            <div class="col-12" style="min-width: fit-content;">
                <div class="menu">
                    <ul>
                        <li class="menu-item">
                            <button class="tablinks active" on="tap:video.hide(),insight.show(),podcast.hide(),story.hide()" onclick="toggler(event,'insight')" name="post-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 41.817 37.171">
                                    <path class="a" d="M3,31.878H14.616V27.232H3Zm15.1,0H29.716V27.232H18.1Zm15.1,0H44.817V27.232H33.2ZM3,41.171H7.646V36.524H3Zm9.293,0h4.646V36.524H12.293Zm9.293,0h4.646V36.524H21.585Zm9.293,0h4.646V36.524H30.878Zm9.293,0h4.646V36.524H40.171ZM3,22.585H21.585V17.939H3Zm23.232,0H44.817V17.939H26.232ZM3,4v9.293H44.817V4Z" transform="translate(-3 -4)" />
                                </svg><br> INSIGHTS</button>
                        </li>
                        <li class="menu-item">
                            <button class="tablinks" onclick="toggler(event,'video')" on="tap:video.show(),insight.hide(),podcast.hide(),story.hide()" name="video-toggle"> <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 49.131 49.131">
                                    <path class="a" d="M26.566,2A24.566,24.566,0,1,0,51.131,26.566,24.574,24.574,0,0,0,26.566,2ZM21.652,37.62V15.511L36.392,26.566Z" transform="translate(-2 -2)" />
                                </svg><br>VIDEOS</button>
                        </li>
                        <li class="menu-item">
                            <button class="tablinks" onclick="toggler(event,'podcast')" on="tap:video.hide(),insight.hide(),podcast.show(),story.hide()" name="podcast-toggle"> <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 48.491 39.675">
                                    <path class="a" d="M45.083,3H5.408A4.421,4.421,0,0,0,1,7.408V38.266a4.421,4.421,0,0,0,4.408,4.408H45.083a4.421,4.421,0,0,0,4.408-4.408V7.408A4.421,4.421,0,0,0,45.083,3Zm0,35.266H5.408V7.408H45.083ZM16.429,29.45a6.568,6.568,0,0,1,8.817-6.216V9.612H36.266v4.408H29.654v15.5a6.613,6.613,0,0,1-13.225-.066Z" transform="translate(-1 -3)" />
                                </svg><br>PODCASTS</button>
                        </li>
                        <li class="menu-item">
                            <button class="tablinks" on="tap:video.hide(),insight.hide(),podcast.hide(),story.show()" onclick="toggler(event,'story')" name="story-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 36 32">
                                    <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                </svg><br>STORIES</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Remaining categories -->
    <section id="cards-feed" class="mb4" style="flex: 3 1 500px;">
        <div class="flex" style="flex-wrap:wrap">
            <div class="feed-card-container">
                <div>
                    <!--            Fetching the post-->
                    <div id="insight" class="tabcontent">
                        <?php
                        foreach ($get_post_feed as $val) {
                            $post_img = get_the_post_thumbnail_url($val, 'medium_large');
                            $post_url = get_the_permalink($val);
                            $post_title = get_the_title($val);
                            $type = get_post_type($val);
                            $category =  get_the_category_by_ID($val);
                            ?>
                        <div class="feed-card feed-toggle fade-animate">
                            <div class="single-thumbnail">
                                <amp-img src="<?php echo $post_img; ?>" layout="fill" alt="<?php echo $val->ID; ?>"></amp-img>
                                <div class="fade"></div>
                                <a href="<?php echo $post_url; ?>" class="feed-link ">
                                    <div class="feed-title">
                                        <h3><?php echo $post_title; ?></h3>

                                        <p class="feed-subtitle">#<?php echo get_the_category($val)[0]->cat_name; ?></p>

                                    </div>
                                </a>
                                <div class="feed-action">
                                    <div class="feed-button">
                                        <div class="feed-wrap">
                                            <!--                                    adding icon-->
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
                                                    <svg viewBox="0 0 36 32" style="    transform: translate(0.5px, 2px) scale(0.6);">
                                                        <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                                    </svg>

                                                    <?php
                                                        } ?>
                                                </div>
                                            </div>
                                            <!-- adding type-->
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

                    <!--            Fetching the videos-->
                    <div id="video" class="tabcontent" hidden>
                        <?php
                        foreach ($get_video as $val) {
                            $post_img = get_the_post_thumbnail_url($val, 'medium_large');
                            $post_url = get_the_permalink($val);
                            $post_title = get_the_title($val);
                            $type = get_post_type($val);
                            $category =  get_the_category_by_ID($val);
                            ?>
                        <div class="feed-card feed-toggle fade-animate">
                            <div class="single-thumbnail">
                                <amp-img src="<?php echo $post_img; ?>" layout="fill" alt="<?php echo $val->ID; ?>"></amp-img>
                                <div class="fade"></div>
                                <a href="<?php echo $post_url; ?>" class="feed-link ">
                                    <div class="feed-title">
                                        <h3><?php echo $post_title; ?></h3>

                                        <p class="feed-subtitle">#<?php echo get_the_category($val)[0]->cat_name; ?></p>

                                    </div>
                                </a>
                                <div class="feed-action">
                                    <div class="feed-button">
                                        <div class="feed-wrap">
                                            <!--                                    adding icon-->
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
                                                    <svg viewBox="0 0 36 32" style="    transform: translate(0.5px, 2px) scale(0.6);">
                                                        <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                                    </svg>

                                                    <?php
                                                        } ?>
                                                </div>
                                            </div>
                                            <!-- adding type-->
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

                    <!--            Fetching the podcast-->
                    <div id="podcast" class="tabcontent" hidden>
                        <?php
                        foreach ($get_podcast as $val) {
                            $post_img = get_the_post_thumbnail_url($val, 'medium_large');
                            $post_url = get_the_permalink($val);
                            $post_title = get_the_title($val);
                            $type = get_post_type($val);
                            $category =  get_the_category_by_ID($val);
                            ?>
                        <div class="feed-card feed-toggle fade-animate">
                            <div class="single-thumbnail">
                                <amp-img src="<?php echo $post_img; ?>" layout="fill" alt="<?php echo $val->ID; ?>"></amp-img>
                                <div class="fade"></div>
                                <a href="<?php echo $post_url; ?>" class="feed-link ">
                                    <div class="feed-title">
                                        <h3><?php echo $post_title; ?></h3>

                                        <p class="feed-subtitle">#<?php echo get_the_category($val)[0]->cat_name; ?></p>

                                    </div>
                                </a>
                                <div class="feed-action">
                                    <div class="feed-button">
                                        <div class="feed-wrap">
                                            <!--                                    adding icon-->
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
                                                    <svg viewBox="0 0 36 32" style="    transform: translate(0.5px, 2px) scale(0.6);">
                                                        <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                                    </svg>

                                                    <?php
                                                        } ?>
                                                </div>
                                            </div>
                                            <!-- adding type-->
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

                    <!--            Fetching the story-->
                    <div id="story" class="tabcontent" hidden>
                        <?php
                        foreach ($get_story as $val) {
                            $post_img = get_the_post_thumbnail_url($val, 'medium_large');
                            $post_url = get_the_permalink($val);
                            $post_title = get_the_title($val);
                            $type = get_post_type($val);
                            $category =  get_the_category_by_ID($val);
                            ?>
                        <div class="feed-card feed-toggle fade-animate">
                            <div class="single-thumbnail">
                                <amp-img src="<?php echo $post_img; ?>" layout="fill" alt="<?php echo $val->ID; ?>"></amp-img>
                                <div class="fade"></div>
                                <a href="<?php echo $post_url; ?>" class="feed-link ">
                                    <div class="feed-title">
                                        <h3><?php echo $post_title; ?></h3>

                                        <p class="feed-subtitle">#<?php echo get_the_category($val)[0]->cat_name; ?></p>

                                    </div>
                                </a>
                                <div class="feed-action">
                                    <div class="feed-button">
                                        <div class="feed-wrap">
                                            <!--                                    adding icon-->
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
                                                    <svg viewBox="0 0 36 32" style="    transform: translate(0.5px, 2px) scale(0.6);">
                                                        <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                                    </svg>

                                                    <?php
                                                        } ?>
                                                </div>
                                            </div>
                                            <!-- adding type-->
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
            </div>

        </div>
    </section>
</div>

<?php get_footer(); ?>
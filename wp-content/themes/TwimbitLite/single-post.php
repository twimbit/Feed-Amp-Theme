<?php

/*
     * The template for displaying all audio template
     *
     * Template Name:posts

*/
get_header();
global $post;
$current_post = $post; // remember the current post

// $post = $current_post;
// $post_args = array(
//     'orderby' => 'date',
//     'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
//     'include' => array(get_next_post()->ID, get_next_post(get_next_post()->ID)),
//     'exclude' => array(get_the_ID()),
//     'meta_key' => '',
//     'meta_value' => '',
//     'post_type' => array('post'),
//     'suppress_filters' => true,
// );
// $get_post = get_posts($post_args);


$mobile_post = array(
    'numberposts' => 0,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(get_the_ID()),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('post'),
    'suppress_filters' => true,
);
$get_mobile_post = get_posts($mobile_post);
$category = get_the_category();

// $category = get_the_category();
// $firstCategory = $category[0]->cat_name;
?>

<?php foreach ($get_mobile_post as $val) { ?>

    <section class="featured-image md-hide lg-hide" style="padding: 0px;background-image:url('<?php echo the_post_thumbnail_url(); ?>');">
        <?php $post_img = get_the_post_thumbnail_url($val);
        $post_url = get_the_permalink($val);
        $post_title = get_the_title($val);
        $type = get_post_type($val);
        $category =  get_the_category_by_ID($val); ?>
        <div class="single-thumbnail">
            <div class="fade">
            </div>
            <div class="featured-image-text-container">
                <div class="featured-image-text xs-col-12 sm-col-8 md-col-7 lg-col-6">
                    <a><?php if ($type == "post") {
                            echo "Insight";
                        } else if ($type == "video") {
                            echo "Video";
                        } else if ($type == "podcast") {
                            echo "Podcast";
                        } else if ($type == "amp_story") {
                            echo "Story";
                        }  ?></a href="#">
                    <h2><?php echo $post_title; ?></h2>
                    <!-- <h6 style="color: #f5f5f5" class="mt2"><?php //the_date(); 
                                                                ?></h6> -->
                    <h6 style="color: #f5f5f5;margin-top:6px;">by <?php the_author(); ?></h6>
                    <h6><a href="<?php echo get_category_link($val); ?>" style="font-size:0.76rem">#<?php echo $category[0]->name; ?></a>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <section class=" single-content md-hide lg-hide">
        <div class="single-content-div">
            <section class="post-content">
                <div class="xs-col-12 sm-col-7 md-col-6 lg-col-5 mt4 cont">
                    <div class="social lg-hide md-hide" style="margin-left:auto;">
                        <amp-social-share class="social1" height="30px" width="30px" type="facebook"></amp-social-share>
                        <amp-social-share class=social1" height="30px" width="30px" type="linkedin"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="twitter"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="whatsapp"></amp-social-share>
                    </div>
                    <?php the_content(); ?>
                </div>
                <div class="xs-col-12 sm-col-2 md-col-2 lg-col-2 mt4 ml2 sm-hide xs-hide">
                    <div class="social">
                        <amp-social-share class="social1" height="30px" width="30px" type="facebook"></amp-social-share>
                        <amp-social-share class=social1" height="30px" width="30px" type="linkedin"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="twitter"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="whatsapp"></amp-social-share>
                    </div>
                </div>
            </section>
        </div>

    </section>

<?php } ?>




<section class="featured-image xs-hide sm-hide" style="padding: 0px;background-image:url('<?php echo the_post_thumbnail_url(); ?>');">
    <?php while (have_posts()) {
        the_post();
        $type = get_post_type(); ?>
        <div class="single-thumbnail">
            <div class="fade">
            </div>
            <div class="featured-image-text-container">
                <div class="featured-image-text xs-col-12 sm-col-8 md-col-7 lg-col-6">
                    <a><?php if ($type == "post") {
                            echo "Insight";
                        } else if ($type == "video") {
                            echo "Video";
                        } else if ($type == "podcast") {
                            echo "Podcast";
                        } else if ($type == "amp_story") {
                            echo "Story";
                        }  ?></a href="#">
                    <h2><?php the_title(); ?></h2>
                    <!-- <h6 style="color: #f5f5f5" class="mt2"><?php //the_date(); 
                                                                ?></h6> -->
                    <h6 style="color: #f5f5f5;margin-top:6px;">by <?php the_author(); ?></h6>
                    <h6><a href="<?php echo get_category_link($category[0]->term_id); ?>" style="font-size:0.76rem">#<?php echo $category[0]->name; ?></a>
                    </h6>
                </div>
            </div>
        </div>
    </section>

    <section class=" single-content xs-hide md-hide">
        <div class="single-content-div">
            <section class="post-content">
                <div class="xs-col-12 sm-col-3 md-col-3 lg-col-2 mt4 mr2  xs-hide" style="margin-right:50px;">
                    <div class="pre-next-dialog flex" style="top:10%;">
                        <div class="pre-next-dialog-content">
                            <h2 style="flex:1;color: #f16c70;">Up next</h2>
                            <?php $taxonomy = "post";
                            for ($i = 1; $i <= 2; $i++) {
                                $post = get_adjacent_post(); // this uses $post->ID
                                $post_title = get_the_title();
                                $post_permalink = get_the_permalink();
                                if (!empty($post)) { ?>
                                    <a href="<?php echo $post_permalink; ?>">
                                        <p style="flex:2"><?php echo $post_title; ?></p>
                                    </a>
                                <?php } else {
                                    $first_post =  get_posts(array(
                                        'numberposts' => 1,
                                        'post_type' => array('post'),
                                        'order' => 'DESC',
                                    ))[0];
                                    ?>
                                    <a href="<?php echo get_the_permalink($first_post); ?>">
                                        <p style="flex:2"><?php echo get_the_title($first_post); ?></p>
                                    </a>

                                    <?php break;
                                }
                                ?>
                            <?php
                            }
                            $post = $current_post; ?>
                        </div>
                    </div>
                </div>
                <div class="xs-col-12 sm-col-7 md-col-6 lg-col-5 mt4 cont">
                    <div class="social lg-hide md-hide" style="margin-left:auto;">
                        <amp-social-share class="social1" height="30px" width="30px" type="facebook"></amp-social-share>
                        <amp-social-share class=social1" height="30px" width="30px" type="linkedin"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="twitter"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="whatsapp"></amp-social-share>
                    </div>
                    <?php the_content(); ?>
                </div>
                <div class="xs-col-12 sm-col-2 md-col-2 lg-col-2 mt4 ml2 sm-hide xs-hide">
                    <div class="social">
                        <amp-social-share class="social1" height="30px" width="30px" type="facebook"></amp-social-share>
                        <amp-social-share class=social1" height="30px" width="30px" type="linkedin"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="twitter"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="whatsapp"></amp-social-share>
                    </div>
                </div>
            </section>
        </div>
    <?php } ?>
</section>

<!-- More to explore section -->
<section id="more-to-explore" style="margin-top:3rem">
    <div class="container">
        <div class="more-to-explore-heading">
            <h3 style="color: #f16c70;">More to explore</h3>
            <hr>
        </div>
        <div class="more-to-explore-card-container">
            <?php
            for ($i = 1; $i <= 2; $i++) {
                $post = get_adjacent_post();
                $trending_img = get_the_post_thumbnail_url();
                $trending_url = get_the_permalink();
                $trending_title = get_the_title();
                $type = get_post_type();
                if (!empty($post)) { ?>
                    <div class="feed-card" style="height: 313px;width:49%">
                        <div class="single-thumbnail">
                            <amp-img src="<?php echo $trending_img; ?>"></amp-img>
                            <div class="fade"></div>
                            <a href="<?php echo $trending_url; ?>" class="feed-link">
                                <div class="feed-title">
                                    <h3><?php echo $trending_title; ?></h3>

                                    <p class="feed-subtitle">#<?php echo get_the_category()[0]->cat_name; ?></p>

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
                <?php } else {
                    $first_post =  get_posts(array(
                        'numberposts' => 1,
                        'post_type' => array('post'),
                        'order' => 'DESC',
                    ))[0];

                    $first_post_type = get_post_type($first_post);
                    ?>
                    <div class="feed-card" style="height: 313px;width:49%">
                        <div class="single-thumbnail">
                            <amp-img src="<?php echo get_the_post_thumbnail_url($first_post); ?>"></amp-img>
                            <div class="fade"></div>
                            <a href="<?php echo get_the_permalink($first_post); ?>" class="feed-link">
                                <div class="feed-title">
                                    <h3><?php echo get_the_title($first_post); ?></h3>

                                    <p class="feed-subtitle">#<?php echo get_the_category()[0]->cat_name; ?></p>

                                </div>
                            </a>
                            <div class="feed-action">
                                <div class="feed-button">
                                    <div class="feed-wrap">
                                        <div class="feed-button-in">
                                            <div class="atomic-heart">
                                                <?php if ($first_post_type == "post") { ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 41.817 37.171">
                                                        <path class="a" d="M3,31.878H14.616V27.232H3Zm15.1,0H29.716V27.232H18.1Zm15.1,0H44.817V27.232H33.2ZM3,41.171H7.646V36.524H3Zm9.293,0h4.646V36.524H12.293Zm9.293,0h4.646V36.524H21.585Zm9.293,0h4.646V36.524H30.878Zm9.293,0h4.646V36.524H40.171ZM3,22.585H21.585V17.939H3Zm23.232,0H44.817V17.939H26.232ZM3,4v9.293H44.817V4Z" transform="translate(-3 -4)" />
                                                    </svg>
                                                <?php
                                                } else if ($first_post_type == "video") { ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 49.131 49.131">
                                                        <path class="a" d="M26.566,2A24.566,24.566,0,1,0,51.131,26.566,24.574,24.574,0,0,0,26.566,2ZM21.652,37.62V15.511L36.392,26.566Z" transform="translate(-2 -2)" />
                                                    </svg>
                                                <?php
                                                } else if ($first_post_type == "podcast") { ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 48.491 39.675">
                                                        <path class="a" d="M45.083,3H5.408A4.421,4.421,0,0,0,1,7.408V38.266a4.421,4.421,0,0,0,4.408,4.408H45.083a4.421,4.421,0,0,0,4.408-4.408V7.408A4.421,4.421,0,0,0,45.083,3Zm0,35.266H5.408V7.408H45.083ZM16.429,29.45a6.568,6.568,0,0,1,8.817-6.216V9.612H36.266v4.408H29.654v15.5a6.613,6.613,0,0,1-13.225-.066Z" transform="translate(-1 -3)" />
                                                    </svg>
                                                <?php
                                                } else if ($first_post_type == "amp_story") { ?>
                                                    <svg id="amp-stories" viewBox="0 0 36 32" style="    transform: translate(0.5px, 2px) scale(0.6);">
                                                        <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                                    </svg>

                                                <?php
                                                } ?>
                                            </div>
                                        </div>
                                        <div class="count">
                                            <?php if ($first_post_type == "post") {
                                                echo "Insight";
                                            } else if ($first_post_type == "video") {
                                                echo "Video";
                                            } else if ($first_post_type == "podcast") {
                                                echo "Podcast";
                                            } else if ($first_post_type == "amp_story") {
                                                echo "Story";
                                            }  ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php break;
                }
            } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
<!-- <script>
    $(document).ready(function() {
        //$(".pre-next-dialog").hide();
        //$(".pre-next-dialog").css('opacity','0');
        // $(".pre-next-dialog").attr("style", "top:10% !important");
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (prevScrollpos > currentScrollPos) {
                document.querySelector(".ampstart-headerbar").style.top = "0";
            } else {
                document.querySelector(".ampstart-headerbar").style.top = "-70px";
            }
            prevScrollpos = currentScrollPos;
        }
        // $(window).scroll(function() {

        //     if ($(this).scrollTop() > 150 && $(this).scrollTop() < 450) {
        //         $(".pre-next-dialog").fadeOut(100);
        //         //$(".pre-next-dialog").fadeOut(200);


        //     } else if ($(this).scrollTop() > 450) {
        //         $(".pre-next-dialog").fadeIn(100);
        //         //$(".pre-next-dialog").fadeIn(200);
        //     }

        // });

    });
</script> -->
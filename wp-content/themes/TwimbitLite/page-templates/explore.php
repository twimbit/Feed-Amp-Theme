<?php

/**
 * Template Name: Explore template
 *
 * The template for the page builder full-width.
 *
 * It contains header, footer and 100% content width.
 *
 * @package Twimbit Lite
 */

$post_args = array(
    'numberposts' => 0,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('post'),
    'suppress_filters' => true,
);
$get_post = get_posts($post_args);


$trending = array(
    'numberposts' => 0,
    'category' => 0,
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
?>

<section id="explore">
    <div class="container">
        <div class="section-heading">
            <h1>Trending</h1>
            <hr>
        </div>
        <div class="section-heading-car">
            <amp-carousel class="section-heading-carousel d-lg-none d-md-none" type="slides" controls>
                <?php
                foreach ($get_trending as $val) {
                    $trending_img = get_the_post_thumbnail_url($val);
                    $trending_url = get_the_permalink($val);
                    $trending_title = get_the_title($val);
                    ?>
                    <div class="section-heading-carousel-div">
                        <img class="section-img-1" src="<?php
                                                        if ($trending_img) {
                                                            print $trending_img;
                                                        } else {
                                                            print content_url() . '/themes/TwimbitLite/src/placeholder.png';
                                                        }  ?>" alt="" class="placeholder-loader">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="card-title mbr-bold mbr-fonts-style display-2"><?php print $trending_title; ?></h5>
                                    <p class="card-text" style="font-style:italic"><?php print get_the_excerpt($val); ?></p>
                                </div>
                                <div class="col-5">
                                    <div class="card-badge ">
                                        <h2 class="align-center card-badge-text">
                                            <?php if (get_post_type($val) == "post") {
                                                print "Read";
                                            } else if (get_post_type($val) == "video") {
                                                print "Watch";
                                            } else if (get_post_type($val) == "podcast") {
                                                print "Listen";
                                            } else if (get_post_type($val) == "explore") {
                                                print "Explore";
                                            }  ?>
                                        </h2>
                                        <img src="<?php if (get_post_type($val) == "post") {
                                                        print content_url() . '/themes/TwimbitLite/src/read.svg';
                                                    } else if (get_post_type($val) == "video") {
                                                        print content_url() . '/themes/TwimbitLite/src/play.svg';
                                                    } else if (get_post_type($val) == "podcast") {
                                                        print content_url() . '/themes/TwimbitLite/src/podcast.svg';
                                                    } else if (get_post_type($val) == "explore") {
                                                        print content_url() . '/themes/TwimbitLite/src/timeline.svg';
                                                    }  ?>" alt="sdfdsf" class="img-cat">

                                    </div>
                                    <h2 class="category-caption">#Category</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </amp-carousel>
            <amp-carousel class="section-heading-carousel d-sm-none " type="carousel" controls>
                <?php
                foreach ($get_trending as $val) {
                    $trending_img = get_the_post_thumbnail_url($val);
                    $trending_url = get_the_permalink($val);
                    $trending_title = get_the_title($val);
                    ?>
                    <div class="section-heading-carousel-div">
                        <img class="section-img-1" src="<?php
                                                        if ($trending_img) {
                                                            print $trending_img;
                                                        } else {
                                                            print content_url() . '/themes/TwimbitLite/src/placeholder.png';
                                                        }  ?>" layout="responsive">

                        <div class="row">
                            <div class="col-md-7">
                                <h5 class="card-title mbr-bold mbr-fonts-style display-2 ml2"><?php print $trending_title; ?></h5>
                                <p class="card-text ml2" style="font-style:italic"><?php print get_the_excerpt($val); ?></p>
                            </div>
                            <div class="col-md-5">
                                <div class="card-badge ">
                                    <h2 class="align-center card-badge-text">
                                        <?php if (get_post_type($val) == "post") {
                                            print "Read";
                                        } else if (get_post_type($val) == "video") {
                                            print "Watch";
                                        } else if (get_post_type($val) == "podcast") {
                                            print "Listen";
                                        } else if (get_post_type($val) == "explore") {
                                            print "Explore";
                                        }  ?>
                                    </h2>
                                    <img src="<?php if (get_post_type($val) == "post") {
                                                    print content_url() . '/themes/TwimbitLite/src/read.svg';
                                                } else if (get_post_type($val) == "video") {
                                                    print content_url() . '/themes/TwimbitLite/src/play.svg';
                                                } else if (get_post_type($val) == "podcast") {
                                                    print content_url() . '/themes/TwimbitLite/src/podcast.svg';
                                                } else if (get_post_type($val) == "explore") {
                                                    print content_url() . '/themes/TwimbitLite/src/timeline.svg';
                                                }  ?>" alt="sdfdsf" class="img-cat">

                                </div>
                                <span class="category-caption">#Category</span>

                            </div>
                        </div>

                    </div>
                <?php } ?>

            </amp-carousel>
        </div>
        <div class="cat-section">
            <div class="section-heading" style="margin:30px 0px 30px 0px">
                <h1>Category</h1>
                <hr>
                <amp-carousel class="sub-cat" type="carousel" controls>
                    <?php
                    foreach ($get_post as $val) {
                        $post_img = get_the_post_thumbnail_url($val);
                        ?>
                        <div class="sub-cat-img">
                            <img src="<?php print $post_img; ?>" style="border-radius:10px;">
                            <p>Sub-category</p>
                        </div>
                    <?php } ?>
                </amp-carousel>
            </div>
            <div class="section-heading" style="margin:30px 0px 30px 0px">
                <h1>Category</h1>
                <hr>
                <amp-carousel class="sub-cat" type="carousel" controls>
                    <?php
                    foreach ($get_post as $val) {
                        $post_img = get_the_post_thumbnail_url($val);
                        ?>
                        <div class="sub-cat-img">
                            <img src="<?php print $post_img; ?>" style="border-radius:10px;">
                            <p>Sub-category</p>
                        </div>
                    <?php } ?>
                </amp-carousel>
            </div>
            <div class="section-heading" style="margin:30px 0px 30px 0px">
                <h1>Category</h1>
                <hr>
                <amp-carousel class="sub-cat" type="carousel" controls>
                    <?php
                    foreach ($get_post as $val) {
                        $post_img = get_the_post_thumbnail_url($val);
                        ?>
                        <div class="sub-cat-img">
                            <img src="<?php print $post_img; ?>" style="border-radius:10px;">
                            <p>Sub-category</p>
                        </div>
                    <?php } ?>
                </amp-carousel>
            </div>
        </div>
    </div>
</section>
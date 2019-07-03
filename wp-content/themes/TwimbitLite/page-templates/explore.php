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
    'post_type' => array('video', 'post', 'podcast', 'explore'),
    'suppress_filters' => true,
);
$get_post = get_posts($post_args);
?>

<section id="explore">
    <div id="sample3-tabpanel2" role="tabpanel" aria-labelledby="sample3-tab2" option selected style="background-color:#FAFAFA;">
        <div class="section-heading" style="margin:30px 0px 30px 20px">
            <h1>Trending</h1>
            <hr>
        </div>
        <div class="container">
            <div style="border-radius:10px;" class="section-heading-car">
                <amp-carousel class="section-heading-carousel" type="slides" controls>
                    <?php
                    foreach ($get_post as $val) {
                        $post_img = get_the_post_thumbnail_url($val);
                        $post_url = get_the_permalink($val);
                        $post_title = get_the_title($val);
                        ?>
                        <div class="mb3" style="border-radius:10px !important;">
                            <img style="border-radius:10px !important;
						 	        height: 300px; " src="<?php
                                                            if ($post_img) {
                                                                print $post_img;
                                                            } else {
                                                                print content_url() . '/themes/TwimbitLite/src/placeholder.png';
                                                            }  ?>" layout="responsive" width="348.5446009389671" height="232" alt="" class="placeholder-loader">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-7">
                                        <h5 class="card-title mbr-bold mbr-fonts-style display-2"><?php print $post_title; ?></h5>
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

            </div>
        </div>
        <div class="section-heading" style="margin:30px 0px 30px 20px">
            <h1 class="test"></h1>

        </div>
    </div>
</section>
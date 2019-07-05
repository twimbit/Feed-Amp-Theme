<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header();

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

$category = get_the_category();
$firstCategory = $category[0]->cat_name;
?>

<section class="featured-image" style="padding: 0px;background-image:url('<?php print the_post_thumbnail_url(); ?>'); height:300px">

    <div class="background-overlay">
    </div>
    <div class="featured-image-text">
        <h2><?php the_title(); ?></h2>
    </div>

</section>

<section class="single-content" style="padding: 0px;">
    <div class="single-content-div ml2 mr2">
        <?php while (have_posts()) {
            the_post(); ?>
            <section class="single-date-name" style="padding: 0px;">
                <div class="row mt2">
                    <div class="col">
                        <span>
                            <svg width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M192 1664h288v-288h-288v288zm352 0h320v-288h-320v288zm-352-352h288v-320h-288v320zm352 0h320v-320h-320v320zm-352-384h288v-288h-288v288zm736 736h320v-288h-320v288zm-384-736h320v-288h-320v288zm768 736h288v-288h-288v288zm-384-352h320v-320h-320v320zm-352-864v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm736 864h288v-320h-288v320zm-384-384h320v-288h-320v288zm384 0h288v-288h-288v288zm32-480v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38h-1408q-52 0-90-38t-38-90v-1280q0-52 38-90t90-38h128v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z" /></svg>
                        </span>
                        <span><?php the_date(); ?></span>
                        <span>
                            <svg width="18" height="18" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">
                                <path d="M512 448q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm1067 576q0 53-37 90l-491 492q-39 37-91 37-53 0-90-37l-715-716q-38-37-64.5-101t-26.5-117v-416q0-52 38-90t90-38h416q53 0 117 26.5t102 64.5l715 714q37 39 37 91zm384 0q0 53-37 90l-491 492q-39 37-91 37-36 0-59-14t-53-45l470-470q37-37 37-90 0-52-37-91l-715-714q-38-38-102-64.5t-117-26.5h224q53 0 117 26.5t102 64.5l715 714q37 39 37 91z" /></svg>
                        </span>
                        <span><?php echo $firstCategory; ?></span>
                    </div>
                </div>
            </section>
            <section class="post-content" style="padding: 0px;">
                <div class="row mt2">
                    <div class="col">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            <section id="more-to-explore" style="padding: 0px;">
                <div class="row">
                    <div class="col more-to-explore mb4 mr2 ml2">
                        <div class="separator"></div>
                        <h1>More to Explore</h1>
                        <amp-carousel class="section-heading-carousel d-lg-none d-md-none" type="slides" controls autoplay>
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
                                                <h5 class="card-title mbr-bold mbr-fonts-style"><?php print mb_strimwidth($trending_title, 0, 40, "..."); ?></h5>
                                                <p class="card-text" style="font-style:italic"><?php print mb_strimwidth(get_the_excerpt($val), 0, 50, "..."); ?></p>
                                            </div>
                                            <div class="col-5"><a href="<?php print $post_url; ?>">
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
                                                </a>
                                                <h2 class="category-caption">#Category</h2>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </amp-carousel>
                        <amp-carousel class="section-heading-carousel d-sm-none " type="carousel" controls autoplay>
                            <?php
                            foreach ($get_trending as $val) {
                                $trending_img = get_the_post_thumbnail_url($val);
                                $trending_url = get_the_permalink($val);
                                $trending_title = get_the_title($val);
                                ?>
                                <div class="section-heading-carousel-div">
                                    <amp-img class="section-img-1" src="<?php
                                                                        if ($trending_img) {
                                                                            print $trending_img;
                                                                        } else {
                                                                            print content_url() . '/themes/TwimbitLite/src/placeholder.png';
                                                                        }  ?>">
                                    </amp-img>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <h5 class="card-title mbr-bold mbr-fonts-style ml2"><?php print mb_strimwidth($trending_title, 0, 10, "..."); ?></h5>
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
                </div>
            </section>
        </div>


    <?php } ?>

</section>
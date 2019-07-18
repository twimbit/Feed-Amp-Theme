<?php
/*
 * The template for displaying all audio template
 *
 *
 * */

get_header();
$post_args = array(
    'numberposts' => 0,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(get_the_ID()),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('podcast'),
    'suppress_filters' => true,
);

the_post();
$post_img   = get_the_post_thumbnail_url();
$post_url   = get_permalink();
$post_title = get_the_title();
$author = get_the_author();
$category = get_the_category();

$audio = get_field('audio_type');

?>

<div class="row podcast">
    <!--Main div    -->
    <div class="lg-col-7 md-col-7 sm-col-7 xs-col-12 podcast-cover">
        <!-- 1st div divided into 66%size of the page-->

        <div class="feed-card">
            <div class="single-thumbnail">
                <amp-img src="<?php echo $post_img; ?>"></amp-img>
                <div class="fade"></div>
                <div class="feed-link">
                    <div class="feed-title">
                        <p class="feed-subtitle"><?php echo $post_title; ?></p>
                        <span><?php echo $author; ?></span>
                        <span><?php echo $category; ?></span>
                    </div>
                    <div class="audio">
                        <audio controls src="<?php echo $audio['url']; ?>" class="player" controls controlsList="nodownload">
                            <!-- podcast playlist-->
                        </audio>
                    </div>
                    <div class="desc">
                        <span>
                            <?php echo mb_strimwidth(the_content(), 0, 50, "..."); ?>
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="lg-col-4 md-col-5 sm-col-5 xs-col-12">
        <!-- main div divded into 33% of the page -->
        <div class="right-side">
            <div class="social" >
                <amp-social-share class="social1" height="30px" width="30px" type="facebook"></amp-social-share>
                <amp-social-share class=social1" height="30px" width="30px" type="linkedin"></amp-social-share>
                <amp-social-share class="social1" height="30px" width="30px" type="twitter"></amp-social-share>
                <amp-social-share class="social1" height="30px" width="30px" type="whatsapp"></amp-social-share>
            </div>
            <div class="head">
                <a href="<?php echo $next_post_url = get_permalink(get_adjacent_post(false, '', false)->ID); ?>" class="next">
                    UP NEXT
                    <!-- next option-->
                </a>
            </div>
            <hr>
            <!--hr tag-->

            <!--dynamic container-->
            <?php

            $get_post = get_posts($post_args);

            foreach (array_slice($get_post, 0,) as $val) {
                $post_img = get_the_post_thumbnail_url($val);
                $post_url = get_permalink($val);
                $post_title = get_the_title($val);
                $author = get_the_author($val);
                $category = get_the_category_by_ID($val);
                ?>

                <a href="<?php echo $post_url; ?>" style="text-decoration:none">
                    <div class="short-card">
                        <!-- podcast option -->

                        <div class="short-image">
                            <!-- podcast image-->
                            <img class="short-image" src="<?php print $post_img; ?>">

                            <!--svg play icon-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85.658" height="85.658" viewBox="0 0 85.658 85.658" class="icon" <defs>
                                <style>
                                    .a {
                                        fill: rgba(0, 0, 0, 0.55);
                                    }

                                    .b {
                                        fill: #fafafa;

                                        .c {
                                            filter: url(#a);
                                        }
                                </style>
                                <filter id="a" x="0" y="0" width="85.658" height="85.658" filterUnits="userSpaceOnUse">
                                    <feOffset dy="3" input="SourceAlpha" />
                                    <feGaussianBlur stdDeviation="3" result="b" />
                                    <feFlood flood-opacity="0.161" />
                                    <feComposite operator="in" in2="b" />
                                    <feComposite in="SourceGraphic" />
                                </filter>
                                </defs>
                                <g transform="translate(-44.057 -33.003)">
                                    <g class="c" transform="matrix(1, 0, 0, 1, 44.06, 33)">
                                        <ellipse class="a" cx="33.829" cy="33.829" rx="33.829" ry="33.829" transform="translate(9 6)" />
                                    </g>
                                    <path class="b" d="M30.863,22.324l-7.989-6V39.9l7.989-6,7.727-5.789Zm0,0-7.989-6V39.9l7.989-6,7.727-5.789Zm0,0-7.989-6V39.9l7.989-6,7.727-5.789ZM25.493,7.341V2.05A26.059,26.059,0,0,0,11.558,7.839l3.719,3.746A20.8,20.8,0,0,1,25.493,7.341ZM11.584,15.278,7.839,11.558A26.059,26.059,0,0,0,2.05,25.493H7.341A20.8,20.8,0,0,1,11.584,15.278ZM7.341,30.732H2.05A26.059,26.059,0,0,0,7.839,44.667l3.746-3.746A20.609,20.609,0,0,1,7.341,30.732Zm4.217,17.654a26.145,26.145,0,0,0,13.935,5.789V48.884A20.8,20.8,0,0,1,15.278,44.64l-3.719,3.746ZM54.306,28.112A26.233,26.233,0,0,1,30.863,54.175V48.884a20.952,20.952,0,0,0,0-41.543V2.05A26.233,26.233,0,0,1,54.306,28.112Z" transform="translate(58.967 44.912)" />
                                </g>
                            </svg>
                        </div>
                        <div class="details">
                            <!--podcast details -->
                            <p class="detail1">
                                <?php echo $post_title; ?>
                            </p> <!-- podcast title -->
                            <div class="sub1">
                                <h2 style="margin-right: 10px;">
                                    <?php echo $author; ?>
                                </h2>
                                <h2><?php echo $category; ?></h2>
                            </div>
                        </div>

                    </div>
                </a>
            <?php } ?>
        </div>
    </div>

</div>
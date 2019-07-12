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

<section class="featured-image" style="padding: 0px;background-image:url('<?php print the_post_thumbnail_url(); ?>');">
    <?php while (have_posts()) {
        the_post(); ?>
        <div class="single-thumbnail">
            <div class="fade">
            </div>
            <div class="featured-image-text-container">
                <div class="featured-image-text xs-col-12 sm-col-8 md-col-7 lg-col-6">
                    <a href="#">Article title</a href="#">
                    <h2><?php the_title(); ?></h2>
                    <h6 style="color: #f5f5f5" class="mt2"><?php the_date(); ?></h6>
                    <h6 style="color: #f5f5f5"><?php the_author(); ?></h6>
                </div>
            </div>

        </div>

    </section>

    <section class="single-content">
        <div class="single-content-div">

            <!--            <section class="single-date-name">-->
            <!--                <div class="xs-col-12 sm-col-9 md-col-8 lg-col-7 mt2">-->
            <!--                    <span>-->
            <!--                        <svg width="18" height="18" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">-->
            <!--                            <path d="M192 1664h288v-288h-288v288zm352 0h320v-288h-320v288zm-352-352h288v-320h-288v320zm352 0h320v-320h-320v320zm-352-384h288v-288h-288v288zm736 736h320v-288h-320v288zm-384-736h320v-288h-320v288zm768 736h288v-288h-288v288zm-384-352h320v-320h-320v320zm-352-864v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm736 864h288v-320h-288v320zm-384-384h320v-288h-320v288zm384 0h288v-288h-288v288zm32-480v-288q0-13-9.5-22.5t-22.5-9.5h-64q-13 0-22.5 9.5t-9.5 22.5v288q0 13 9.5 22.5t22.5 9.5h64q13 0 22.5-9.5t9.5-22.5zm384-64v1280q0 52-38 90t-90 38h-1408q-52 0-90-38t-38-90v-1280q0-52 38-90t90-38h128v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h384v-96q0-66 47-113t113-47h64q66 0 113 47t47 113v96h128q52 0 90 38t38 90z" /></svg>-->
            <!--                    </span>-->
            <!--                    <span>--><?php //the_date(); 
                                                ?>
            <!--</span>-->
            <!--                    <span>-->
            <!--                        <svg width="18" height="18" viewBox="0 0 2048 1792" xmlns="http://www.w3.org/2000/svg">-->
            <!--                            <path d="M512 448q0-53-37.5-90.5t-90.5-37.5-90.5 37.5-37.5 90.5 37.5 90.5 90.5 37.5 90.5-37.5 37.5-90.5zm1067 576q0 53-37 90l-491 492q-39 37-91 37-53 0-90-37l-715-716q-38-37-64.5-101t-26.5-117v-416q0-52 38-90t90-38h416q53 0 117 26.5t102 64.5l715 714q37 39 37 91zm384 0q0 53-37 90l-491 492q-39 37-91 37-36 0-59-14t-53-45l470-470q37-37 37-90 0-52-37-91l-715-714q-38-38-102-64.5t-117-26.5h224q53 0 117 26.5t102 64.5l715 714q37 39 37 91z" /></svg>-->
            <!--                    </span>-->
            <!--                    <span>--><?php //echo $firstCategory; 
                                                ?>
            <!--</span>-->
            <!--                </div>-->
            <!--            </section>-->
            <section class="post-content">
                <div class="xs-col-12 sm-col-2 md-col-2 lg-col-2 mt4 mr2 sm-hide xs-hide">
                    <div class="pre-next-dialog flex">
                        <div class="pre-next-dialog-content">
                            <h2 style="flex:1">Up next</h2>
                            <p style="flex:2"><?php $next_post_url = next_post_link(); ?></p>
                            <p style="flex:2"><?php $next_post_url = next_post_link(); ?></p>
                        </div>
                    </div>
                </div>
                <div class="xs-col-12 sm-col-8 md-col-7 lg-col-6 mt4 cont">
                    <?php the_content(); ?>
                </div>
                <div class="xs-col-12 sm-col-2 md-col-2 lg-col-2 mt4 ml2 sm-hide xs-hide">
                    next and previous post
                </div>
            </section>
        </div>


    <?php } ?>

</section>

<script>
    $(document).ready(function() {
        //$(".pre-next-dialog").hide();
        //$(".pre-next-dialog").css('opacity','0');

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
</script>
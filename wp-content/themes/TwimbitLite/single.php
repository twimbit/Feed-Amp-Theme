<?php

/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
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


// $trending = array(
//     'numberposts' => 0,
//     'category' => 0,
//     'orderby' => 'date',
//     'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
//     'include' => array(),
//     'exclude' => array(),
//     'meta_key' => '',
//     'meta_value' => '',
//     'post_type' => array('video', 'post', 'podcast', 'explore'),
//     'suppress_filters' => true,
// );
// $get_trending = get_posts($trending);

// $category = get_the_category();
// $firstCategory = $category[0]->cat_name;
?>

<section class="featured-image" style="padding: 0px;background-image:url('<?php print the_post_thumbnail_url(); ?>');">
    <?php while (have_posts()) {
        the_post(); ?>
        <div class="single-thumbnail">
            <div class="fade">
            </div>
            <div class="featured-image-text-container">
                <div class="featured-image-text xs-col-12 sm-col-8 md-col-7 lg-col-6">
                    <a href="#"><?php if (get_post_type($val) == "post") {
                                    print "Insight";
                                } else if (get_post_type($val) == "video") {
                                    print "Video";
                                } else if (get_post_type($val) == "podcast") {
                                    print "Podcast";
                                } else if (get_post_type($val) == "amp_story") {
                                    print "Story";
                                }  ?></a href="#">
                    <h2><?php the_title(); ?></h2>
                    <h6 style="color: #f5f5f5" class="mt2"><?php the_date(); ?></h6>
                    <h6 style="color: #f5f5f5"><?php the_author(); ?></h6>
                </div>
            </div>

        </div>

    </section>

    <section class="single-content">
        <div class="single-content-div">
            <section class="post-content">
                <div class="xs-col-12 sm-col-2 md-col-2 lg-col-2 mt4 mr2 sm-hide xs-hide">
                    <div class="pre-next-dialog flex" style="top:10%;">
                        <div class="pre-next-dialog-content">
                            <h2 style="flex:1">Up next</h2>
                            <?php $taxonomy = "post";
                            for ($i = 1; $i <= 2; $i++) {
                                $post = get_next_post(); // this uses $post->ID
                                if (!empty($post)) { ?>
                                    <a href="<?php echo get_the_permalink(); ?>">
                                        <p style="flex:2"><?php the_title(); ?></p>
                                    </a>
                                <?php } else {
                                    $first_post =  get_posts(array(
                                        'numberposts' => 1,
                                        'post_type' => array('post'),
                                        'order' => 'ASC',
                                    ))[0]; ?>
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
</script>
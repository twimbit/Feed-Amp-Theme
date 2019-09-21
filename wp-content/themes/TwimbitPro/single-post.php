<?php get_header();
global $post;
$current_post = $post; /* Getting Category */
$category = get_the_category(); /* Swipe next post url */


// echo $back_img;
function nextPost()
{
    get_adjacent_post();
    echo get_the_permalink();
} ?>
<style scoped>
    /*<![CDATA[*/
    @import "https://fonts.googleapis.com/css?family=Merriweather:300&display=swap";
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap');

    .post-content * {
        font-family: Merriweather, sans-serif
    }

    .post-content p {
        font-family: Merriweather, sans-serif;
        font-weight: 300;
        line-height: 1.7;
        margin: 8px 0 16px;
        letter-spacing: 0.03em;
        font-size: 18px
    }

    .post-content a {
        word-break: break-all
    }

    .featured-image-text h2 {
        color: #fff;
        font-weight: 700;
        margin-top: 12px;
        font-size: 30px;
        line-height: 1.3
    }

    .wp-block-image figure {
        width: 100%
    }

    .cont li {
        font-weight: 300;
        font-size: 16px;
        line-height: 1.9
    }

    @media(min-width:768px) {
        .post-content p {
            font-size: 19px
        }

        .cont li {
            font-size: 18px
        }

        .wp-block-image figure {
            margin-right: 1rem;
            margin-left: 0
        }
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: 600;
        font-family: 'Open sans', sans-serif !important;
        line-height: 1.5;
        margin: 10px 0
    }

    h1 {
        font-weight: 700;
        font-size: 32px;
    }

    h2 {
        font-size: 30px;
    }

    h3 {
        font-weight: 500;
        font-size: 27px;
        margin-top: 16px
    }

    h4 {
        font-size: 24px;
        font-weight: 400;
    }

    h5 {
        font-size: 20px;
        font-weight: 400;
        color: #7f7f7f;
    }

    h6 {
        font-size: 18px;
        font-weight: 400;
        color: #7f7f7f;
    }

    .feed-title h3 {
        margin: 0
    }

    .post-content figure img {
        margin-right: 0;
        box-shadow: 13px 13px 20px -3px rgba(0, 0, 0, 0.07);
        border-bottom: 2px solid #f16c70
    }

    @media(min-width:64.06rem) {
        .lg-col-5 {
            width: 44%
        }
    }

    hr {
        height: 0;
        width: 33%;
        margin-bottom: 30px;
        box-shadow: 0 0 38px 2px #00000059
    }

    blockquote {
        padding-left: 25px;
        margin: 25px 30px;
        border-left: 5px solid #ea7979;
    }

    blockquote>* {
        font-weight: 600 !important;
        line-height: 1.6 !important;
        color: #7f7f7f;
        font-size: 25px !important;
        font-family: 'Open sans', sans-serif !important;
    }


    pre {
        font-size: 20px
    }

    ol {
        font-family: Montserrat;
        font-size: 21px;
        font-weight: 400px
    }

    .featured-image-text a {
        font-size: 18px;
        font-weight: 600
    }

    @media only screen and (max-width:768px) {
        .featured-image-text h2 {
            font-size: 25px;
            line-height: 2rem
        }

        .featured-image-text {
            bottom: 150px
        }

        .featured-image {
            height: 100vh
        }

        .wp-block-image figure {
            width: fit-content;
            margin-left: auto;
            margin-right: auto
        }
    }

    .feed-card * {
        font-family: 'Montserrat', 'Open Sans', Helvetica
    }

    @media (min-width: 64.06rem) {
        .lg-col-5-5 {
            width: 53%;
        }
    }

    /*]]>*/
</style>
<div id="post_area">
    <section class="featured-image" style="padding:0;background-image:url('<?php echo the_post_thumbnail_url(); ?>">
        <?php while (have_posts()) {
            the_post();
            $type = get_post_type(); ?>
            <div class="single-thumbnail">
                <div class="fade">
                </div>
                <div class="featured-image-text-container">
                    <div class="featured-image-text xs-col-12 sm-col-8 md-col-7 lg-col-6">
                        <a>Insight</a href="#">
                        <h2><?php the_title(); ?></h2>
                        <h6 style="color:#f5f5f5;margin-top:6px;font-size:15px;margin-top:6px;margin-bottom:5px;font-weight:600">by <?php the_author(); ?></h6>
                        <h6 style="margin-top:0"><a href="<?php echo get_category_link($category[0]->term_id); ?>" style="font-size:0.76rem">#<?php echo $category[0]->name; ?></a>
                        </h6>
                    </div>
                </div>
            </div>
    </section>
    <section class="single-content">
        <div class="single-content-div">
            <section class="post-content">
                <div class="xs-col-12 sm-col-3 md-col-3 lg-col-2 mt4 mr2 xs-hide sm-hide" style="margin-right:50px">
                </div>
                <div class="xs-col-12 sm-col-11 md-col-6 lg-col-5-5 mt4 cont">
                    <div class="social lg-hide md-hide" style="margin-left:auto">
                        <amp-social-share class="social1" height="30px" data-param-href="hello" width="30px" type="facebook"></amp-social-share>
                        <amp-social-share class=social1" height="30px" width="30px" type="linkedin"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="twitter"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="whatsapp"></amp-social-share>
                    </div>
                    <?php the_content(); ?>
                </div>
                <div class="xs-col-12 sm-col-2 md-col-2 lg-col-2 mt4 ml2 sm-hide xs-hide">
                    <div class="social">
                        <amp-social-share class="social1" height="30px" width="30px" href="hello" type="facebook"></amp-social-share>
                        <amp-social-share class=social1" height="30px" width="30px" type="linkedin"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="twitter"></amp-social-share>
                        <amp-social-share class="social1" height="30px" width="30px" type="whatsapp"></amp-social-share>
                    </div>
                </div>
            </section>
        </div>
    <?php } ?>
    </section>
    <section id="more-to-explore" style="margin-top:3rem">
        <div class="container">
            <div class="more-to-explore-heading">
                <h3 style="color:#f16c70">More to explore</h3>
                <hr>
            </div>
            <div class="more-to-explore-card-container">
                <?php for ($i = 1; $i <= 2; $i++) {
                    $post = get_adjacent_post();
                    $exploreMore_img = get_the_post_thumbnail_url($val, 'medium_large');
                    $exploreMore_url = get_the_permalink();
                    $exploreMore_title = get_the_title();
                    $type = get_post_type();
                    if (!empty($post)) { ?>
                        <div class="feed-card" style="height:313px;width:49%">
                            <div class="single-thumbnail">
                                <amp-img layout="fill" src="<?php if (check_webp_support($exploreMore_img)) {
                                                                        echo $exploreMore_img . ".webp";
                                                                    } else {
                                                                        echo $exploreMore_img;
                                                                    } ?>"></amp-img>
                                <div class="fade"></div>
                                <a href="<?php echo $exploreMore_url; ?>" class="feed-link">
                                    <div class="feed-title">
                                        <h3><?php echo $exploreMore_title; ?></h3>
                                        <p class="feed-subtitle">#<?php echo get_the_category()[0]->cat_name; ?></p>
                                    </div>
                                </a>
                                <div class="feed-action">
                                    <div class="feed-button">
                                        <div class="feed-wrap">
                                            <div class="feed-button-in">
                                                <div class="atomic-heart">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 41.817 37.171">
                                                        <path class="a" d="M3,31.878H14.616V27.232H3Zm15.1,0H29.716V27.232H18.1Zm15.1,0H44.817V27.232H33.2ZM3,41.171H7.646V36.524H3Zm9.293,0h4.646V36.524H12.293Zm9.293,0h4.646V36.524H21.585Zm9.293,0h4.646V36.524H30.878Zm9.293,0h4.646V36.524H40.171ZM3,22.585H21.585V17.939H3Zm23.232,0H44.817V17.939H26.232ZM3,4v9.293H44.817V4Z" transform="translate(-3 -4)" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="count">
                                                Insight
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } else {
                            $first_post = get_posts(array(
                                'numberposts' => 1,
                                'post_type' => array('post'),
                                'order' => 'DESC',
                            ))[0];
                            $first_post_type = get_post_type($first_post);
                            ?>
                        <div class="feed-card" style="height:313px;width:49%">
                            <div class="single-thumbnail">
                                <amp-img layout="fill" src="<?php echo get_the_post_thumbnail_url($first_post, 'medium_large'); ?>"></amp-img>
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 41.817 37.171">
                                                        <path class="a" d="M3,31.878H14.616V27.232H3Zm15.1,0H29.716V27.232H18.1Zm15.1,0H44.817V27.232H33.2ZM3,41.171H7.646V36.524H3Zm9.293,0h4.646V36.524H12.293Zm9.293,0h4.646V36.524H21.585Zm9.293,0h4.646V36.524H30.878Zm9.293,0h4.646V36.524H40.171ZM3,22.585H21.585V17.939H3Zm23.232,0H44.817V17.939H26.232ZM3,4v9.293H44.817V4Z" transform="translate(-3 -4)" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="count">
                                                Insight
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
</div>
<?php get_footer(); ?>
<script>
    /*<![CDATA[*/
    var el = document.getElementById('post_area');
    swipedetect(el, function(swipedir) {
        if (swipedir == 'left') {
            window.location.href = "<?php nextPost(); ?>"
        }
        if (swipedir == 'right') {
            window.history.back();
        }
    });
    let $figure = document.getElementsByTagName("figure");
    for (i = 0; i < $figure.length; i++) {
        $figure[i].classList.remove("alignleft");
    } /*]]>*/
</script>
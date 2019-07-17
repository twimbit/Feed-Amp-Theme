<?php
    /*
     * The template for displaying all audio template
     *
     * Template Name:audio_template
     * Template Post Type: podcast
     */

    ?>
<script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
<meta name="viewport" content="width=device-width" initial-scale=1.0">

<style amp-custom="">
    * {
        box-sizing: border-box;
    }
    html {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.15;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        min-height: 100%;
        display: grid;
    }
    body
    {
        /*background: linear-gradient(to top, rgb(207, 217, 223) 0%, rgb(226, 235, 240) 100%);*/
        display: grid;
        overflow: hidden;
        margin: 0px;
        background-color: #FAFAFA;
    }
    #cards-feed{ url(" ");
    }
    .col
    {
        float: left;
        margin:auto;
    }
    .col-right
    {
        box-sizing: border-box;
        float: right;
    }

    .col-1
    {
        width: 8.33333%;
    }
    .col-2
    {
        width: 16.66667%;
    }
    .col-3 {
        width: 25%;
    }
    .col-4 {
        width: 33.33333%;
    }
    .col-5 {
        width: 41.66667%;
    }
    .col-6 {
        width: 50%;
    }
    .col-7 {
        width: 58.33333%;
    }
    .col-8 {
        width: 66.66667%;
    }
    .col-9 {
        width: 75%;
    }
    .col-10 {
        width: 83.33333%;
    }
    .col-11 {
        width: 91.66667%;
    }
    .col-12 {
        width: 100%;
    }
    .xs-col-right
    {
        float: right;
        box-sizing: border-box;
    }
    .xs-col-1 {
        width: 8.33333%;
    }
    .xs-col-2 {
        width: 16.66667%;
    }
    .xs-col-3 {
        width: 25%;
    }
    .xs-col-4 {
        width: 33.33333%;
    }
    .xs-col-5 {
        width: 41.66667%;
    }

    .xs-col-6 {
        width: 50%;
    }
    .xs-col-7 {
        width: 58.33333%;
    }
    .xs-col-8 {
        width: 66.66667%;
    }
    .xs-col-9 {
        width: 75%;
    }
    .xs-col-10 {
        width: 83.33333%;
    }
    .xs-col-11 {
        width: 91.66667%;
    }
    .xs-col-12 {
        width: 100%;
    }
    .sm-col-right {
        float: right;
        box-sizing: border-box;
    }
    .sm-col-1 {
        width: 8.33333%;
    }

    .sm-col-2 {
        width: 16.66667%;
    }

    .sm-col-3 {
        width: 25%;
    }

    .sm-col-4 {
        width: 33.33333%;
    }

    .sm-col-5 {
        width: 41.66667%;
    }

    .sm-col-6 {
        width: 50%;
    }

    .sm-col-7 {
        width: 58.33333%;
    }

    .sm-col-8 {
        width: 66.66667%;
    }

    .sm-col-9 {
        width: 75%;
    }

    .sm-col-10 {
        width: 83.33333%;
    }

    .sm-col-11 {
        width: 91.66667%;
    }
    .sm-col-12 {
        width: 100%;
    }
    .md-col-right {
        float: right;
        box-sizing: border-box;
    }
    .md-col-1 {
        width: 8.33333%;
    }

    .md-col-2 {
        width: 16.66667%;
    }

    .md-col-3 {
        width: 25%;
    }

    .md-col-4 {
        width: 33.33333%;
    }

    .md-col-5 {
        width: 41.66667%;
    }
    .md-col-6 {
        width: 50%;
    }
    .md-col-7 {
        width: 58.33333%;
    }
    .md-col-8 {
        width: 66.66667%;
    }
    .md-col-9 {
        width: 75%;
    }
    .md-col-10 {
        width: 83.33333%;
    }
    .md-col-11 {
        width: 91.66667%;
    }
    .md-col-12 {
        width: 100%;
    }
    .lg-col-right {
        float: right;
        box-sizing: border-box;
    }
    .lg-col-1 {
        width: 8.33333%;
    }
    .lg-col-2 {
        width: 16.66667%;
    }
    .lg-col-3 {
        width: 25%;
    }
    .lg-col-4 {
        width: 33.33333%;
    }
    .lg-col-5 {
        width: 41.66667%;
    }
    .lg-col-6 {
        width: 50%;
    }
    .lg-col-7 {
        width: 58.33333%;
    }
    .lg-col-8 {
        width: 66.66667%;
    }
    .lg-col-9 {
        width: 75%;
    }
    .lg-col-10 {
        width: 83.33333%;
    }
    .lg-col-11 {
        width: 91.66667%;
    }
    .lg-col-12 {
        width: 100%;
    }
    .m0 {
        margin: 0;
    }

    .mt0 {
        margin-top: 0;
    }

    .mr0 {
        margin-right: 0;
    }

    .mb0 {
        margin-bottom: 0;
    }
    .mt0 {
        margin-top: 0;
    }
    .mr0 {
        margin-right: 0;
    }
    .mb0 {
        margin-bottom: 0;
    }
    .ml0,
    .mx0 {
        margin-left: 0;
    }

    .mx0 {
        margin-right: 0;
    }

    .my0 {
        margin-top: 0;
        margin-bottom: 0;
    }

    .m1 {
        margin: .5rem;
    }

    .mt1 {
        margin-top: .5rem;
    }

    .mr1 {
        margin-right: .5rem;
    }

    .mb1 {
        margin-bottom: .5rem;
    }

    .ml1,
    .mx1 {
        margin-left: .5rem;
    }

    .mx1 {
        margin-right: .5rem;
    }

    .my1 {
        margin-top: .5rem;
        margin-bottom: .5rem;
    }

    .m2 {
        margin: 1rem;
    }

    .mt2 {
        margin-top: 1rem;
    }

    .mr2 {
        margin-right: 1rem;
    }

    .mb2 {
        margin-bottom: 1rem;
    }

    .ml2,
    .mx2 {
        margin-left: 1rem;
    }

    .mx2 {
        margin-right: 1rem;
    }

    .my2 {
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .m3 {
        margin: 1.5rem;
    }

    .mt3 {
        margin-top: 1.5rem;
    }

    .mr3 {
        margin-right: 1.5rem;
    }

    .mb3 {
        margin-bottom: 1.5rem;
    }

    .ml3,
    .mx3 {
        margin-left: 1.5rem;
    }

    .mx3 {
        margin-right: 1.5rem;
    }

    .my3 {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .m4 {
        margin: 2rem;
    }

    .mt4 {
        margin-top: 2rem;
    }

    .mr4 {
        margin-right: 2rem;
    }

    .mb4 {
        margin-bottom: 2rem;
    }

    .ml4,
    .mx4 {
        margin-left: 2rem;
    }
    .mx5{
        margin-left: 3rem;
    }

    .mx4 {
        margin-right: 2rem;
    }

    .my4 {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .p0 {
        padding: 0;
    }
    .rounded {
        border-radius: 5px;
    }

    .circle {
        border-radius: 50%;
    }
    .row::after {
        content: "";
        clear: both;
        display: block;
    }

    [class*="col-"] {
        float: left;
        padding: 20px;
    }
    a {
         text-decoration: none;
         display: inline-block;
         padding: 8px 16px;
     }
    .previous {

        color: black;
    }

    .next {
        color: white;
    }

    .round {
        border-radius: 50%;
    }

    @media (min-width:576px) {
        .container {
            max-width: 540px;
        }
    }

    @media (min-width:768px) {
        .container {
            max-width: 720px;
        }
    }

    @media (min-width:992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width:1200px) {
        .container {
            max-width: 1140px;
        }
    }
    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    .feed-card {
        margin-bottom: 30px;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
        height: 245px;
    }
    .feed-thumbnail {
        border: none !important;
        position: relative;
        background: #DDD;
        height: 100%;
        display: flex;
        align-items: center;
    }
    .feed-card amp-img {
        height: 100%;
        width: 100%;
    }
    .feed-card amp-img img {
        object-fit: cover;
    }
    .fade {
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
        top: 0;
        opacity: .9;

        background: linear-gradient(rgba(0, 0, 0, 0.52) 0%, rgba(0, 0, 0, 0.24) 100%);
    }
    .feed-link {
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
        top: 0;
    }
    .feed-title {
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
        margin: 0;
        color: #FFF;
        padding: 16px;
    }
    .feed-title h3 {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 0;
        text-shadow: 0 1px 2px #1a1a1a;
        line-height: 1.4;
    }
    .feed-subtitle {
        font-size: 12px;
    }
    .feed-title p {
        margin: 8px 0 0;
        font-weight: 400;
        font-size: 15px;
        line-height: 1.4;
    }
    @media (min-width: 768px) {
        .feed-card {
            height: 400px;
        }
        .feed-title {
            padding: 24px;
        }
        .feed-title h3 {
            font-size: 32px;
        }
        .feed-title p {
            font-size: 14px;
        }
    }
    .feed-action {
        height: 52px;
        display: flex;
        align-items: center;
        bottom: 0;
        color: #FFF;
        position: absolute;
        top: 8px;
        right: 8px;
    }
    .feed-button {
        font-size: initial;
    }
    .feed-wrap {
        flex-direction: row-reverse;
        display: flex;
        align-items: center;
    }
    .single-thumbnail {
        position: relative;
        height: 100%;
        display: flex;
        align-items: flex-end;
    }

    .featured-image-text {
        /*text-align: center;*/
        /*width: 100%;*/
        /* justify-self: end; */
        position: absolute;
        bottom: 50px;
        padding: 0px 15px;
    }
    .featured-image-text a {
        font-size: 16px;
        padding: 0 0 2px;
        opacity: .75;
        color: #FFF;
        text-decoration: none;
        border-bottom: 1.5px solid rgba(255, 255, 255, .75);
    }
    .featured-image-text-container {
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .featured-image-text h2 {
        color: white;
    }
    @media (max-width: 64rem) and (min-width: 52.06rem) {
        .md-hide {
            display: none;
        }
    }
    @media (min-width: 64.06rem) {
        .lg-hide {
            display: none;
        }
    }
    .single-content {
        padding: 0px 15px;
    }
    .featured-image {
        background-attachment: fixed;
        height: 400px;
        background-size: cover;
    }
    .post-content {
        display: flex;
        justify-content: center;
    }
    .single-date-name {
        display: flex;
        justify-content: center;
    }
    .post-content figure img {
        width: 100%;
        height: 100%;
    }
    /* for xtra small devices */
    @media only screen and (max-width:40rem) {
        .wp-block-embed__wrapper iframe {
            width: 100%;
            height: 100%;
        }
        .featured-image-text h2 {
            font-size: 25px;
            line-height: 2rem;
        }
    }
    @media only screen and (min-width:40.06rem) {
        .sm-flex {
            display: -ms-flexbox;
            display: flex;
            margin-top:-90px;
        }
    }
    @media only screen and (min-width:1250px) {
        .md-flex {
            display: -ms-flexbox;
            display: flex;
            margin-top:-90px;
        }
    }
    @media only screen and (min-width:1250px) {
        .lg-flex {
            display: -ms-flexbox;
            display: flex;
        }
    }
    @media only screen and (max-width:1260px) {
        /* For mobile phones: */
        [class*="col-"] {
            width: 100%;
            margin-top:30px;

        }
    }
    @media only screen and (max-width:414px) {
        /* For mobile phones: */
        [class*="col-"] .right-side {
            width: 90%;
            margin-left: 44px;
            margin-top: -90px;

        }
    }
    @media only screen and (max-width:414px) {
        /* For mobile phones: */
        [class*="col-"] .feed-card {
            width: 100%;
            height:100%;
            margin-left: 44px;
            margin-top: -90px;

        }
    }
    @media only screen and (max-width:1024px) {
        /* For mobile phones: */
        [class*="col-"] .left-side,.right-side {
            width: 80%;
            margin-left: 44px;
            margin-top: -90px;

        }
    }
    @media only screen and (max-width:414px) {
        /* For mobile phones: */
        [class*="col-"] .audio,.right-side {
            width: 100%;


        }
    }


</style>
<body>
<?php
$post_args = array(
'numberposts' => 0,
'category' => 0,
'orderby' => 'date',
'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
'include' => array(),
'exclude' => array(),
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


?>

<div class="row">
    <div class="lg-col-8 md-col-12 sm-col-12 xs-col-12">

        <a name="content">

            <section id="cards-feed content" class="mb4">
            <div class="container mt2" style="margin-bottom: 1rem;">
                <div class="lg-col-8 md-col-8 sm-col-8 xs-col-12">
                    <div class="feed-card" style="width:800px; height:550px;">
                        <div class="single-thumbnail">
	                        <?php $audio =get_field('audio_types');
	                        ?>
                            <img src="<?php print $post_img; ?>">
                            <amp-img src="<?php print $post_img; ?>">
                            </amp-img>
                            <div class="fade">
                            </div>
                            <div class="post-content">
                                <div class="feed-title" style="padding-bottom: 220px; padding-left: 30px;">
                                    <h3 style="font-size:40px;font-variant: small-caps;"><?php print $post_title ?></h3>

                                    <p class="feed-subtitle" style="font-size:20px"><?php echo $author?></p>

                                    <audio controls src="<?php echo $audio['url'];?>" width="auto" height="auto" style="margin-top:90px; width: 600px;" controls controlsList="nodownload"></audio>
                                    <p class="feed-content" style="margin-top:20px;">
                                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

	                                        echo mb_strimwidth(get_the_content(), 0, 300, "...");
	                                    endwhile; else: ?>
	                                    <?php endif; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </a>

    </div>
    <div class="lg-col-4 md-col-10 sm-col-10 xs-col-10">
        <div class="right-side">
<!--            <a href="--><?php //echo $previous_post_url = get_permalink( get_adjacent_post(false,'',true)->ID );?><!--" class="previous">&#8249;</a>-->
            <a href="<?php echo $next_post_url = get_permalink( get_adjacent_post(false,'',false)->ID );?>" class="next" style="color:#000000;margin-top: 30px;margin-bottom: -10px;font-size: 26px;">UP NEXT</a>
            <hr style ="width: 100%;
                margin-left: 1px;
                margin-bottom: 20px;">

	        <?php

	        $get_post = get_posts($post_args);
	        foreach ( array_slice($get_post, 0, 4) as $val) {
	        $post_img = get_the_post_thumbnail_url($val);
	        $post_url = get_permalink($val);
	        $post_title = get_the_title($val);
	        $author= get_the_author($val);
	        ?>
            <div class="short-card" style="height: 120px; width: 100%; background-color: white; border-radius: 10px; margin-bottom: 20px; box-shadow:0 2px 4px 0 rgba(0, 0, 0, .5);">
            <a href="<?php echo $post_url;?>"  name="feed">

                <div class="short-image" style=" ">
                    <img style="border-radius: 10px !important; height: 120px; width: 130px; margin-left: -16px; margin-right: 30px;margin-top: -8px;" src="<?php echo $post_img ?>" layout="responsive" width="100px" height="100px" alt="" align="left">

                        <svg xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="85.658"
                         height="85.658"
                         viewBox="0 0 85.658 85.658"
                        style="margin-left: -132px; margin-top: 16px; height: 70px;width: 70px;">
                        <defs>
                            <style>

                                .a{fill:rgba(0,0,0,0.55);}
                                .b{fill:#fafafa;.c{filter:url(#a);}
                            </style>
                            <filter id="a" x="0" y="0" width="85.658" height="85.658" filterUnits="userSpaceOnUse">
                                <feOffset dy="3" input="SourceAlpha"/>
                                <feGaussianBlur stdDeviation="3" result="b"/>
                                <feFlood flood-opacity="0.161"/>
                                <feComposite operator="in" in2="b"/>
                                <feComposite in="SourceGraphic"/>
                            </filter>
                        </defs>
                        <g transform="translate(-44.057 -33.003)">
                            <g class="c" transform="matrix(1, 0, 0, 1, 44.06, 33)">
                                <ellipse class="a" cx="33.829" cy="33.829" rx="33.829" ry="33.829" transform="translate(9 6)"/>
                            </g>
                            <path class="b" d="M30.863,22.324l-7.989-6V39.9l7.989-6,7.727-5.789Zm0,0-7.989-6V39.9l7.989-6,7.727-5.789Zm0,0-7.989-6V39.9l7.989-6,7.727-5.789ZM25.493,7.341V2.05A26.059,26.059,0,0,0,11.558,7.839l3.719,3.746A20.8,20.8,0,0,1,25.493,7.341ZM11.584,15.278,7.839,11.558A26.059,26.059,0,0,0,2.05,25.493H7.341A20.8,20.8,0,0,1,11.584,15.278ZM7.341,30.732H2.05A26.059,26.059,0,0,0,7.839,44.667l3.746-3.746A20.609,20.609,0,0,1,7.341,30.732Zm4.217,17.654a26.145,26.145,0,0,0,13.935,5.789V48.884A20.8,20.8,0,0,1,15.278,44.64l-3.719,3.746ZM54.306,28.112A26.233,26.233,0,0,1,30.863,54.175V48.884a20.952,20.952,0,0,0,0-41.543V2.05A26.233,26.233,0,0,1,54.306,28.112Z" transform="translate(58.967 44.912)"/>
                        </g>
                    </svg>

                </div>
                <div class="details" style="width: 600px; ">
                    <h3 style="font-size:20px; align:right;margin-top:  -85px; color:#000000; font-variant: small-caps;"> <?php echo $post_title?></h3>
                    <p class="details-subtitle" style="font-size:15px; align:right; margin-top: 60px; color:#000000;"><?php echo $author ?></p>
                </div>

            </a>
        </div>
	        <?php } ?>
        </div>
    </div>
</div>
</body>







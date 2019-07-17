<?php
/*
 * The template for displaying all audio template
 *
 * Template Name:audio_template
 */

get_header();
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
    .xs-col-right
    {
        float: right;
        box-sizing: border-box;
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
    .lg-col-4 {
        width: 33.33333%;
    }
    .lg-col-8 {
        width: 66.66667%;
    }
    .p0 {
        padding: 0;
    }
    .rounded {
        border-radius: 5px;
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
        color: #000000;
        margin-top: -20px;
        margin-left: -15px;
        font-size: 25px;
    }
    .feed-card {
        margin-bottom: 0px;
        overflow: hidden;
        margin-top:60px;
        border-radius: 10px;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
        width:850px;
    }
    .feed-thumbnail {
        border: none !important;
        position: relative;
        background: #DDD;
        height: 80%;
        display: flex;
        align-items: center;
    }
    .feed-card amp-img {
        height: 80%;
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
        bottom: 200px;
        right: 0;
        left: 0;
        margin: 0;
        color: #FFF;
        padding: 16px;

    }
    .feed-title h3 {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 25px;
        text-shadow: 0 1px 2px #1a1a1a;
        line-height: 1.4;
    }
    .feed-title p {
        margin: 8px 0 0;
        font-weight: 400;
        line-height: 1.4;
        font-size:40px;
        font-variant: common-ligatures;
        color: #ffffff;
    }
    @media (min-width: 768px) {
        .feed-card {
            height: 700px;
            background-size: cover;
        }
        .feed-title {
            padding: 40px;
        }
        .feed-title h3 {
            font-size: 32px;
            font-variant: small-caps;
            color: #ffffff;
        }
        .feed-title p {
            font-size: 14px;
            color: #ffffff;
            margin-bottom: 15px;
        }
    }
    @media (min-width: 441px) {
        .feed-card {
            height: 520px;
            margin-left:30px;
            background-size: cover;
        }
        .feed-title {
            padding: 40px;
        }
        .feed-title h3 {
            font-size: 32px;
            font-variant: small-caps;
            color: white;
        }
        .feed-title p {
            font-size: 14px;
        }
    }
    .single-thumbnail {
        position: relative;
        height: 100%;
        display: flex;
        align-items: flex-end;
    }
    .featured-image-text {
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
    .featured-image {
        background-attachment: fixed;
        height: 400px;
        background-size: cover;
    }
    @media only screen and (max-width:1260px) {
        /* For mobile phones: */
        [class*="col-"] {
            width: 100%;
            margin-top:30px;
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"]  .feed-card,.right-side{
            width: 100%;
            height:100%;
            margin-top:40px;
            background-size: cover;
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"] .feed-title
        {
            position: absolute;
            bottom: 180px;
            right: 25px;
            left: 50px;
            margin: 0;
            color: #FFF;
            padding: 19px;
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"] .feed-title h3
        {
            font-size: 80px;
            font-weight: 600;
            margin-bottom: 22px;
            text-shadow: 0 1px 2px #1a1a1a;
            line-height: 1.4;
            font-variant: small-caps;
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"] .feed-title p
        {
            margin: 8px 0 0;
            font-weight: 400;
            line-height: 1.4;
            font-size: 40px;
            color: white;
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"] .feed-subtitle p
        {
            margin: 8px 0 0;
            font-weight: 400;
            line-height: 1.4;
            font-size: 40px;
            margin-top:50px;
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"] .right-side{
            width: 100%;
            height:100%;
            margin-left:10px;
            margin-top:-72px;
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"] .short-card{
            width: 96%;
            height: 22%;
            margin-left: 10px;
            margin-top: 40px;
            box-shadow:0 2px 4px 0 rgba(0, 0, 0, .5);
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        .next{
            margin-bottom: -10px;

            margin-top: 130px;
            margin-left: 0px;
            font-size: 75px;
        }
    }
    @media only screen and (max-width:441px) {
        [class*="col-"]  hr{

            width: 96%;
            margin-left: 14px;
            margin-top: 0px;
            border: 2px solid grey;
        }
    }
    @media only screen and (max-width:441px) {
        .player
        {
            margin-top: 420px;
            margin-left: 0px;
            margin-right: -50px;
            width: 94%;
        }
    }

    .icon
    {
        margin-left: -135px;
        margin-top: 43px;
        height: 50px;
        width: 50px;
    }

    @media only screen and (max-width:441px) {
        .icon
        {
            margin-left: -340px;
            margin-top: 100px;
            height: 146px;
            width: 170px;
        }
    }
    hr
    {
        width: 90%;
        margin-left: 0px;
        margin-top: -4px;
        border: 1px solid grey;
    }
    .player
    {
        width:65%;
    }
    .right-side
    {
        margin-top: 71px;
    }
    .short-card
    {
        width: 90%;
        height: 140px;
        background-color: white;
        border-radius: 10px;
        margin-bottom: 20px;
        margin-left: 0px;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
    }
    .short-image {
        height: 140px;
        width: 150px;
        margin-left: 0px;
        margin-right: 30px;
        margin-top: 0px;
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"] .short-image {
            height: 350px;
            width: 419px;
            margin-left: 0px;
            margin-right: 30px;
            margin-top: 0px;
        }
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"] .details h3 {


            margin-left: 150px;
            margin-top: -270px;
            width: 800px;
            font-size: 20px;
            align: right;
            color: #000000;
            font-variant: small-caps;
        }
    }
    .details{

        margin-left: 150px;
        margin-top: -270px;
        width: 270px;
        font-size: 20px;
        align: right;
        color: #000000;
        font-variant: small-caps;
    }
    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"]  .sub1 {
            font-size: 40px;
            margin-top: 40px;
            color: #000000;
            margin-left: 20px;

        }
    }


    @media only screen and (max-width:441px) {
        /* For mobile phones: */
        [class*="col-"]  .sub1 {
            font-size: 18px;
            margin-top: -100px;
            margin-left: 335px;

        }
    }


    .sub1{
        font-size: 15px;
        align: right;
        margin-top: 40px;
        color: #000000;
        margin-left: 20px;
    }

    .detail1
    {
        font-size: 18px;
        margin-top: -20px;
        margin-left: 20px;
    }
    @media only screen and (max-width:1024px) {
        /* For mobile phones: */
        [class*="col-"].player {
            margin-top: 420px;
            margin-left: 0px;
            margin-right: -50px;
            width: 50%;
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
$category=get_the_category();


?>

<div class="row">           <!--Main div    -->
    <div class="lg-col-8 md-col-12 sm-col-12 xs-col-12" style="margin-top: 0px;">  <!-- 1st div divided into 66%size of the page-->

        <div class="feed-card">         <!-- feature image main holder-->
            <div class="single-thumbnail">  <!-- image size -->
				<?php $audio =get_field('audio_types');    //fetch podcast
				?>
                <img src="<?php echo $post_img; ?>">            <!-- fetch post image-->
                <amp-img src="<?php echo $post_img; ?>" height="100%" width="100%">
                </amp-img>
                <div class="fade">  <!-- fade transition on the image-->
                </div>
                <div class="post-content">          <!-- post content on the image main div-->
                    <!-- title of the podcast -->
                    <h3><?php echo $post_title ?></h3>
                    <p class="feed-subtitle"><?php echo $author ?></p>          <!-- author name -->
                    <p class="feed-subtitle"><?php echo $category?></p>            <!-- category type-->
                    <audio controls src="<?php echo $audio['url'];?>" width="auto" height="auto" class="player" controls controlsList="nodownload">
                        <!-- podcast playlist-->
                    </audio>
                    <p class="feed-content" style="margin-top:20px;  color:white;">         <!-- podcast description-->
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
							echo mb_strimwidth(get_the_content(), 0, 300, "...");
						endwhile; else:
							?>
						<?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="lg-col-4 md-col-10 sm-col-10 xs-col-10">        <!-- main div divded into 33% of the page -->
        <div class="right-side">
            <a href="<?php echo $next_post_url = get_permalink( get_adjacent_post(false,'',false)->ID );?>" class="next">
                UP NEXT        <!-- next option-->
            </a>

            <hr>   <!--hr tag-->

            <!--dynamic containers-->
			<?php

			$get_post = get_posts($post_args);

			foreach ( array_slice($get_post, 0, 4) as $val) {
				$post_img = get_the_post_thumbnail_url($val);
				$post_url = get_permalink($val);
				$post_title = get_the_title($val);
				$author= get_the_author($val);
				$category=get_the_category_by_ID($val);
				?>

                <a href="<?php echo $post_url;?>" >

                    <div class="short-card">        <!-- podcast option -->

                        <div class="short-image" style=" ">     <!-- podcast image-->
                            <img style="border-radius: 10px !important;"
                                 class="short-image"
                                 src="<?php print $post_img; ?>"
                                 width="100px"
                                 height="100px"
                                 alt=""
                                 align="left">

                            <!--svg play icon-->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 width="85.658"
                                 height="85.658"
                                 viewBox="0 0 85.658 85.658"
                                 class="icon"

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
                        <div class="details">     <!--podcast details -->
                            <p class="detail1"><?php echo $post_title?></p>     <!-- podcast title -->
                            <p class="sub1">  <!--author name-->
								<?php echo $author ?>

								<?php echo $category ?>
                            </p>
                            <p class="sub2"> <!--category option -->

                            </p>
                        </div>

                    </div></a>
			<?php } ?>
        </div>
    </div>

</div>
</body>







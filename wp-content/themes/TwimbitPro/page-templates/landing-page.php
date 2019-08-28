<?php

/**
 * Template Name: Landing Page
 *
 * The template for the page builder full-width.
 *
 * It contains header, footer and 100% content width.
 *
 * @package Twimbit Lite
 */

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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<style scoped>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:300,400&display=swap');

    html {
        font-family: 'Montserrat', sans-serif;
        line-height: 1.15;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
        width: fit-content;
        height: 100%;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        margin: 0;
        height: 100%;

    }

    .ap-o-news-card {
        display: flex;
        position: relative;
        flex-direction: column;
        height: 100%;
        background: #fff;
        width: 110%;
        box-shadow: 0px 8px 10px 0 rgba(0, 0, 0, .15);
        transition: box-shadow .3s cubic-bezier(.25, .1, .25, 1);
        border-radius: 5px;
    }

    .ap-o-news-card a {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .ap-o-news-title {
        line-height: 1.6rem;
        /* font-weight: 400; */
        /* color: #48525c; */
        font-size: .8125rem;
        font-weight: 700;
        text-transform: uppercase;
        padding: .625em 10px;
        color: #48525c;
        width: 100%;
        /* height: fit-content; */
    }

    .ap-o-news-image {
        width: fit-content;
        /* background-color: #005af0; */
    }

    .ap-o-news-headline h5 {
        padding: 0 24px;
        margin-top: 1em;
        margin-bottom: 0.5em;
        width: fit-content;
    }

    .ap-o-news-date {
        line-height: 1.6rem;
        font-weight: 400;
        color: #48525c;
        font-size: .875rem;
        padding: 0 24px;
        /* margin-top: auto; */
        margin-bottom: 1.5em;
        color: #48525c;
        width: fit-content;
    }

    .ap-o-news-image img {
        object-fit: cover;
        height: 100%;
        width: 100%;
    }

    /* Float four columns side by side */
    .column {
        /* float: left;
        width: 35%; */
        flex: 1 0 15em;
        padding: 2em 1em;
        text-decoration: none;
        display: inline-block;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
        -webkit-overflow-scrolling: touch;
        overflow-x: scroll;
        -webkit-overflow-scrolling: touch;
        display: flex;
        flex-wrap: nowrap;
        width: auto;
    }


    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
    }

    .feed-action {
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        /* bottom: 0;
        color: #FFF;
        position: absolute;
        top: 8px;
        right: 8px; */
        width: 100%;
    }

    .feed-button {
        font-size: initial;
    }

    .feed-wrap {
        flex-direction: row-reverse;
        display: flex;
        align-items: center;
    }

    .feed-button-in {
        /* margin-left: 8px; */
        /* border-radius: 30px; */
        /* background: #000; */
        transform: scale(.85);
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        box-shadow: 0 0 4px 1px rgba(255, 240, 240, 0.25);
        border-radius: 30px;
        background: #000;
        height: 51px;
        width: 51px;
    }

    .count {
        font-weight: 600;
        letter-spacing: 2px;
        font-size: 11px;
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        line-height: 1.3;
    }

    .atomic-heart {
        /* filter: invert(100%); */
        filter: invert(100%);
        width: 51px;
        height: 51px;
        background-repeat: no-repeat;
        background-size: 50px auto;
        background-position: 0 0;
        text-align: center;
        font-size: 26px;
        color: #000;
        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        -o-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-timing-function: steps(23, end);
        -moz-animation-timing-function: steps(23, end);
        -o-animation-timing-function: steps(23, end);
        animation-timing-function: steps(23, end);
    }

    .atomic-heart svg {
        transform: translate(0px, 7px) scale(0.7);
    }
</style>

<body>
<div class="row">
	<?php
	foreach ($get_trending as $val) {
		$trending_img = get_the_post_thumbnail_url($val);
		$trending_url = get_the_permalink($val);
		$trending_title = get_the_title($val);
		$type = get_post_type($val);
		$date = get_the_date();
		?>
        <div class="column">
            <div class="ap-o-news-card">
                <a href="#"></a>
                <div class="ap-o-news-title">
                    <div class="feed-action">
                        <div class="feed-button">
                            <div class="feed-wrap">
                                <!--                                    adding icon-->
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
                                <!-- adding type-->
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
                <div class="ap-o-news-image">
                    <img src="<?php echo $trending_img; ?>" alt="">
                </div>
                <div class="ap-o-news-headline">
                    <h5><?php echo $trending_title; ?></h5>
                </div>
                <div class="ap-o-news-date"><?php echo $date; ?></div>
            </div>
        </div>
	<?php } ?>
</div>
</body>

</html>
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

    body {
        font-family: 'Montserrat', sans-serif;
    }

    .ap-o-news-list {
        overflow-x: scroll;
        -webkit-overflow-scrolling: touch;
        display: flex;
        flex-wrap: nowrap;
        width: auto;
        padding: 20px;
    }

    .-rs {
        padding: 0 0 0 2em;
        text-decoration: none;
    }

    .ap-o-news-card {
        display: flex;
        flex-direction: column;
        /* height: 100%; */
        background: #fff;
        box-shadow: 0 15px 30px 0 rgba(0, 0, 0, .15);
        transition: box-shadow .3s cubic-bezier(.25, .1, .25, 1);
    }

    .ap-o-news-title {
        line-height: 1.6rem;
        font-weight: 400;
        color: #48525c;
        font-size: .8125rem;
        font-weight: 700;
        text-transform: uppercase;
        padding: .625em 24px;
        color: #48525c;
    }

    .ap-o-news-image {
        width: 100%;
        /* background-color: #005af0; */
    }

    .ap-o-news-headline {
        padding: 0 24px;
        margin-top: 1.375em;
    }

    .ap-o-news-date {
        line-height: 1.6rem;
        font-weight: 400;
        color: #48525c;
        font-size: .875rem;
        padding: 0 24px;
        margin-top: auto;
        margin-bottom: 1.5em;
        color: #48525c;
    }

    .ap-o-news-image img {
        object-fit: cover;
        height: 200px;
        width: 300px;
    }
</style>

<body>
    <div class="container">
        <div class="ap-o-news-list">
            <?php
            foreach ($get_trending as $val) {
                $trending_img = get_the_post_thumbnail_url($val);
                $trending_url = get_the_permalink($val);
                $trending_title = get_the_title($val);
                $type = get_post_type($val);
                ?>
                <a href="" class="-rs">
                    <div class="ap-o-news-card">
                        <div class="ap-o-news-title">Content type</div>
                        <div class="ap-o-news-image">
                            <img src="<?php echo $trending_img; ?>" alt="">
                        </div>
                        <h5 class="ap-o-news-headline"> Title</h5>
                        <div class="ap-o-news-date">July 10, 2019</div>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</body>

</html>
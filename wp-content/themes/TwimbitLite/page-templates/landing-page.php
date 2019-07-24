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
    }

    * {
        box-sizing: border-box;
        border: 1px solid red;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        margin: 0;
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
        height: 100%;
        background: #fff;
        width: 130%;
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
        width: max-content;
        height: fit-content;
    }

    .ap-o-news-image {
        width: fit-content;
        /* background-color: #005af0; */
    }

    .ap-o-news-headline {
        padding: 0 24px;
        margin-top: 1.375em;
        width: fit-content;
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
        padding: 0 30px;
        text-decoration: none;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: 0 -5px;
        display: flex;
        /* width: fit-content; */
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
</style>

<body>
    <div class="row">
        <?php
        foreach ($get_trending as $val) {
            $trending_img = get_the_post_thumbnail_url($val);
            $trending_url = get_the_permalink($val);
            $trending_title = get_the_title($val);
            $type = get_post_type($val);
            ?>
            <div class="column">
                <div class="ap-o-news-card">
                    <div class="ap-o-news-title">Content type</div>
                    <div class="ap-o-news-image">
                        <img src="<?php echo $trending_img; ?>" alt="">
                    </div>
                    <h5 class="ap-o-news-headline"> Title</h5>
                    <div class="ap-o-news-date">July 10, 2019</div>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>
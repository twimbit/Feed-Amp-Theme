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

        <div class="feed-card podcast-card">
            <div class="single-thumbnail">
                <amp-img src="<?php echo $post_img; ?>"></amp-img>
                <div class="fade"></div>
                <div class="feed-link">
                    <div class="feed-title"  style="text-decoration: none;">
                        <p class="feed-subtitle"><?php echo $post_title; ?></p>
                        <span>By <?php echo $author; ?></span>
                        <span></span>
                        <span style="text-decoration: none;"># <?php echo '<a href="' . esc_url( get_category_link( $category[0]->term_id ) ) . '">' . esc_html( $category[0]->name ) . '</a>'; ?>
                        </span>
                    </div>
                    <div class="audio">
                        <amp-audio controls src="<?php echo $audio['url']; ?>"
                                   height="auto"
                                   width="auto"
                                   autoplay="true"
                                   class="player"
                                   controls controlsList="nodownload" >
                            <!-- podcast playlist-->
                        </amp-audio>
                    </div>
                </div>
            </div>
        </div>

        <!-- lightbox container for description and share icon -->

        <div class="light2 container">
            <div class="light1">
                <amp-lightbox id="my-lightbox" layout="nodisplay">
                    <div class="overlay content" on="tap:my-lightbox.close" role="button" tabindex="0">
                        <p>
                            <?php
                                $char_limit = 300; //character limit
                                $content = $post->post_content; //contents saved in a variable
                                echo substr(strip_tags($content), 0, $char_limit);
                            ?>
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" class="cross1" xml:space="preserve">
                            <g id="Close">
                                <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                            </g>
                        </svg>
                    </div>
                    <p on="tap:my-lightbox.close">

                    </p>
                </amp-lightbox>
                <button on="tap:my-lightbox" class="description description1">
                    Description
                </button>
            </div>
            <div class="share1">
                <amp-lightbox id="my-lightbox1" layout="nodisplay">
                    <div class="overlay content" on="tap:my-lightbox1.close" role="button" tabindex="0">
                        <p>
                            <amp-social-share class="social1" height="auto" width="auto" style="margin-right:0.5em;" type="facebook"></amp-social-share>
                            <amp-social-share class="social1" height="auto" width="auto" style="margin-right:0.5em;" type="linkedin" width="60" height="44"></amp-social-share>
                            <amp-social-share class="social1" height="auto" width="auto" style="margin-right:0.5em;" type="twitter"></amp-social-share>
                            <amp-social-share class="social1" height="auto" width="auto" style="margin-right:0.5em;" type="whatsapp"></amp-social-share>
                            <amp-social-share class="social1" height="auto" width="auto" style="margin-right:0.5em;" type="email"></amp-social-share>
                        </p>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 212.982 212.982" style="enable-background:new 0 0 212.982 212.982;" class="cross1" xml:space="preserve">
                            <g id="Close">
                                <path style="fill-rule:evenodd;clip-rule:evenodd;" d="M131.804,106.491l75.936-75.936c6.99-6.99,6.99-18.323,0-25.312   c-6.99-6.99-18.322-6.99-25.312,0l-75.937,75.937L30.554,5.242c-6.99-6.99-18.322-6.99-25.312,0c-6.989,6.99-6.989,18.323,0,25.312   l75.937,75.936L5.242,182.427c-6.989,6.99-6.989,18.323,0,25.312c6.99,6.99,18.322,6.99,25.312,0l75.937-75.937l75.937,75.937   c6.989,6.99,18.322,6.99,25.312,0c6.99-6.99,6.99-18.322,0-25.312L131.804,106.491z"/>
                            </g>
                        </svg>
                    </div>
                    <p on="tap:my-lightbox.close">

                    </p>

                </amp-lightbox>
                <svg on="tap:my-lightbox1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 473.932 473.932" class="icon1" style="enable-background:new 0 0 473.932 473.932;" xml:space="preserve">
                    <g>
                        <g>
                            <path style="fill:#010002;" d="M385.513,301.214c-27.438,0-51.64,13.072-67.452,33.09l-146.66-75.002    c1.92-7.161,3.3-14.56,3.3-22.347c0-8.477-1.639-16.458-3.926-24.224l146.013-74.656c15.725,20.924,40.553,34.6,68.746,34.6    c47.758,0,86.391-38.633,86.391-86.348C471.926,38.655,433.292,0,385.535,0c-47.65,0-86.326,38.655-86.326,86.326    c0,7.809,1.381,15.229,3.322,22.412L155.892,183.74c-15.833-20.039-40.079-33.154-67.56-33.154    c-47.715,0-86.326,38.676-86.326,86.369s38.612,86.348,86.326,86.348c28.236,0,53.043-13.719,68.832-34.664l145.948,74.656    c-2.287,7.744-3.947,15.79-3.947,24.289c0,47.693,38.676,86.348,86.326,86.348c47.758,0,86.391-38.655,86.391-86.348    C471.904,339.848,433.271,301.214,385.513,301.214z"/>
                        </g>
                    </g>
                </svg>
            </div>
        </div>

    </div>

    <div class="lg-col-4 md-col-5 sm-col-5 xs-col-12">
        <!-- main div divded into 33% of the page -->
        <div class="right-side">

            <div class="head">
                <a href="<?php echo $next_post_url = get_permalink(get_adjacent_post(false, '', false)->ID); ?>" class="next">
                    up next
                    <!-- next option-->
                </a>
            </div>
            <hr>
            <!--hr tag-->

            <!--dynamic containers-->
            <?php

            $get_post = get_posts($post_args);

            foreach (array_slice($get_post, 0,) as $val) {
                $post_img = get_the_post_thumbnail_url($val);
                $post_url = get_permalink($val);
                $post_title = get_the_title($val);
                $author = get_the_author($val);
                $category = get_the_category();
                ?>

                <a href="<?php echo $post_url; ?>" style="text-decoration:none;">
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
                            <p class="detail1 ">
                                <?php echo $post_title; ?>
                            </p> <!-- podcast title -->
                            <div class="sub1">
                                <span style="margin-right: 10px;">By <?php echo $author; ?></span>
                                <span></span>
                                <span># <?php echo esc_html($category[0]->name); ?></span>
                            </div>
                        </div>

                    </div>
                </a>
            <?php } ?>
        </div>
    </div>

</div>
<?php
get_header();
$args = array(
    'numberposts' => 1,
    'category' => 0, //get_category_by_slug('nutshell')->term_id,
    'orderby' => 'date',
    'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'amp_story',
    'suppress_filters' => true,
);
$get_post_for_story = get_posts($args);


$post_args = array(
    'numberposts' => 50,
    'category' => get_category_by_slug('trending')->term_id,
    'orderby' => 'date',
    'order' => 'DESC', // the 1st array element will be 1st story(oldest story)
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => array('video', 'post', 'podcast', 'amp_story'),
    'suppress_filters' => true,
);
$get_post_feed = get_posts($post_args);


/* Function checks for nutshell is updated */
function check($get_post_for_story, $user_date_story)
{
    $get_story_published_date = $get_post_for_story->post_date;
    if ($user_date_story == $get_story_published_date && $_COOKIE['user_date_story']) {
        echo "user-visited";
    }
}
?>
<!-- Feed Tab -->
<!-- Stories section -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('#feed-button').className += ' active-nav';
        document.querySelector('#feed-nav').className += ' active-nav';
        let time = new Date();
        let h = time.getHours();
        console.log(h);
        if (h < 12) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php echo content_url() . '/themes/TwimbitPro/src/morning.jpeg'; ?>)"
        } else if (h >= 12 && h < 17) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php echo content_url() . '/themes/TwimbitPro/src/afternoon.jpg'; ?>)"
        } else if (h >= 17 && h < 19) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php echo content_url() . '/themes/TwimbitPro/src/evening.jpeg'; ?>)"
        } else {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php echo content_url() . '/themes/TwimbitPro/src/night.jpeg'; ?>)"
        }

    });
</script>
<style scoped>
    .nutshell-top {
        height: 183px;
        margin-top: 55px;
        position: relative;
        background-size: 100% 100%;
    }

    .nutshell-container-image {
        display: flex;
        flex-wrap: wrap;
        position: absolute;
        height: 183px;
        width: 100%;
        box-shadow: 0 0 15px 5px rgba(0, 0, 0, 0.16);
        background: linear-gradient(90deg, #ffffff00, white 50%)
    }

    .nutshell-inner {
        display: flex;
        height: 100%;
        flex-wrap: wrap
    }

    .nutshell-inner-first {
        display: flex;
        justify-content: center;
        position: relative;
        align-items: center;
        color: #FFFF
    }

    .nutshell-inner-second {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #FFFF
    }

    .nutshell-inner-first .date {
        border: 2px solid #FFFF;
        padding: 2.5rem 1rem;
        font-size: 4rem;
        margin-right: 1.5rem;
        border-radius: 20px;
        font-weight: 500
    }

    .nutshell-inner-first .month {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 500
    }

    .nutshell-inner-first .day {
        font-size: 2rem;
        font-weight: 600
    }

    .nutshell-svg {
        transform: translate(30px, 6px) scale(0.6)
    }

    .nutshell-today-text {
        font-size: 2.5rem;
        line-height: 3rem;
        text-align: center;
        margin-right: 5rem;
        color: #000;
        font-weight: 300;
        width: min-content;
        z-index: 4
    }

    .floating {
        animation-name: floating;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-timing-function: cubic-bezier(0.79, 0.01, 0.49, 0.98) margin-left: 30px;
        margin-top: 5px
    }

    .user-visited.b {
        fill: #a1a1a1;
    }

    .user-visited {
        animation-duration: 0s !important;
        transform: scale(0.4);
    }

    .user-visited .c {
        fill: #a1a1a1;
    }

    .user-visited .d {
        fill: #a1a1a1;
    }

    .user-visited .e {
        fill: #d3d6d8;
    }

    @keyframes floating {
        0% {
            transform: scale(0.6)
        }

        65% {
            transform: scale(0.7)
        }

        100% {
            transform: scale(0.6)
        }
    }

    @media (max-width:768px) {
        .nutshell-inner-second {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFFF
        }

        .nutshell-inner-first .date {
            border: 2px solid #FFFF;
            padding: 1.8rem .8rem;
            font-size: 3rem;
            margin-right: 1.5rem;
            border-radius: 20px
        }

        .nutshell-inner-first .month {
            font-size: 1.5rem;
            margin-bottom: .5rem
        }

        .nutshell-inner-first .day {
            font-size: 2rem;
            font-weight: 600
        }

        .nutshell-svg svg {
            transform: translate(75px, 6px)
        }

        .nutshell-today-text {
            font-size: 2rem;
            line-height: 2.5rem;
            text-align: center;
            margin-right: 8rem;
            color: #000;
            font-weight: 300;
            width: min-content
        }
    }

    @keyframes floating {
        0% {
            transform: scale(0.4)
        }

        65% {
            transform: scale(0.5)
        }

        100% {
            transform: scale(0.4)
        }
    }

    @media (max-width:40.06rem) {
        .nutshell-inner-first {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            color: #FFFF
        }

        .nutshell-top {
            background-size: 235% 100%;
        }

        .floating {
            order: 1
        }

        .nutshell-inner-second {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            color: #FFFF;
            height: 100%
        }

        .month-day {
            text-align: center
        }

        .nutshell-inner-first .date {
            border: 2px solid #FFFF;
            padding: 1.2rem .5rem;
            font-size: 2rem;
            margin-bottom: 1rem;
            margin-right: 0;
            border-radius: 20px
        }

        .nutshell-inner-first .month {
            font-size: 1.5rem;
            margin-bottom: .5rem
        }

        .nutshell-inner-first .day {
            font-size: 1.5rem;
            font-weight: 600
        }

        .nutshell-svg svg {
            transform: translate(0px, -44px)
        }

        .nutshell-today-text {
            font-size: 1.8rem;
            line-height: 2.2rem;
            text-align: center;
            order: 0;
            margin-right: 0;
            position: relative;
            top: 1.4rem;
            color: #000;
            font-weight: 300;
            width: min-content
        }
    }
</style>
<!-- New Nutshell Section -->
<section id="new-nutshell" class="nutshell-top">
    <div class="fade"></div>
    <div class="nutshell-container-image">
        <div class="col-6  nutshell-inner-first">
            <div class="date"><?php echo current_time('d');  ?></div>
            <div class="month-day">
                <div class="month"><?php echo current_time('M');  ?></div>
                <div class="day"><?php echo current_time('l');  ?></div>
            </div>
        </div>
        <div class=" col-6  nutshell-inner-second">
            <div class="nutshell-svg floating <?php check($get_post_for_story[0], $_COOKIE['user_date_story']); ?>">
                <a href="<?php echo get_the_permalink($get_post_for_story[0]); ?>?story=nutshell">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="241.929" height="156.918" viewBox="0 0 241.929 156.918">
                        <defs>
                            <style>
                                .a {
                                    opacity: 0.88;
                                }

                                .b,
                                .c,
                                .d {
                                    fill: #00485a;
                                }

                                .b {
                                    opacity: 0.12;
                                }

                                .c {
                                    opacity: 0.51;
                                }

                                .e {
                                    fill: #f16b6f;
                                }

                                .f {
                                    filter: url(#k);
                                }

                                .g {
                                    filter: url(#i);
                                }

                                .h {
                                    filter: url(#g);
                                }

                                .i {
                                    filter: url(#e);
                                }

                                .j {
                                    filter: url(#c);
                                }

                                .k {
                                    filter: url(#a);
                                }
                            </style>
                            <filter id="a" x="118.185" y="16.587" width="123.744" height="123.744" filterUnits="userSpaceOnUse">
                                <feOffset dy="3" input="SourceAlpha" />
                                <feGaussianBlur stdDeviation="3" result="b" />
                                <feFlood flood-opacity="0.361" />
                                <feComposite operator="in" in2="b" />
                                <feComposite in="SourceGraphic" />
                            </filter>
                            <filter id="c" x="0" y="16.587" width="123.744" height="123.744" filterUnits="userSpaceOnUse">
                                <feOffset dy="3" input="SourceAlpha" />
                                <feGaussianBlur stdDeviation="3" result="d" />
                                <feFlood flood-opacity="0.361" />
                                <feComposite operator="in" in2="d" />
                                <feComposite in="SourceGraphic" />
                            </filter>
                            <filter id="e" x="80.863" y="8.294" width="140.331" height="140.331" filterUnits="userSpaceOnUse">
                                <feOffset dy="3" input="SourceAlpha" />
                                <feGaussianBlur stdDeviation="3" result="f" />
                                <feFlood flood-opacity="0.361" />
                                <feComposite operator="in" in2="f" />
                                <feComposite in="SourceGraphic" />
                            </filter>
                            <filter id="g" x="20.734" y="8.294" width="140.331" height="140.331" filterUnits="userSpaceOnUse">
                                <feOffset dy="3" input="SourceAlpha" />
                                <feGaussianBlur stdDeviation="3" result="h" />
                                <feFlood flood-opacity="0.361" />
                                <feComposite operator="in" in2="h" />
                                <feComposite in="SourceGraphic" />
                            </filter>
                            <filter id="i" x="43.542" y="0" width="156.918" height="156.918" filterUnits="userSpaceOnUse">
                                <feOffset dy="3" input="SourceAlpha" />
                                <feGaussianBlur stdDeviation="3" result="j" />
                                <feFlood flood-opacity="0.361" />
                                <feComposite operator="in" in2="j" />
                                <feComposite in="SourceGraphic" />
                            </filter>
                            <filter id="k" x="96.414" y="38.358" width="71.908" height="82.276" filterUnits="userSpaceOnUse">
                                <feOffset dy="3" input="SourceAlpha" />
                                <feGaussianBlur stdDeviation="3" result="l" />
                                <feFlood flood-opacity="0.161" />
                                <feComposite operator="in" in2="l" />
                                <feComposite in="SourceGraphic" />
                            </filter>
                        </defs>
                        <g class="a" transform="translate(-235 -181)">
                            <g class="k" transform="matrix(1, 0, 0, 1, 235, 181)">
                                <path class="b" d="M52.872,0a52.872,52.872,0,0,1,52.872,52.872,53.689,53.689,0,0,1-2.8,17.026A52.878,52.878,0,1,1,52.872,0Z" transform="translate(127.18 22.59)" />
                            </g>
                            <g class="j" transform="matrix(1, 0, 0, 1, 235, 181)">
                                <path class="b" d="M52.872,0a52.872,52.872,0,0,1,52.872,52.872,53.689,53.689,0,0,1-2.8,17.026A52.878,52.878,0,1,1,52.872,0Z" transform="translate(9 22.59)" />
                            </g>
                            <g class="i" transform="matrix(1, 0, 0, 1, 235, 181)">
                                <circle class="c" cx="61.166" cy="61.166" r="61.166" transform="translate(89.86 14.29)" />
                            </g>
                            <g class="h" transform="matrix(1, 0, 0, 1, 235, 181)">
                                <circle class="c" cx="61.166" cy="61.166" r="61.166" transform="translate(29.73 14.29)" />
                            </g>
                            <g class="g" transform="matrix(1, 0, 0, 1, 235, 181)">
                                <circle class="d" cx="69.459" cy="69.459" r="69.459" transform="translate(52.54 6)" />
                            </g>
                            <g class="f" transform="matrix(1, 0, 0, 1, 235, 181)">
                                <path class="e" d="M31.279,1.441a1,1,0,0,1,1.718,0L63.374,52.4a1,1,0,0,1-.859,1.512H1.76A1,1,0,0,1,.9,52.4Z" transform="translate(159.32 44.36) rotate(90)" />
                            </g>
                        </g>
                    </svg></a></div>

            <div class="nutshell-today-text">
                Today's Nutshell
            </div>
        </div>
    </div>
</section>
<?php //check($get_post_for_story[0], $_COOKIE['user_date_story']);
?>
<section id="stories" class="hide">
    <div class="container">
        <div class="story-section">
            <h4 style="margin-left:10px; font-size:16px;">Nutshell</h4>
            <amp-carousel class="story-carousel" type="carousel" controls height="120">
                <?php
                foreach ($get_post_for_story as $val) {
                    $story_img = get_the_post_thumbnail_url($val, 'thumbnail');
                    $story_url = get_the_permalink($val);
                    $story_title = get_the_title($val);
                    ?>
                    <div class="amp-story-carousel">
                        <amp-img src="<?php echo $story_img; ?>" height="95" width="95" alt="<?php echo $val->ID; ?>"></amp-img>
                        <a href="<?php echo $story_url; ?>" aria-label="<?php echo $story_title; ?>"></a>
                    </div>
                <?php } ?>
            </amp-carousel>
        </div>
    </div>
</section>




<div class="archive-filter-card-container container" style="padding-left:0px;padding-right:0px">
    <!-- Filter section -->
    <section id="filter">
        <div class="mt4">
            <div class="col-12" style="min-width: fit-content;">
                <div class="menu">
                    <ul>
                        <li class="menu-item">
                            <button class="tablinks active" id="allButton" onclick="toggler(event,'All')" name="all-toggle"> ALL</button>
                        </li>
                        <li class="menu-item">
                            <button class="tablinks" onclick="toggler(event,'post-toggle')" name="post-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 41.817 37.171">
                                    <path class="a" d="M3,31.878H14.616V27.232H3Zm15.1,0H29.716V27.232H18.1Zm15.1,0H44.817V27.232H33.2ZM3,41.171H7.646V36.524H3Zm9.293,0h4.646V36.524H12.293Zm9.293,0h4.646V36.524H21.585Zm9.293,0h4.646V36.524H30.878Zm9.293,0h4.646V36.524H40.171ZM3,22.585H21.585V17.939H3Zm23.232,0H44.817V17.939H26.232ZM3,4v9.293H44.817V4Z" transform="translate(-3 -4)" />
                                </svg><br> INSIGHTS</button>
                        </li>
                        <li class="menu-item">
                            <button class="tablinks" onclick="toggler(event,'video-toggle')" name="video-toggle"> <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 49.131 49.131">
                                    <path class="a" d="M26.566,2A24.566,24.566,0,1,0,51.131,26.566,24.574,24.574,0,0,0,26.566,2ZM21.652,37.62V15.511L36.392,26.566Z" transform="translate(-2 -2)" />
                                </svg><br>VIDEOS</button>
                        </li>
                        <li class="menu-item">
                            <button class="tablinks" onclick="toggler(event,'podcast-toggle')" name="podcast-toggle"> <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 48.491 39.675">
                                    <path class="a" d="M45.083,3H5.408A4.421,4.421,0,0,0,1,7.408V38.266a4.421,4.421,0,0,0,4.408,4.408H45.083a4.421,4.421,0,0,0,4.408-4.408V7.408A4.421,4.421,0,0,0,45.083,3Zm0,35.266H5.408V7.408H45.083ZM16.429,29.45a6.568,6.568,0,0,1,8.817-6.216V9.612H36.266v4.408H29.654v15.5a6.613,6.613,0,0,1-13.225-.066Z" transform="translate(-1 -3)" />
                                </svg><br>PODCASTS</button>
                        </li>
                        <li class="menu-item">
                            <button class="tablinks" onclick="toggler(event,'amp_story-toggle')" name="story-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 36 32">
                                    <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                </svg><br>STORIES</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Feeds cards -->
    <section id="cards-feed" class="mb4">
        <div class="container mt2" style="margin-bottom: 6rem;">
            <div>
                <!--            Fetching all the post for Feed-->
                <?php
                foreach ($get_post_feed as $val) {
                    $post_img = get_the_post_thumbnail_url($val, 'medium_large');
                    $post_url = get_the_permalink($val);
                    $post_title = get_the_title($val);
                    $type = get_post_type($val);
                    $category =  get_the_category_by_ID($val);
                    ?>
                    <div class="feed-card feed-toggle fade-animate <?php echo $type . '-toggle' ?>">
                        <div class="single-thumbnail">
                            <amp-img src="<?php echo $post_img; ?>" layout="fill" alt="<?php echo $val->ID; ?>"></amp-img>
                            <div class="fade"></div>
                            <a href="<?php echo $post_url; ?>" class="feed-link ">
                                <div class="feed-title">
                                    <h3><?php echo $post_title; ?></h3>

                                    <p class="feed-subtitle">#<?php echo get_the_category($val)[0]->cat_name; ?></p>

                                </div>
                            </a>
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
                                                    <svg viewBox="0 0 36 32" style="    transform: translate(0.5px, 2px) scale(0.6);">
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
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
<?php
get_header();

/* ==========Feed tab php start==============*/



/* Function checks for nutshell is updated */
function check($get_post_for_story, $user_date_story)
{
    $get_story_published_date = $get_post_for_story->post_date;
    if ($user_date_story == $get_story_published_date && $_COOKIE['user_date_story']) {
        echo "user-visited";
    }
}
/* ==============feed tab php end================ */


/* ==============explore tab php start=========== */







/* ==============explore tab php end============= */

//locate_template(array('page-templates/pf.php',true));
include "page-templates/pf.php";

?>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('#feed-button').className += ' active-nav';
        document.querySelector('#feed-nav').className += ' active-nav';
        let time = new Date();
        let h = time.getHours();
        // console.log(h);
        if (h < 12) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/src/morning.jpeg'; ?>)"
        } else if (h >= 12 && h < 17) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/src/afternoon.jpg'; ?>)"
        } else if (h >= 17 && h < 19) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/src/evening.jpeg'; ?>)"
        } else {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/src/night.jpeg'; ?>)"
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

<!-- This is feed section -->
<div id="feed-tab-section">
    <!-- New Nutshell Section -->
    <section id="new-nutshell" class="nutshell-top">
        <div class="fade"></div>
     <?php
     echo getNutshell();
     ?>
    </section>

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
                                <button class="tablinks active" on="tap:video.hide(),insight.show(),podcast.hide(),story.hide()" onclick="toggler(event,'insight')" name="post-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 41.817 37.171">
                                        <path class="a" d="M3,31.878H14.616V27.232H3Zm15.1,0H29.716V27.232H18.1Zm15.1,0H44.817V27.232H33.2ZM3,41.171H7.646V36.524H3Zm9.293,0h4.646V36.524H12.293Zm9.293,0h4.646V36.524H21.585Zm9.293,0h4.646V36.524H30.878Zm9.293,0h4.646V36.524H40.171ZM3,22.585H21.585V17.939H3Zm23.232,0H44.817V17.939H26.232ZM3,4v9.293H44.817V4Z" transform="translate(-3 -4)" />
                                    </svg> INSIGHTS</button>
                            </li>
                            <li class="menu-item">
                                <button class="tablinks" onclick="toggler(event,'video')" on="tap:video.show(),insight.hide(),podcast.hide(),story.hide()" name="video-toggle"> <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 49.131 49.131">
                                        <path class="a" d="M26.566,2A24.566,24.566,0,1,0,51.131,26.566,24.574,24.574,0,0,0,26.566,2ZM21.652,37.62V15.511L36.392,26.566Z" transform="translate(-2 -2)" />
                                    </svg>VIDEOS</button>
                            </li>
                            <li class="menu-item">
                                <button class="tablinks" onclick="toggler(event,'podcast')" on="tap:video.hide(),insight.hide(),podcast.show(),story.hide()" name="podcast-toggle"> <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 48.491 39.675">
                                        <path class="a" d="M45.083,3H5.408A4.421,4.421,0,0,0,1,7.408V38.266a4.421,4.421,0,0,0,4.408,4.408H45.083a4.421,4.421,0,0,0,4.408-4.408V7.408A4.421,4.421,0,0,0,45.083,3Zm0,35.266H5.408V7.408H45.083ZM16.429,29.45a6.568,6.568,0,0,1,8.817-6.216V9.612H36.266v4.408H29.654v15.5a6.613,6.613,0,0,1-13.225-.066Z" transform="translate(-1 -3)" />
                                    </svg>PODCASTS</button>
                            </li>
                            <li class="menu-item">
                                <button class="tablinks" on="tap:video.hide(),insight.hide(),podcast.hide(),story.show()" onclick="toggler(event,'story')" name="story-toggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="41.817" height="37.171" viewBox="0 0 36 32">
                                        <path d="M7.111 0h21.333v32h-21.333v-32zM9.481 2.37v27.259h16.593v-27.259h-16.593zM0 4.741h2.37v22.519h-2.37v-22.519zM33.185 4.741h2.37v22.519h-2.37v-22.519z"></path>
                                    </svg>STORIES</button>
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
                    <!--            Fetching all post-->
                    <div id="insight" class="tabcontent">
                        <?php echo getAllPosts(); ?>
                    </div>

                    <!--            Fetching all video-->
                    <div id="video" class="tabcontent" hidden>
                        <?php

                            ?>
                    </div>

                    <!--            Fetching all podcast-->
                    <div id="podcast" class="tabcontent" hidden>
                        <?php
                        echo getAllPodcasts();
                        ?>
                    </div>

                    <!--            Fetching all story-->
                    <div id="story" class="tabcontent" hidden>
                        <?php
                        echo getAllStoriess();
                        ?>

                    </div>
                </div>
            </div>
        </section>

    </div>

</div>

<!-- explore section -->
<div id="explore-tab-section" hidden>
    <section id="explore">
        <div class="container" style="margin-top:5rem">
            <div class="section-heading">
                <h3 class="explore-title">Trending</h3>
                <hr class="divider">
            </div>
            <amp-carousel class="treanding-carousel d-lg-none d-md-none" type="slides" controls height="400">
                <?php
                echo getAllExplores();
                   ?>

            </amp-carousel>
        </div>


    </section>
</div>
<?php get_footer(); ?>
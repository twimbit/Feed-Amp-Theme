<?php
/**
 * Template Name: Self template Events
 *
 * The template for the page builder full-width.
 *
 * It contains header, footer and 100% content width.
 *
 * @package Neve
 */

get_header();

global $check_help;
$check_help=0;


if(isset($_GET['loadmore_insights']))
{
    loadmore_insights($_GET['loadmore_insights']);
}
else{
    loadfirst_insights();
}
function loadmore_insights($id_of_post)
{
    $first_story = get_post($id_of_post);

    // to loop posts
    $loop_length = 4;  //specify number of posts ahead you want to display
    $next_post_to_display_on_home = $first_story;

    global $post;
    $post = $next_post_to_display_on_home;
    setup_postdata($post);

    for ($loop_start = 1; $loop_start <= $loop_length; $loop_start++)
    {
        echo ' <div class="posts-grid-post-blog posts-grid-post-plain"><div class="posts-grid-post"><div class="posts-grid-post-image">';
        echo '<a href="';
        echo get_permalink($next_post_to_display_on_home);
        echo '"> ';
        $urlCurrent = $_SERVER['REQUEST_URI'];
        if (strcmp(substr($urlCurrent, -3), 'amp') !== 0) {
            echo '<img src="';
            echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID);
            echo '" width="500px" height="400px">';
        } else {
            echo '<amp-img src="';
            echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID);
            echo '" alt="Post 4" width="500px" height="400px" >';
        }


        echo '</a>';
        echo '</div>';

        echo '<div class="posts-grid-post-body"> ';
        echo '<h5 class="posts-grid-post-title"><a href="';
        echo get_permalink($next_post_to_display_on_home);
        echo '">';
        echo get_the_title($next_post_to_display_on_home);
        echo '</a>';
        echo '</h5> ';
        echo '<p class="posts-grid-post-description">';
        $content_some = get_the_content(null, null, $next_post_to_display_on_home);

        echo wp_trim_words($content_some, 5, '...');
        echo '</p>';
        echo '</div> ';
        echo '</div> ';
        echo '</div>';

        if( true)
        {
            $next_post_to_display_on_home = get_previous_post();
        }



        $args = array(
            'numberposts' => 2,
            'category' => 0,
            'orderby' => 'date',
            'order' => 'ASC', // Last post
            'include' => array(),
            'exclude' => array(),
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'event',
            'suppress_filters' => true,
        );
        $get_post_for_story = get_posts($args);
        $last_post = $get_post_for_story[0];  // the last post



        if (get_permalink($last_post) === get_permalink($next_post_to_display_on_home)) {
            $loop_start = $loop_length - 1;
            global $post;
            $post = $next_post_to_display_on_home;
            setup_postdata($post);
            global $check_help;
            $check_help=1;
        } else {
            if(true)
            {
                global $post;
                $post = $next_post_to_display_on_home;
                setup_postdata($post);
            }

        }



    }
}

?>


    <div class="wp-block-themeisle-blocks-advanced-columns has-undefined-columns has-desktop-undefined-layout has-tablet-equal-layout has-mobile-equal-layout has-default-gap has-vertical-unset"
         id="wp-block-themeisle-blocks-advanced-columns-3d106c49"
         style="border-width:0px;border-style:solid;border-color:#000000;border-radius:0px;justify-content:unset">
        <div class="wp-themeisle-block-overlay" style="opacity:0.5;mix-blend-mode:normal"></div>
        <div class="innerblocks-wrap"></div>
    </div>
    <div class="wp-block-themeisle-blocks-advanced-columns has-undefined-columns has-desktop-undefined-layout has-tablet-equal-layout has-mobile-equal-layout has-default-gap has-vertical-unset"
         id="wp-block-themeisle-blocks-advanced-columns-1512c196"
         style="border-width:0px;border-style:solid;border-color:#000000;border-radius:0px;justify-content:unset">
        <div class="wp-themeisle-block-overlay" style="opacity:0.5;mix-blend-mode:normal"></div>
        <div class="innerblocks-wrap"></div>
    </div>

    <!---------------------      Section For Displaying posts in grid list          -------------------------------->

    <div class="wp-block-themeisle-blocks-posts-grid is-grid posts-grid-columns-2">


        <! ------------- Section For Individual Posts ----------------- >

        <?php

        function loadfirst_insights()
        {

            $args = array(
                'numberposts' => 2,
                'category' => 0,
                'orderby' => 'date',
                'order' => 'DESC', // Latest post 1st
                'include' => array(),
                'exclude' => array(),
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'event',
                'suppress_filters' => true,
            );
            $get_post_for_story = get_posts($args);
            $first_story = $get_post_for_story[0]; // 0 will give the 1st  story here ( oldest story)

            // to loop post in bookend
            $loop_length = 10;  //specify number of posts ahead you want to display
            global $post;
            $next_post_to_display_on_home = $first_story;
            $post = $next_post_to_display_on_home;
            for ($loop_start = 1; $loop_start <= $loop_length; $loop_start++) {


                echo ' <div class="posts-grid-post-blog posts-grid-post-plain"><div class="posts-grid-post"><div class="posts-grid-post-image">';
                echo '<a href="';
                echo get_permalink($next_post_to_display_on_home);
                echo '"> ';
                $urlCurrent = $_SERVER['REQUEST_URI'];
                if (strcmp(substr($urlCurrent, -3), 'amp') !== 0) {
                    echo '<img src="';
                    echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID);
                    echo '" width="500px" height="400px">';
                } else {
                    echo '<amp-img src="';
                    echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID);
                    echo '" alt="Post 4" width="500px" height="400px" >';
                }


                echo '</a>';
                echo '</div>';

                echo '<div class="posts-grid-post-body"> ';
                echo '<h5 class="posts-grid-post-title"><a href="';
                echo get_permalink($next_post_to_display_on_home);
                echo '">';
                echo get_the_title($next_post_to_display_on_home);
                echo '</a>';
                echo '</h5> ';
                echo '<p class="posts-grid-post-description">';
                $content_some = get_the_content(null, null, $next_post_to_display_on_home);

                echo wp_trim_words($content_some, 5, '...');
                echo '</p>';
                echo '</div> ';
                echo '</div> ';
                echo '</div>';


                $next_post_to_display_on_home = get_previous_post();

                $args = array(
                    'numberposts' => 2,
                    'category' => 0,
                    'orderby' => 'date',
                    'order' => 'ASC', // Last post
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'event',
                    'suppress_filters' => true,
                );
                $get_post_for_story = get_posts($args);
                $last_post = $get_post_for_story[0];  // the last post



                if (get_permalink($last_post) === get_permalink($next_post_to_display_on_home))
                {
                    global $check_help;
                    $check_help=1;
                    $loop_start = $loop_length - 1;

                    global $post;
                    $post = $next_post_to_display_on_home;
                    setup_postdata($post);


                } else {
                    global $post;
                    $post = get_previous_post();
                    setup_postdata($post);
                }





            }

        }

        ?>


    </div>
<?php
$current_page_last_post = get_post();
$current_page_last_post_id = $current_page_last_post->ID;
$args = array(
    'numberposts' => 1,
    'category' => 0,
    'orderby' => 'date',
    'order' => 'ASC', // Last post
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'event',
    'suppress_filters' => true,
);
$get_post_for_story = get_posts($args);
//$last_post=$get_post_for_story[0];  // the last post


$last_post = $get_post_for_story[0];
global $check_help;

if (get_permalink($last_post) === get_permalink($current_page_last_post) || $check_help===1)
{
    echo '<a>No More Events</a>';
}
else
{
    $current_page_last_post_id_string = "?loadmore_insights=" . $current_page_last_post_id;
    echo '<a href="';echo $current_page_last_post_id_string;echo '" target="_self">Load More Button</a>';
}

?>

    <! ---------------------       Section for Posts Ended         -------------------------------- >

<?php

get_footer();
?>
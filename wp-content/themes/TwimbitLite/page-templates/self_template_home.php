<?php
/**
 * Template Name: Self template Home
 *
 * The template for the page builder full-width.
 *
 * It contains header, footer and 100% content width.
 *
 * @package Neve
 */

get_header();

?>


<div class="wp-block-themeisle-blocks-advanced-columns has-undefined-columns has-desktop-undefined-layout has-tablet-equal-layout has-mobile-equal-layout has-default-gap has-vertical-unset" id="wp-block-themeisle-blocks-advanced-columns-3d106c49" style="border-width:0px;border-style:solid;border-color:#000000;border-radius:0px;justify-content:unset"><div class="wp-themeisle-block-overlay" style="opacity:0.5;mix-blend-mode:normal"></div><div class="innerblocks-wrap"></div></div>






<!---------------------      Section For Displaying posts in grid list          -------------------------------->

<div class="wp-block-themeisle-blocks-posts-grid is-grid posts-grid-columns-2">




    <! -------------   Section For Individual Posts ----------------- >

    <?php


    $args = array(
        'numberposts'      => 2,
        'category'         => 0,
        'orderby'          => 'date',
        'order'            => 'DESC', // the 1st array element will be 1st story(oldest story)
        'include'          => array(),
        'exclude'          => array(),
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'post',
        'suppress_filters' => true,
    );
    $get_post_for_story=get_posts($args);
    $first_story=$get_post_for_story[0]; // 0 will give the 1st  story here ( oldest story)

    // to loop post in bookend
    $loop_length=4;  //specify number of posts ahead you want to display
    $check_help=0;    //require as a checkpoint to follow different paths in loop
    global $post;
    $next_post_to_display_on_home=$first_story;
    $revert_post_content=$post;  //save current global post content to setback changes to current post after loop execution ends
    $post=$next_post_to_display_on_home;
    for($loop_start = 1; $loop_start <= $loop_length; $loop_start++)
    {


        echo ' <div class="posts-grid-post-blog posts-grid-post-plain"><div class="posts-grid-post"><div class="posts-grid-post-image">' ;
        echo   '<a href="'; echo get_permalink($next_post_to_display_on_home); echo'"> ';
        $urlCurrent=$_SERVER['REQUEST_URI'];
        if(strcmp(substr($urlCurrent,-3), 'amp') !== 0)
        {
            echo '<img src="';echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID); echo '" width="500px" height="400px">';
        }
        else
        {
            echo '<amp-img src="';echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID); echo '" alt="Post 4" width="500px" height="400px" >';
        }


        echo'</a>';
        echo  '</div>';

        echo '<div class="posts-grid-post-body"> ';
        echo           '<h5 class="posts-grid-post-title"><a href="'; echo get_permalink($next_post_to_display_on_home); echo'">';echo get_the_title( $next_post_to_display_on_home );echo'</a>';
        echo       '</h5> ';
        echo   '<p class="posts-grid-post-description">';
        $content_some = get_the_content(null,null,$next_post_to_display_on_home);

        echo wp_trim_words($content_some,5,'...' );echo '</p>';
        echo '</div> ';
        echo  '</div> ';
        echo '</div>';



        global $post;
        $post = get_previous_post();
        setup_postdata( $post );
        $next_post_to_display_on_home=$post;


    }

    ?>



</div>

<! ---------------------       Section for Posts Ended         -------------------------------- >


<! -------------   Section For Individual Stories ----------------- >
<div class="wp-block-themeisle-blocks-posts-grid is-grid posts-grid-columns-2">
    <?php


    $args = array(
        'numberposts'      => 2,
        'category'         => 0,
        'orderby'          => 'date',
        'order'            => 'ASC', // the 1st array element will be 1st story(oldest story)
        'include'          => array(),
        'exclude'          => array(),
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'amp_story',
        'suppress_filters' => true,
    );
    $get_post_for_story=get_posts($args);
    $first_story=$get_post_for_story[0]; // 0 will give the 1st  story here ( oldest story)

    // to loop post in bookend
    $loop_length=4;  //specify number of posts ahead you want to display
    $check_help=0;    //require as a checkpoint to follow different paths in loop
    global $post;
    $next_post_to_display_on_home=$first_story;
    $revert_post_content=$post;  //save current global post content to setback changes to current post after loop execution ends
    $post=$next_post_to_display_on_home;
    for($loop_start = 1; $loop_start <= $loop_length; $loop_start++)
    {


        echo ' <div class="posts-grid-post-blog posts-grid-post-plain"><div class="posts-grid-post"><div class="posts-grid-post-image">' ;
        echo   '<a href="'; echo get_permalink($next_post_to_display_on_home); echo'"> ';

        $urlCurrent=$_SERVER['REQUEST_URI'];


        if(strcmp(substr($urlCurrent,-3), 'amp') !== 0)
        {echo '<img src="';echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID); echo '" width="150px" height="300px">';}
        else{echo '<amp-img src="';echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID); echo '" width="150px" height="300px">';}





        echo'</a>';
        echo  '</div>';

        echo '<div class="posts-grid-post-body"> ';
        echo           '<h5 class="posts-grid-post-title"><a href="'; echo get_permalink($next_post_to_display_on_home); echo'">';echo get_the_title( $next_post_to_display_on_home );echo'</a>';
        echo       '</h5> ';
        echo   '<p class="posts-grid-post-description">';
        $content_some = get_the_content(null,null,$next_post_to_display_on_home);

        //  echo wp_trim_words($content_some,5,'...' );
        echo '</p>';
        echo '</div> ';
        echo  '</div> ';
        echo '</div>';


        global $post;

        $post = get_next_post();
        if(get_permalink($post)===get_permalink($next_post_to_display_on_home))
        {$loop_start=$loop_length+1;}
        setup_postdata( $post );
        $next_post_to_display_on_home=$post;


    }

    ?>
</div>
<!---------------------       Section for Stories Ended         -------------------------------->


<div class="wp-block-themeisle-blocks-posts-grid is-grid posts-grid-columns-2">




    <! -------------   Section For Individual Events ----------------- >

    <?php


    $args = array(
        'numberposts'      => 2,
        'category'         => 0,
        'orderby'          => 'date',
        'order'            => 'DESC', // the 1st array element will be 1st story(oldest story)
        'include'          => array(),
        'exclude'          => array(),
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'event',
        'suppress_filters' => true,
    );
    $get_post_for_story=get_posts($args);
    $first_story=$get_post_for_story[0]; // 0 will give the 1st  story here ( oldest story)

    // to loop post in bookend
    $loop_length=4;  //specify number of posts ahead you want to display
    $check_help=0;    //require as a checkpoint to follow different paths in loop
    global $post;
    $next_post_to_display_on_home=$first_story;
    $revert_post_content=$post;  //save current global post content to setback changes to current post after loop execution ends
    $post=$next_post_to_display_on_home;
    for($loop_start = 1; $loop_start <= $loop_length; $loop_start++)
    {


        echo ' <div class="posts-grid-post-blog posts-grid-post-plain"><div class="posts-grid-post"><div class="posts-grid-post-image">' ;
        echo   '<a href="'; echo get_permalink($next_post_to_display_on_home); echo'"> ';
        $urlCurrent=$_SERVER['REQUEST_URI'];
        if(strcmp(substr($urlCurrent,-3), 'amp') !== 0)
        {
            echo '<img src="';echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID); echo '" width="500px" height="400px">';
        }
        else
        {
            echo '<amp-img src="';echo get_the_post_thumbnail_url($next_post_to_display_on_home->ID); echo '" alt="Post 4" width="500px" height="400px" >';
        }


        echo'</a>';
        echo  '</div>';

        echo '<div class="posts-grid-post-body"> ';
        echo           '<h5 class="posts-grid-post-title"><a href="'; echo get_permalink($next_post_to_display_on_home); echo'">';echo get_the_title( $next_post_to_display_on_home );echo'</a>';
        echo       '</h5> ';
        echo   '<p class="posts-grid-post-description">';
        $content_some = get_the_content(null,null,$next_post_to_display_on_home);

        echo wp_trim_words($content_some,5,'...' );echo '</p>';
        echo '</div> ';
        echo  '</div> ';
        echo '</div>';



        global $post;
        $post = get_previous_post();
        if(get_permalink($post)===get_permalink($next_post_to_display_on_home))
        {$loop_start=$loop_length+1;}
        setup_postdata( $post );
        $next_post_to_display_on_home=$post;


    }

    ?>




<!---------------------       Section for Events Ended         -------------------------------->




<?php
/*if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'pagebuilder' );
	}
}*/



get_footer();
?>







 













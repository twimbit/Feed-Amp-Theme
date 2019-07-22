<<<<<<< HEAD
<?php
/*
 * The template for displaying all video template
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

$video = get_field('video_file');

?>

<div class="row video">
	<!--Main div    -->
	<div class="lg-col-7 md-col-7 sm-col-7 xs-col-12 podcast-cover">
		<!-- 1st div divided into 66%size of the page-->

		<div class="feed-card podcast-card">
            <div class="video-player">

                <amp-video id="myVideo"
                           controls
                           width="1280"
                           height="720"
                           layout="responsive"
                           src="<?php echo $video['url']; ?>">
                </amp-video>


                    <amp-img class="poster-image"
                             layout="responsive"
                             src="/static/samples/img/bullfinch_poster.jpg"></amp-img>
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


					</div>
				</a>
			<?php } ?>
		</div>
	</div>
</div>


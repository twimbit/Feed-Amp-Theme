<?php get_header(); ?>
<?php
$args = array(
	'numberposts' => 1,
	'category' => 0,
	'orderby' => 'date',
	'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
	'include' => array(),
	'exclude' => array(),
	'meta_key' => '',
	'meta_value' => '',
	'post_type' => 'featured',
	'suppress_filters' => true,
);
$get_featued_post = get_posts($args);
$featured_img = get_the_post_thumbnail_url($$get_featued_post);
$featured_url = get_the_permalink($$get_featued_post);
$featured_title = get_the_title($$get_featued_post);
$featured_excerpt = get_the_excerpt($$get_featued_post);



$args = array(
	'numberposts' => 0,
	'category' => 0,
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
$get_post = get_posts($post_args);


$event_args = array(
	'numberposts' => 3,
	'category' => 0,
	'orderby' => 'date',
	'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
	'include' => array(),
	'exclude' => array(),
	'meta_key' => '',
	'meta_value' => '',
	'post_type' => 'event',
	'suppress_filters' => true,
);
$get_event = get_posts($event_args);
?>

<!-- Stories section -->
<section id="stories" style="background-color:whitesmoke;">
	<div class="container">
		<div class="mbr-row p2 m1" style="border-radius:8px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);background-color:white">
			<div class="mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-12 md-pb" style="padding:0">
				<div class="title-wrap">
					<h3 class="mbr-section-title mbr-bold mbr-fonts-style display-2">Stories</h3>
				</div>
				<amp-carousel class="story-carousel" type="carousel">
					<?php
					foreach ($get_post_for_story as $val) {
						$story_img = get_the_post_thumbnail_url($val);
						$story_url = get_the_permalink($val);
						$story_title = get_the_title($val);
						?>
						<amp-img src="<?php print $story_img; ?>"></amp-img>
					<?php } ?>
				</amp-carousel>
			</div>
		</div>
</section>

<!-- Feeds cards -->
<section id="cards-feed" style="background-color:whitesmoke;">
	<div class="container mb4">

		<div class="mbr-row m1 justify-content-center">
			<?php
			foreach ($get_post as $val) {
				$post_img = get_the_post_thumbnail_url($val);
				$post_url = get_the_permalink($val);
				$post_title = get_the_title($val);
				?>
				<div class="mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 cards d-flex" style="padding:0;">
					<div class="card mb3" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
						<amp-img style="border-radius:10px;" src="<?php
																	if ($post_img) {
																		print $post_img;
																	} else {
																		print content_url() . '/themes/TwimbitLite/src/placeholder.png';
																	}  ?>" layout="responsive" width="348.5446009389671" height="232" alt="" class="placeholder-loader">
							<div placeholder="" class="placeholder">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
									<circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
									<circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
								</svg></div>

						</amp-img>
						<!-- <img src="" class="card-img-top" style="border-radius:10px;"> -->
						<div class="card-body">
							<div class="row">
								<div class="col-7">
									<h5 class="card-title mbr-bold mbr-fonts-style display-2"><?php print $post_title; ?></h5>
									<p class="card-text" style="font-style:italic"><?php print get_the_excerpt($val); ?></p>
								</div>
								<div class="col-5">
									<div class="card-badge ">
										<h2 class="align-center card-badge-text">
											<?php if (get_post_type($val) == "post") {
												print "Read";
											} else if (get_post_type($val) == "video") {
												print "Watch";
											} else if (get_post_type($val) == "podcast") {
												print "Listen";
											} else if (get_post_type($val) == "explore") {
												print "Explore";
											}  ?>
										</h2>
										<img src="<?php if (get_post_type($val) == "post") {
														print content_url() . '/themes/TwimbitLite/src/read.svg';
													} else if (get_post_type($val) == "video") {
														print content_url() . '/themes/TwimbitLite/src/play.svg';
													} else if (get_post_type($val) == "podcast") {
														print content_url() . '/themes/TwimbitLite/src/podcast.svg';
													} else if (get_post_type($val) == "explore") {
														print content_url() . '/themes/TwimbitLite/src/timeline.svg';
													}  ?>" alt="sdfdsf" class="img-cat">
										<h2 class="category-caption">#Category</h2>
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


<?php get_footer(); ?>
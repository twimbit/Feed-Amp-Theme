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
	'numberposts' => 3,
	'category' => 0,
	'orderby' => 'date',
	'order' => 'ASC', // the 1st array element will be 1st story(oldest story)
	'include' => array(),
	'exclude' => array(),
	'meta_key' => '',
	'meta_value' => '',
	'post_type' => 'post',
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
				<amp-carousel height="100" type="carousel">
					<?php
					foreach ($get_post_for_story as $val) {
						$story_img = get_the_post_thumbnail_url($val);
						$story_url = get_the_permalink($val);
						$story_title = get_the_title($val);
						?>
						<amp-img src="<?php print $story_img; ?>" width="95" height="95"></amp-img>
					<?php } ?>
				</amp-carousel>
			</div>
		</div>
</section>

<!-- Feeds cards -->
<section id="cards-feed" style="background-color:whitesmoke;">
	<div class="container mb4">
		<div class="mbr-row m1">
			<div class="mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-12" style="padding:0;">
				<?php
				foreach ($get_post as $val) {
					$post_img = get_the_post_thumbnail_url($val);
					$story_url = get_the_permalink($val);
					$story_title = get_the_title($val);
					?>
					<div class="card mb3" style="border-radius:10px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
						<img src="<?php print $post_img; ?>" class="card-img-top" style="border-radius:10px;">
						<div class="card-body">
							<div class="row">
								<div class="col-8">
									<h5 class="card-title mbr-bold mbr-fonts-style display-2">Card title</h5>
									<p class="card-text" style="font-style:italic">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div>
								<div class="col-4">
									<div class="card-badge">
										<h2 class="align-center card-badge-text">Watch</h2>
										<img src="" alt="sdfdsf">
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>

		</div>

	</div>

</section>


<?php get_footer(); ?>
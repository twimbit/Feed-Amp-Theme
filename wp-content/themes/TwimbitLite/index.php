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

<!-- Insights section -->
<section class="features123  cid-r8J9eA34T9" id="features1-2f">
	<div class="container">
		<div class="mbr-row p2" style="background-color:white;border-radius:8px">
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
<section id="cards-feed">
	<div class="card" style="width: 18rem;">
		
	</div>
</section>

<?php get_footer(); ?>
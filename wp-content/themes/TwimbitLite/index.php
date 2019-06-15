<?php get_header(); ?>
<?php
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
		<div class="title-wrap mbr-pb-4">
			<h3 class="mbr-section-title mbr-bold mbr-fonts-style display-2">Insights</h3>

		</div>
		<div class="mbr-row mbr-jc-c">
			<?php
			foreach ($get_post as $val) {
				$post_img = get_the_post_thumbnail_url($val);
				$post_url = get_the_permalink($val);
				$post_title = get_the_title($val);
				$post_excerpt = get_the_excerpt($val);
				?>
				<div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
					<div class="card-wrapper mbr-column">
						<div class="card-img mbr-pb-3">
							<amp-img src="<?php print $post_img; ?>" layout="responsive" width="348.5446009389671" height="232" alt="" class="placeholder-loader">
								<div placeholder="" class="placeholder">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
										<circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
										<circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
									</svg></div>

							</amp-img>
						</div>
						<div class="card-box">
							<a href="<?php print $post_url; ?>">
								<h3 class="card-title mbr-bold mbr-fonts-style display-6"><?php echo mb_strimwidth($post_title, 0, 50, '...'); ?></h3>

								<p class="card-text mbr-fonts-style mbr-pt-2 display-7"><?php echo $post_excerpt; ?></p>
							</a>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php if (count($get_post) >= 3) {
				?>

				<div class="mbr-row mbr-jc-c">
					<div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn btn-primary display-7" href="#">Read More</a></div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>


<!-- Stories -->
<section class="features3 cid-r8TZVo6I8x" id="features3-2d">
	<div class="container">
		<div class="title mbr-pb-4">
			<h3 class="mbr-section-title mbr-bold mbr-fonts-style display-2">Stories</h3>
		</div>



		<amp-carousel height="500" layout="fixed-height" type="carousel">
			<?php
			foreach ($get_post_for_story as $val) {
				$story_img = get_the_post_thumbnail_url($val);
				$story_url = get_the_permalink($val);
				$story_title = get_the_title($val);
				?>
				<div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
					<div class="card-wrapper mbr-column">
						<div class="card-img mbr-flex">
							<amp-img src="<?php print $story_img; ?>" layout="responsive" width="348.5446009389671" height="350" alt="" class="placeholder-loader">
								<div placeholder="" class="placeholder">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
										<circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
										<circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
									</svg></div>

							</amp-img>
						</div>
						<div class="card-box mbr-m-auto mbr-pt-3 mbr-pb-3 mbr-px-4">
							<a href="<?php print $story_url; ?>">
								<h3 class="card-title mbr-bold mbr-fonts-style display-5"><?php print $story_title; ?>
							</a></h3>
						</div>
					</div>
				</div>
			<?php } ?>
		</amp-carousel>


	</div>
</section>

<!-- Events -->
<section class="features3 cid-r8J9eA34T9" id="features3-2d">
	<div class="container">
		<div class="title mbr-pb-4">
			<h3 class="mbr-section-title mbr-bold mbr-fonts-style display-2">Latest Events</h3>

		</div>
		<div class="mbr-row mbr-jc-c">
			<?php
			foreach ($get_post as $val) {
				$event_img = get_the_post_thumbnail_url($val);
				$event_url = get_the_permalink($val);
				$event_title = get_the_title($val);
				$event_excerpt = get_the_excerpt($val);
				?>
				<div class="card mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-4 md-pb">
					<div class="card-wrapper mbr-column">
						<div class="card-img mbr-flex">
							<amp-img src="<?php echo $event_img; ?>" layout="responsive" width="348.5446009389671" height="232" alt="" class="placeholder-loader">
								<div placeholder="" class="placeholder">
									<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300">
										<circle class="big" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="230" stroke-dashoffset="230" cx="150" cy="150" r="145"></circle>
										<circle class="small" fill="none" stroke="#c2e0e0" stroke-width="3" stroke-dasharray="212" cx="150" cy="150" r="135"></circle>
									</svg></div>

							</amp-img>
						</div>
						<div class="card-box mbr-m-auto mbr-pt-3 mbr-pb-3 mbr-px-4">
							<h3 class="card-title mbr-bold mbr-fonts-style display-6"><?php echo mb_strimwidth($event_title, 0, 50, '...'); ?></h3>

							<p class="card-text mbr-fonts-style mbr-pt-2 display-7"><?php echo $event_excerpt; ?></p>

						</div>
					</div>
				</div>
			<?php } ?>
		</div>
		<?php if (count($get_post) >= 3) {
			?>

			<div class="mbr-row mbr-jc-c">
				<div class="card-btn mbr-section-btn mbr-pt-2"><a class="btn btn-primary display-7" href="#">Read More</a></div>
			</div>
		<?php } ?>
	</div>
</section>
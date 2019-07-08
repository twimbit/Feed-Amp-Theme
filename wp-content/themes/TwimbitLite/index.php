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
?>
<!-- Feed Tab -->
<!-- Stories section -->
<section id="stories">
	<div class="container">
		<div class="story-section">
			<amp-carousel class="story-carousel" type="carousel" controls>
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
<section id="cards-feed">
	<div class="container mt4">
		<div class="lg-col-8 md-col-8 xs-col-12">
			<div class="feed-card">
				<div class="feed-thumbnail">
					<amp-img src="<?php print content_url() . '/themes/TwimbitLite/src/cat.jpg'; ?>"></amp-img>
					<div class="fade"></div>
					<a href="/topics/6-science-backed-tips-for-having-a-fantastic-vacation-curiosity/" class="feed-link">
						<div class="feed-title">
							<h3>6 Science-Backed Tips for Having a Fantastic Vacation</h3>

							<p class="feed-subtitle">#5: Lay off the social media.</p>

						</div>
					</a>
					<div class="feed-action">
						<div class="feed-button">
							<div class="feed-wrap">
								<div class="feed-button-in">
									<div class="atomic-heart" style="background-image:url(<?php print content_url() . '/themes/TwimbitLite/src/atom_sprite_black.png'; ?>)">
									</div>
								</div>
								<div class="count">
									1.23k
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feed-card">
				<div class="feed-thumbnail">
					<amp-img src="<?php print content_url() . '/themes/TwimbitLite/src/cat.jpg'; ?>"></amp-img>
					<div class="fade"></div>
					<a href="/topics/6-science-backed-tips-for-having-a-fantastic-vacation-curiosity/" class="feed-link">
						<div class="feed-title">
							<h3>6 Science-Backed Tips for Having a Fantastic Vacation</h3>

							<p class="feed-subtitle">#5: Lay off the social media.</p>

						</div>
					</a>
					<div class="feed-action">
						<div class="feed-button">
							<div class="feed-wrap">
								<div class="feed-button-in">
									<div class="atomic-heart" style="background-image:url(<?php print content_url() . '/themes/TwimbitLite/src/atom_sprite_black.png'; ?>)">
									</div>
								</div>
								<div class="count">
									1.23k
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feed-card">
				<div class="feed-thumbnail">
					<amp-img src="<?php print content_url() . '/themes/TwimbitLite/src/cat.jpg'; ?>"></amp-img>
					<div class="fade"></div>
					<a href="/topics/6-science-backed-tips-for-having-a-fantastic-vacation-curiosity/" class="feed-link">
						<div class="feed-title">
							<h3>6 Science-Backed Tips for Having a Fantastic Vacation</h3>

							<p class="feed-subtitle">#5: Lay off the social media.</p>

						</div>
					</a>
					<div class="feed-action">
						<div class="feed-button">
							<div class="feed-wrap">
								<div class="feed-button-in">
									<div class="atomic-heart" style="background-image:url(<?php print content_url() . '/themes/TwimbitLite/src/atom_sprite_black.png'; ?>)">
									</div>
								</div>
								<div class="count">
									1.23k
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="feed-card">
				<div class="feed-thumbnail">
					<amp-img src="<?php print content_url() . '/themes/TwimbitLite/src/cat.jpg'; ?>"></amp-img>
					<div class="fade"></div>
					<a href="/topics/6-science-backed-tips-for-having-a-fantastic-vacation-curiosity/" class="feed-link">
						<div class="feed-title">
							<h3>6 Science-Backed Tips for Having a Fantastic Vacation</h3>

							<p class="feed-subtitle">#5: Lay off the social media.</p>

						</div>
					</a>
					<div class="feed-action">
						<div class="feed-button">
							<div class="feed-wrap">
								<div class="feed-button-in">
									<div class="atomic-heart" style="background-image:url(<?php print content_url() . '/themes/TwimbitLite/src/atom_sprite_black.png'; ?>)">
									</div>
								</div>
								<div class="count">
									1.23k
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
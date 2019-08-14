<?php

// Featured image functionality.
function mytheme_post_thumbnails()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_post_thumbnails');


// /**
//  * Filter the except length to 20 words.
//  *
//  * @param int $length Excerpt length.
//  * @return int (Maybe) modified excerpt length.
//  */
// function wpdocs_custom_excerpt_length($length)
// {
// 	return 20;
// }
// add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);


// search filter

function searchfilter($query)
{

	if ($query->is_search && !is_admin()) {
		$query->set('post_type', array('post', 'video', 'amp_story', 'podcast'));
	}

	return $query;
}

add_filter('pre_get_posts', 'searchfilter');

//user media restriction


define('FRONTIER_RESTRICT_MEDIA_VERSION', "1.1.3");
define('FRONTIER_RESTRICT_MEDIA_DIR', dirname(__FILE__)); //an absolute path to this directory

//Restrict users who dont have capability edit_others_posts, to only see media they have uploaded themselves
function frontier_restrict_media($query)
{
	//Check if it is an admin query
	if ($query->is_admin && !current_user_can('edit_others_posts')) {
		//Check if it is an attachment query
		if ($query->query['post_type'] === 'attachment') {
			// Get current user, and author=current user to query
			$current_user = wp_get_current_user();
			$query->set('author', $current_user->ID);
		}
	}

	return $query;
}

add_filter('pre_get_posts', 'frontier_restrict_media');

// Attach you style and scripts from here
function my_assets()
{
	// wp_enqueue_script('jquery');
	// wp_enqueue_style('theme-style', get_stylesheet_uri(), array('reset'));
	// wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/reset.css');
	// wp_enqueue_style('nprogress-css', 'https://unpkg.com/nprogress@0.2.0/nprogress.css');

	// wp_enqueue_script('Toggler-js', get_template_directory_uri(). '/src/toggler.js', array(), '1.0');
	wp_enqueue_script('nprogress-js', get_template_directory_uri() . '/src/nprogress.js', array(), '1.0', true);
	wp_enqueue_script('Twimbit-js', get_template_directory_uri() . '/src/twimbit.js', array(), '1.0', true);

	// jQuery mobile
	// wp_enqueue_script('Jquery Mobile', 'http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js', '1.4.5', true);
}

add_action('wp_enqueue_scripts', 'my_assets');

//Infinite Scroll
function wp_infinitepaginate()
{
	// $num_post = $_POST['num_post'];
	$paged = $_POST['page'];
	$post_args = array(
		'posts_per_page' => 5,
		'category' => get_category_by_slug('trending')->term_id,
		'orderby' => 'date',
		'order' => 'DESC', // the 1st array element will be 1st story(oldest story)
		'include' => array(),
		'exclude' => array(),
		'post_status' => array('publish'),
		'post_type' => array('video', 'post', 'podcast', 'amp_story'),
		'paged' => $paged,
	);
	$get_post_feed = get_posts($post_args);

	?>
<?php
	foreach ($get_post_feed as $val) {
		$post_img = get_the_post_thumbnail_url($val, 'medium_large');
		$post_url = get_the_permalink($val);
		$post_title = get_the_title($val);
		$type = get_post_type($val);
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
<?php }
	die();
}
add_action('wp_ajax_infinite_scroll', 'wp_infinitepaginate'); // for logged in user
add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate'); // if user not logged in

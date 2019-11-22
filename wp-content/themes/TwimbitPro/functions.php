<?php

// Featured image functionality.
function twimbitPro_post_thumbnails()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'twimbitPro_post_thumbnails');


function twimcast_widgets_init()
{

	register_sidebar(
		array(
			'name'          => __('Home', 'twimcast'),
			'id'            => 'sidebar-1',
			'description'   => __('Add widgets here to appear in your footer.', 'twimcast'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'twimcast_widgets_init');



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

//add_filter('pre_get_posts', 'searchfilter');

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
	// wp_enqueue_script('nprogress-js', get_template_directory_uri() . '/src/nprogress.js', array(), '1.0', true);
	wp_enqueue_script('Twimbit-js', get_template_directory_uri() . '/src/twimbit.js', array(), '1.0', true);

	// jQuery mobile
	// wp_enqueue_script('Jquery Mobile', 'http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js', '1.4.5', true);
}

// add_action('wp_enqueue_scripts', 'my_assets');

function check_webp_support()
{
	if (strpos($_SERVER['HTTP_ACCEPT'], 'image/webp') !== false)
		return true;
}

function check_url_valid($url)
{
	if (strpos(get_headers($url . ".webp")[0], "200"))
		return true;
}

//add_filter('rest_endpoints', 'remove_default_endpoints_smarter');

// function remove_default_endpoints_smarter($endpoints)
// {
// 	$prefix = 'v1';

// 	foreach ($endpoints as $endpoint => $details) {
// 		if (!fnmatch('/' . $prefix . '/*', $endpoint, FNM_CASEFOLD)) {
// 			unset($endpoints[$endpoint]);
// 		}
// 	}

// 	return $endpoints;
// }

/* Updateting post on calculate botton press */
//add_action('post_updated', 'calculatePost', 10, 3);


/* Calculating word counts given on id */
function calculatePostWords($post_id)
{
	$content = get_post_field('post_content', $post_id);
	$word_count = str_word_count(strip_tags($content));
	return $word_count;
}


/* getting audio length which is attached to a post $post_id integer value */
function getAudioLength($post_id)
{
	require_once(ABSPATH . 'wp-admin/includes/media.php');
	$audio_file_path = get_attached_file((array_keys(get_attached_media('audio/mpeg', get_post($post_id)))[0]));
	$length = wp_read_audio_metadata($audio_file_path)['length_formatted'];
	return $length;
}

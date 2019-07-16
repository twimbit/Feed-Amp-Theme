<?php

// Featured image functionality.
function mytheme_post_thumbnails()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'mytheme_post_thumbnails');


/* =============================================================
    NEXT PAGE ID
    A function to get the next page's ID.
    $id = ID of the page you want to find the next page for.
 * ============================================================= */
function next_page_ID($id)
{
	// Get all pages under this section
	$post = get_post($id);
	$post_parent = $post->post_parent;
	$get_pages_query = 'child_of=' . $post_parent . '&parent=' . $post_parent . '&sort_column=menu_order&sort_order=asc';
	$get_pages = get_pages($get_pages_query);
	$next_page_id = '';
	// Count results
	$page_count = count($get_pages);

	for ($p = 0; $p < $page_count; $p++) {
		// Get the array key for our entry
		if ($id == $get_pages[$p]->ID) break;
	}

	// Assign our next key
	$next_key = $p + 1;

	// If there isn't a value assigned for the previous key, go all the way to the end
	if (isset($get_pages[$next_key])) {
		$next_page_id = $get_pages[$next_key]->ID;
	}
	return $next_page_id;
}
/* =============================================================
    PREVIOUS PAGE ID
    A function to get the previous page's ID.
    $id = ID of the page you want to find the previous page for.
 * ============================================================= */
function previous_page_ID($id)
{
	// Get all pages under this section
	$post = get_post($id);
	$post_parent = $post->post_parent;
	$get_pages_query = 'child_of=' . $post_parent . '&parent=' . $post_parent . '&sort_column=menu_order&sort_order=asc';
	$get_pages = get_pages($get_pages_query);
	$prev_page_id = '';
	// Count results
	$page_count = count($get_pages);

	for ($p = 0; $p < $page_count; $p++) {
		// get the array key for our entry
		if ($id == $get_pages[$p]->ID) break;
	}

	// assign our next & previous keys
	$prev_key = $p - 1;
	$last_key = $page_count - 1;

	// if there isn't a value assigned for the previous key, go all the way to the end
	if (isset($get_pages[$prev_key])) {
		$prev_page_id = $get_pages[$prev_key]->ID;
	}
	return $prev_page_id;
}



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




/** Custom post type */

function cptui_register_my_cpts() {

	/**
	 * Post Type: Audio.
	 */

	$labels = array(
		"name" => __( "Audio", "TwimbitLite" ),
		"singular_name" => __( "Audio type", "TwimbitLite" ),
	);

	$args = array(
		"label" => __( "Audio", "TwimbitLite" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "audio", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-audio",
		"supports" => array( "title", "editor", "thumbnail" ),
		"taxonomies" => array( "category", "post_tag" ),
	);

	register_post_type( "audio", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


/**** Theme template for post *****/
function audio_template() {
	wp_enqueue_style( 'customstyle', '/Applications/XAMPP/xamppfiles/htdocs/wordpress/wp-content/themes/TwimbitLite/style.css', array(), '1.0.0', 'all' );
}
add_action('wp_enqueue_scripts()','audio_template');
add_theme_support('post-formats',array('aside','audio','video','image'));
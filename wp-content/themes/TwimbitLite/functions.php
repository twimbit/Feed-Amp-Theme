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


// search filter

function searchfilter($query) {

	if ($query->is_search && !is_admin() ) {
		$query->set('post_type',array('post','video','amp_story','podcast'));
	}

	return $query;
}

add_filter('pre_get_posts','searchfilter');

//user media restriction


define( 'FRONTIER_RESTRICT_MEDIA_VERSION', "1.1.3" );
define( 'FRONTIER_RESTRICT_MEDIA_DIR', dirname( __FILE__ ) ); //an absolute path to this directory

//Restrict users who dont have capability edit_others_posts, to only see media they have uploaded themselves
function frontier_restrict_media( $query ) {
	//Check if it is an admin query
	if ( $query->is_admin && ! current_user_can( 'edit_others_posts' ) ) {
		//Check if it is an attachment query
		if ( $query->query['post_type'] === 'attachment' ) {
			// Get current user, and author=current user to query
			$current_user = wp_get_current_user();
			$query->set( 'author', $current_user->ID );
		}
	}

	return $query;
}

add_filter( 'pre_get_posts', 'frontier_restrict_media' );

<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://ninjateam.org
 * @since      1.0.0
 *
 * @package    FileBird
 * @subpackage FileBird/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    FileBird
 * @subpackage FileBird/admin
 * @author     Ninja Team <support@ninjateam.org>
 */
class FileBird_Admin
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $plugin_name    The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string    $version    The current version of this plugin.
     */
    private $version;
    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string    $plugin_name       The name of this plugin.
     * @param      string    $version    The version of this plugin.
     */

    public function __construct($plugin_name, $version)
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
   
        add_filter('restrict_manage_posts', array($this, 'restrictManagePosts'));
        //add_action('pre_get_posts', array($this, 'preGetPosts'));
        add_filter('posts_clauses', array($this, 'postsClauses'), 10, 2);
        add_filter('plugin_action_links_' . NJT_FILEBIRD_FOLDER_BASE, array($this, 'go_pro_version'));
        call_user_func(array($this, 'enqueue_PageBuilder'));
    }

    public function wpml_register_duplicate_attachment()
    { 
        global $sitepress;
        $is_wpml_active = $sitepress !== null && get_class($sitepress) === "SitePress";
        
        if ($is_wpml_active) {
          $settings = $sitepress->get_setting('custom_posts_sync_option', array());
          if($settings['attachment']){
            add_action('wpml_media_create_duplicate_attachment', array($this, 'wpml_media_create_duplicate_attachment'), 10, 2);            
          }
        }
    }

    public function wpml_media_create_duplicate_attachment($post_id, $tr_id)
    {
        $filebird_Folder = isset($_REQUEST["ntWMCFolder"]) ? $_REQUEST["ntWMCFolder"] : null;
        if (is_null($filebird_Folder)) {
            $filebird_Folder = isset($_REQUEST["njt_filebird_folder"]) ? $_REQUEST["njt_filebird_folder"] : null;
        }
        if ($filebird_Folder !== null) {
            $filebird_Folder = (int) $filebird_Folder;
            wp_set_object_terms($tr_id, $filebird_Folder, NJT_FILEBIRD_FOLDER, false);
        }
    }

    public function go_pro_version($links)
    {
        if (NJT_FB_V == '0') {
            $links[] = '<a target="_blank" href="https://1.envato.market/FileBird" style="color: #43B854; font-weight: bold">' . __('Go Pro', NJT_FILEBIRD_TEXT_DOMAIN) . '</a>';
            return $links;
        }
        return $links;
    }

    public function enqueue_PageBuilder()
    {
        // FL_BUILDER_VERSION : Beaver Builder
        // ET_BUILDER_PLUGIN_VERSION: Divi Builder
        if (defined('FL_BUILDER_VERSION') || defined('ET_BUILDER_PLUGIN_VERSION')) {
            if (defined('ET_BUILDER_PLUGIN_VERSION')) {
                add_action('wp_head', function () {
                    echo '<script type="text/javascript">
                          var ajaxurl = "' . admin_url('admin-ajax.php') . '";
                          </script>';
                });
            }
            add_action('wp_enqueue_scripts', array($this, 'nt_upload'));
            add_action('wp_enqueue_scripts', function(){
              wp_enqueue_style('njt-filebird-admin', plugin_dir_url(__FILE__) . 'css/filebird-admin.css', array(), $this->version, 'all');
              wp_style_add_data('njt-filebird-admin', 'rtl', 'replace');
            });
        }
    }

    public function postsClauses($clauses, $query)
    {
        global $wpdb;
        if (isset($_GET['njt_filebird_folder'])) {
            $folder = $_GET['njt_filebird_folder'];
            if (!empty($folder) != '') {
                $folder = (int) $folder;
                if ($folder > 0) {
                    $clauses['where'] .= ' AND (' . $wpdb->prefix . 'term_relationships.term_taxonomy_id = ' . $folder . ')';
                    $clauses['join'] .= ' LEFT JOIN ' . $wpdb->prefix . 'term_relationships ON (' . $wpdb->prefix . 'posts.ID = ' . $wpdb->prefix . 'term_relationships.object_id)';
                } else {
                    //to improve performance: set default folder for files when addnew
                    $folders = get_terms(NJT_FILEBIRD_FOLDER, array(
                        'hide_empty' => false,
                    ));
                    $folder_ids = array();
                    foreach ($folders as $k => $v) {
                        $folder_ids[] = $v->term_id;
                    }
                    $files_have_folder_query = "SELECT `ID` FROM " . $wpdb->prefix . "posts LEFT JOIN " . $wpdb->prefix . "term_relationships ON (" . $wpdb->prefix . "posts.ID = " . $wpdb->prefix . "term_relationships.object_id) WHERE (" . $wpdb->prefix . "term_relationships.term_taxonomy_id IN (" . implode(', ', $folder_ids) . "))";
                    $clauses['where'] .= " AND (" . $wpdb->prefix . "posts.ID NOT IN (" . $files_have_folder_query . "))";
                }
            }
        }

        return $clauses;
    }
    /*public function preGetPosts($query)
    {
    $folder = null;
    if ($query !== null) {
    $folder = $query->get('filebird_folder');
    }
    if ($folder !== null) {
    $query->set('filebird_folder', $folder);
    }
    }*/
    public function restrictManagePosts()
    {
        $scr = get_current_screen();
        if ($scr->base !== 'upload') {
            return;
        }
        echo '<select id="media-attachment-filters" class="wpmediacategory-filter attachment-filters" name="njt_filebird_folder"></select>';
    }
    /**
     * Register the stylesheets for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {
        wp_enqueue_style('njt-filebird-admin', plugin_dir_url(__FILE__) . 'css/filebird-admin.css', array(), $this->version, 'all');
        wp_style_add_data('njt-filebird-admin', 'rtl', 'replace');
    }

    /**
     * Register the JavaScript for the admin area.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {
        wp_enqueue_script('njt-filebird-upload-event-scripts', plugin_dir_url(__FILE__) . 'js/hook-add-new-upload.js', array('jquery'), $this->version, false);
    }

    public function nt_upload()
    {
        if (!function_exists('get_current_screen')) {
            require_once ABSPATH . 'wp-admin/includes/screen.php';
        }
        $screen = get_current_screen();
        //Get mode
        $mode = get_user_option('media_library_mode', get_current_user_id()) ? get_user_option('media_library_mode', get_current_user_id()) : 'grid';
        $modes = array('grid', 'list');

        if (isset($_GET['mode']) && in_array($_GET['mode'], $modes)) {
            $mode = $_GET['mode'];
            update_user_option(get_current_user_id(), 'media_library_mode', $mode);
        }

        //Load Scripts And Styles for Media Upload
        wp_enqueue_style('njt-filebird-sweet-alert-styles', plugin_dir_url(__FILE__) . 'plugin/sweet-alert/sweetalert.css', array(), $this->version, 'all');
        wp_enqueue_style('njt-filebird-mcustomscrollbar-styles', plugin_dir_url(__FILE__) . 'plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css', array(), $this->version, 'all');
        wp_enqueue_style('njt-filebird-vakata-jstree-styles', plugin_dir_url(__FILE__) . 'plugin/vakata-jstree/themes/default/style.css', array(), $this->version, 'all');

        wp_enqueue_style('njt-filebird-contextMenu' . $this->plugin_name, plugin_dir_url(__FILE__) . 'css/jquery.contextMenu.min.css', array(), $this->version, 'all');

        wp_enqueue_style('njt-filebird-main' . $this->plugin_name, plugin_dir_url(__FILE__) . 'css/main.css', array(), $this->version, 'all');
        wp_style_add_data('njt-filebird-main' . $this->plugin_name, 'rtl', 'replace');

        wp_enqueue_style('njt-filebird-upload-styles', plugin_dir_url(__FILE__) . 'css/filebird-upload.css', array(), $this->version, 'all');
        wp_style_add_data('njt-filebird-upload-styles', 'rtl', 'replace');

        wp_enqueue_style('njt-filebird-folder-container', plugin_dir_url(__FILE__) . 'css/folder-container.css', array(), $this->version, 'all');
        wp_enqueue_script('njt-filebird-vakata-jstree-scripts', plugin_dir_url(__FILE__) . 'plugin/vakata-jstree/jstree.min.js', array('jquery'), $this->version, false);

        wp_enqueue_script('njt-filebird-jquery-resize', plugin_dir_url(__FILE__) . 'plugin/rick-strahl/jquery-resizable.js', array('jquery'), $this->version, false);
        wp_enqueue_script('njt-filebird-mcustomscrollbar-scripts', plugin_dir_url(__FILE__) . 'plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.js', array('jquery'), $this->version, false);

        wp_enqueue_script('njt-filebird-sweet-alert-scripts', plugin_dir_url(__FILE__) . 'plugin/sweet-alert/sweetalert2.all.js', array('jquery'), $this->version, false);

        wp_enqueue_script('bootstrap', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script('njt-filebird-contextMenu', plugin_dir_url(__FILE__) . 'js/jquery.contextMenu.min.js', array('jquery'), $this->version, false);

        wp_enqueue_script('njt-filebird-folder-in-content', plugin_dir_url(__FILE__) . 'js/folder-in-content.js', array('jquery'), $this->version, false);
        wp_enqueue_script('njt-filebird-trigger', plugin_dir_url(__FILE__) . 'js/trigger-folder.js', array('jquery'), $this->version, false);
        wp_enqueue_script('njt-filebird-folder', plugin_dir_url(__FILE__) . 'js/folder.js', array('jquery'), $this->version, false);

        wp_enqueue_script('njt-filebird-upload-scripts', plugin_dir_url(__FILE__) . 'js/filebird-upload.js', array('jquery'), $this->version, false);

        wp_enqueue_script('njt-filebird-modal', plugin_dir_url(__FILE__) . 'js/filebird-modal.js', array('jquery'), $this->version, false);
        wp_enqueue_script('njt-filebird-modal-init', plugin_dir_url(__FILE__) . 'js/filebird-modal-init.js', array('jquery'), $this->version, false);
        wp_enqueue_script('njt-filebird-modal-scripts', plugin_dir_url(__FILE__) . 'js/filebird-media.js', array('jquery'), $this->version, false);

        if ($mode === 'grid' || $screen->id != 'upload') {
            wp_enqueue_script('njt-filebird-upload-libray-scripts', plugin_dir_url(__FILE__) . 'js/hook-library-upload.js', array('jquery'), $this->version, false);
            wp_enqueue_script('njt-filebird-upload-grid-scripts', plugin_dir_url(__FILE__) . 'js/filebird-upload-grid.js', array('jquery'), $this->version, false);
        } else {
            wp_enqueue_script('njt-filebird-upload-list-scripts', plugin_dir_url(__FILE__) . 'js/filebird-upload-list.js', array('jquery'), $this->version, false);
            wp_localize_script(
                'njt-filebird-upload-list-scripts',
                'njt_filebird_dh',
                array(
                    'upload_url' => admin_url('upload.php'),
                    'current_folder' => ((isset($_GET['njt_filebird_folder'])) ? $_GET['njt_filebird_folder'] : ''),
                    'no_item_html' => '<tr class="no-items"><td class="colspanchange" colspan="' . apply_filters('filebird_noitem_colspan', 6) . '">' . __('No media files found.', NJT_FILEBIRD_TEXT_DOMAIN) . '</td></tr>',
                    'item' => __('item', NJT_FILEBIRD_TEXT_DOMAIN),
                    'items' => __('items', NJT_FILEBIRD_TEXT_DOMAIN),
                )
            );
        }

        //$the_query = new WP_Query("post_type=attachment&posts_per_page=-1");
    }
    public function convert_tree_to_flat_array($array)
    {
        $result = array();
        foreach ($array as $key => $row) {

            $item = new stdClass();
            $item->term_id = $row->term_id;
            $item->name = $row->name;
            $item->parent = $row->parent;
            $item->count = $row->count;

            $result[] = $item;
            if (count($row->children) > 0) {

                $result = array_merge($result, $this->convert_tree_to_flat_array($row->children));

            }
        }

        return $result;
    }
    public function filebird_add_init_media_manager($hook)
    {
        $isCallModal = isset($_POST['action']) && $_POST['action'] == 'filebird_ajax_treeview_folder';
        $all_count = FileBird_Topbar::count_all_categories_attachment();
        $uncatetory_count = FileBird_Topbar::get_uncategories_attachment();
        $tree = $this->filebird_term_tree_array(NJT_FILEBIRD_FOLDER, 0);
        $folders = $this->convert_tree_to_flat_array($tree);
        $sidebar_splitter_width = get_option('njt-filebird_splitter_width');
        ?>
		<div id="filebird_sidebar" style="display: none;">

			<div class="filebird_sidebar panel-left"
				<?php echo ($sidebar_splitter_width && !$isCallModal ? ' style="width: ' . $sidebar_splitter_width . 'px;"' : '') ?>
			>
				<div class="filebird_sidebar_fixed"
					<?php echo ($sidebar_splitter_width && !$isCallModal ? ' style="width: ' . $sidebar_splitter_width . 'px;"' : '') ?>
				>

					<input type="hidden" id="filebird_terms">
					<h1 class="nt_main_title"><?php _e('Folders', 'filebird');?></h1>
					<!-- .nt_main_title -->
					<div class="filebird_add_new_container">
						<button type="button" class="nt_main_add_new js__nt_tipped new-folder">

						<span><?php _e('New Folder', NJT_FILEBIRD_TEXT_DOMAIN);?></span></button>
					</div>
					<!-- .filebird_add_new_container -->
					<div class="filebird_toolbar">
						<button type="button" class="nt_main_button_icon js__nt_tipped js__nt_rename button media-button" data-title="<?php _e('Rename', NJT_FILEBIRD_TEXT_DOMAIN);?>">
						<svg class="a-s-fa-Ha-pa" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" focusable="false" fill="#8f8f8f"><path d="M0 0h24v24H0z" fill="none"></path><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM6 17v-2.47l7.88-7.88c.2-.2.51-.2.71 0l1.77 1.77c.2.2.2.51 0 .71L8.47 17H6zm12 0h-7.5l2-2H18v2z"></path></svg>
						<span><?php _e('Rename', NJT_FILEBIRD_TEXT_DOMAIN);?></span><span class="opacity0"><?php _e('Rename', NJT_FILEBIRD_TEXT_DOMAIN);?></span></button>
						<button type="button" class="nt_main_button_icon js__nt_tipped js__nt_delete button media-button"><svg width="24px" height="24px" viewBox="0 0 24 24" fill="#8f8f8f" focusable="false" class=""><path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path><path d="M0 0h24v24H0z" fill="none"></path></svg><span><?php _e('Delete', NJT_FILEBIRD_TEXT_DOMAIN);?></span><span class="opacity0"><?php _e('Delete', NJT_FILEBIRD_TEXT_DOMAIN);?></span></button>

					</div>
					<div class="njt-filebird-loader"></div>
					<!-- /.filebird_toolbar -->
					<div id="njt-filebird-defaultTree" class="filebird_tree">
						<ul>
							<li id="menu-item-all" data-jstree='{"selected":true}' id="menu-item-all" data-id="all" data-number="<?php echo ($all_count ? $all_count : '') ?>" class="menu-item">
								<svg
								xmlns="http://www.w3.org/2000/svg"
								xmlns:xlink="http://www.w3.org/1999/xlink"
								width="13px" height="16px">
								<path fill-rule="evenodd"  fill="#8f8f8f"
								d="M1.625,-0.000 C0.731,-0.000 -0.000,0.720 -0.000,1.600 L-0.000,14.400 C-0.000,15.280 0.731,16.000 1.625,16.000 L11.375,16.000 C12.269,16.000 13.000,15.280 13.000,14.400 L13.000,4.800 L8.125,-0.000 L1.625,-0.000 ZM7.313,5.600 L7.313,1.200 L11.781,5.600 L7.313,5.600 Z"/>
								</svg>
								<span><?php _e('All files', NJT_FILEBIRD_TEXT_DOMAIN);?></span>
							</li>
							<li id="menu-item--1" data-jstree='{"icon":"icon-archive"}' id="menu-item--1" data-id="-1" <?php echo $uncatetory_count ? "data-number={$uncatetory_count}" : ''; ?> class="menu-item uncategory">
							<svg
							xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink"
							width="16px" height="16px">
							<path fill-rule="evenodd"  fill="rgb(143, 143, 143)"
							d="M14.222,-0.000 L1.769,-0.000 C0.787,-0.000 0.009,0.796 0.009,1.778 L-0.000,14.222 C-0.000,15.204 0.787,16.000 1.769,16.000 L14.222,16.000 C15.204,16.000 16.000,15.204 16.000,14.222 L16.000,1.778 C16.000,0.796 15.204,-0.000 14.222,-0.000 ZM14.222,10.667 L10.667,10.667 C10.667,12.138 9.471,13.333 8.000,13.333 C6.529,13.333 5.333,12.138 5.333,10.667 L1.769,10.667 L1.769,1.778 L14.222,1.778 L14.222,10.667 Z"/>
							</svg>
								<span><?php _e('Uncategorized', NJT_FILEBIRD_TEXT_DOMAIN);?></span>
							</li>
						</ul>
					</div>
					<!-- /#njt-filebird-defaultTree -->
					<div id="njt-filebird-folderTree" class="filebird_tree jstree-default">
						<?php $this->build_folder($folders);?>
					</div>
				</div>
				<!-- #njt-filebird-folderTree -->
			</div>
			<div class="njt-splitter"></div>
			<!-- .filebird_sidebar -->
		</div>
	<?php
if ($isCallModal) {
            wp_die();
        }
    }

/**
 * Save values of Photographer Name and URL in media uploader
 *
 * @param $post array, the post data for database
 * @param $attachment array, attachment fields from $_POST form
 * @return $post array, modified post data
 */

    // public function be_attachment_field_credit_save( $post, $attachment ) {
    //     if( isset( $attachment['be-photographer-name'] ) )
    //         update_post_meta( $post['ID'], 'be_photographer_name', $attachment['be-photographer-name'] );

    //     if( isset( $attachment['be-photographer-url'] ) )
    //         update_post_meta( $post['ID'], 'be_photographer_url', esc_url( $attachment['be-photographer-url'] ) );

    //     return $post;
    // }

    private function find_depth($folder, $folders, $depth = 0)
    {
        if ($folder->parent != 0) {
            $depth = $depth + 1;
            $parent = $folder->parent;
            $find = array_filter($folders, function ($arr) use ($parent) {
                if ($arr->term_id == $parent) {
                    return $arr;
                } else {
                    return null;
                }
            });
            if (is_null($find)) {
                return $depth;
            } else {
                foreach ($find as $k2 => $v2) {
                    return $this->find_depth($v2, $folders, $depth);
                }
            }
        } else {
            return $depth;
        }
    }

    private function build_folder($folders)
    {
        // print_r($folders);die;
        //sort
        $orders = array();

        foreach ($folders as $key => $row) {
            $orders[$key] = $key;
        }
        array_multisort($orders, SORT_ASC, $folders);
        //end sort
        echo '<form action="javascript:void(0);" id="update-folders" enctype="multipart/form-data" method="POST"><ul id="folders-to-edit" class="menu">';
        foreach ($folders as $k => $v) {$depth = $this->find_depth($v, $folders);?>
	        <li id="menu-item-<?php echo $v->term_id; ?>" data-id="<?php echo $v->term_id; ?>" <?php echo $this->filebird_folder_counter($v->count, $v->term_id); ?> class="menu-item menu-item-depth-<?php echo $depth; ?>">
	        	<i class="dh-tree-icon"></i>
	            <div class="menu-item-bar jstree-anchor">
	                <div class="menu-item-handle">

	                    <span class="item-title "><span class="menu-item-title"><?php echo $v->name; ?></span>
	                </div>
	            </div>
	            <ul class="menu-item-transport"></ul>
	            <input class="menu-item-data-db-id" type="hidden" name="menu-item-db-id[<?php echo $v->term_id; ?>]" value="<?php echo $v->term_id; ?>">
	            <input class="menu-item-data-parent-id" type="hidden" name="menu-item-parent-id[<?php echo $v->term_id; ?>]" value="<?php echo $v->parent; ?>" />
	        </li>
	        <?php
}
        echo '</ul></form>';
    }

    public function filebird_folder_counter($term_count, $term_id = null)
    {
        global $sitepress, $wpdb;
        $is_wpml_active = $sitepress !== null && get_class($sitepress) === "SitePress";
        $media_translation = false;
        if($is_wpml_active){
          $settings = $sitepress->get_setting('custom_posts_sync_option', array());
          if($settings['attachment']){
            $media_translation = true;
          }
        }
        
        if ($is_wpml_active && $term_id !== null && $media_translation) {
            $lang = $sitepress->get_current_language();
            $table_name = $wpdb->prefix . 'icl_translations';

            $counter = (int) $wpdb->get_var("SELECT COUNT(*)
            FROM $table_name AS wpmlt
            INNER JOIN $wpdb->term_relationships AS term_rela ON term_rela.object_id = wpmlt.element_id
            WHERE wpmlt.element_type =  'post_attachment'
            AND term_rela.term_taxonomy_id = $term_id
            AND wpmlt.language_code =  '$lang'");
            return $counter ? "data-number={$counter}" : '';
        } else {
            return $term_count ? "data-number={$term_count}" : '';
        }
    }

    public function filebird_add_folder_to_attachments()
    {
        register_taxonomy(NJT_FILEBIRD_FOLDER,
            array("attachment"),
            array("hierarchical" => true,
                "labels" => array(
                    'name' => __('Folder', NJT_FILEBIRD_TEXT_DOMAIN),
                    'singular_name' => __('Folder', NJT_FILEBIRD_TEXT_DOMAIN),
                    'add_new_item' => __('Add New Folder', NJT_FILEBIRD_TEXT_DOMAIN),
                    'edit_item' => __('Edit Folder', NJT_FILEBIRD_TEXT_DOMAIN),
                    'new_item' => __('Add New Folder', NJT_FILEBIRD_TEXT_DOMAIN),
                    'search_items' => __('Search Folder', NJT_FILEBIRD_TEXT_DOMAIN),
                    'not_found' => __('Folder not found', NJT_FILEBIRD_TEXT_DOMAIN),
                    'not_found_in_trash' => __('Folder not found in trash', NJT_FILEBIRD_TEXT_DOMAIN),
                ),
                'public' => false,
                'show_ui' => true,
                'show_in_menu' => false,
                'show_in_nav_menus' => false,
                'show_in_quick_edit' => false,
                'update_count_callback' => '_update_generic_term_count',
                'show_admin_column' => false,
                "rewrite" => false)
        );
    }

    public function filebird_ajax_get_folder_list_callback()
    {
        $terms = get_terms(NJT_FILEBIRD_FOLDER, array(
            'hide_empty' => false,
            'meta_key' => 'folder_position',
            'orderby' => 'meta_value',
        ));
        // print_r($terms);die;
        echo filebird_loop_term(0, $terms);
        die();
    }

    public function filebird_ajax_update_folder_position_callback()
    {
        $result = $_POST["result"];
        $result = explode("|", $result);
        foreach ($result as $key) {
            $key = explode(",", $key);
            update_term_meta($key[0], 'folder_position', $key[1]);
        }
        die();
    }

    public function nt_custom_upload_filter_callback($file)
    {
        $file['name'] = 'wordpress-is-awesome-' . $file['name'];
        return $file;
    }

    public function filebird_ajax_delete_folder_list_callback()
    {
        $current = $_POST["current"];
        $count_attachments = 0;

        $current_term = get_term($current, NJT_FILEBIRD_FOLDER);
        $count_attachments = $current_term->count;
        $term = wp_delete_term($current, NJT_FILEBIRD_FOLDER);
        if (is_wp_error($term)) {
            echo "error";
        }
        echo $count_attachments;
        die();
    }

    public static function nt_set_valid_term_name($name, $parent)
    {

        if (!$parent) {
            $parent = 0;

        }

        $terms = get_terms(NJT_FILEBIRD_FOLDER, array('parent' => $parent, 'hide_empty' => false));

        $check = true;

        if (count($terms)) {

            foreach ($terms as $term) {
                if ($term->name === $name) {
                    $check = false;
                    break;
                }
            }
        } else {
            return $name;
        }

        //$term = get_term_by('name', $name, NJT_FILEBIRD_FOLDER);

        if ($check) {

            return $name;
        }

        $arr = explode('_', $name);

        if ($arr && count($arr) > 1) {

            $suffix = array_values(array_slice($arr, -1))[0];

            //remove end item (suffix) of array
            array_pop($arr);

            //get folder base name (no suffix)
            $origin_name = implode($arr);

            if (intval($suffix)) {

                $name = $origin_name . '_' . (intval($suffix) + 1);

            }

        } else {

            $name = $name . '_1';

        }

        $name = self::nt_set_valid_term_name($name, $parent);

        return $name;

    }

    public function filebird_ajax_update_folder_list_callback()
    {
        $current = $_POST["current"];
        $new_name = $_POST["new_name"];
        $parent = $_POST["parent"];
        $type = $_POST["type"];
        $term_id = $_POST["term_id"];
        switch ($type) {
            case 'new':

                $name = self::nt_set_valid_term_name($new_name, $parent);

                $term_new = wp_insert_term($name, NJT_FILEBIRD_FOLDER, array(
                    'name' => $name,
                    'parent' => $parent,
                ));
                if (is_wp_error($term_new)) {

                    echo "error";

                } else {

                    add_term_meta($term_new["term_id"], 'folder_type', $_POST["folder_type"]);

                    add_term_meta($term_new["term_id"], 'folder_position', 10000);

                    wp_send_json_success(array('term_id' => $term_new["term_id"], 'term_name' => $name));
                }

                break;

            case 'rename':
                $check_error = wp_update_term($current, NJT_FILEBIRD_FOLDER, array(
                    'name' => $new_name,
                ));
                if (is_wp_error($check_error)) {
                    echo "error";
                }
                break;
            case 'move':
                $check_error = wp_update_term($current, NJT_FILEBIRD_FOLDER, array(
                    'parent' => $parent,
                ));
                if (is_wp_error($check_error)) {
                    echo "error";
                }
                break;

            case 'new_edit_attachment':

                if (isset($term_id)) {
                    add_term_meta($term_id, 'folder_type', $_POST["folder_type"]);

                    add_term_meta($term_id, 'folder_position', 10000);

                    wp_send_json_success(array('term_id' => $term_id));
                }
                break;
        }
        die();
    }

    public function filebird_ajax_get_child_folders_callback()
    {

        $term_id = $_POST['folder_id'];
        // if($term_id === 'all' || $term_id === -1 || $term_id === '-1'){
        // if($term_id === 'all'){
        //     $term_id = 0;
        // }
        $terms = get_terms(NJT_FILEBIRD_FOLDER, array(
            'hide_empty' => false,
            'meta_key' => 'folder_position',
            'orderby' => 'meta_value',
            'parent' => $term_id,
        ));

        if (is_wp_error($terms)) {
            echo "error";
        }

        wp_send_json_success($terms);
    }

    public function filebird_ajax_save_splitter()
    {
        $width = $_POST['splitter_width'];
        if (update_option('njt-filebird_splitter_width', $width)) {
            wp_send_json_success();
        } else {
            wp_send_json_error();
        }
    }

    public function filebird_ajax_refresh_folder()
    {
        $current_folder = $_POST['current_folder'];
        global $wpdb;
        $query = "DELETE FROM " . $wpdb->prefix . "term_relationships" . " WHERE object_id NOT IN (SELECT ID from " . $wpdb->prefix . "posts) AND term_taxonomy_id=" . $current_folder;
        $result = $wpdb->query($query);
        wp_update_term_count_now([$current_folder], 'nt_wmc_folder');
        wp_send_json_success(array('rowChanged' => $result));
    }

    public function filebird_term_tree_option($terms, $spaces = "-")
    {

        $html = '';

        if (!is_null($terms) && count($terms) > 0) {
            foreach ($terms as $item) {
                $html .= '<option value="' . $item->term_id . '" data-id="' . $item->term_id . '">' . $spaces . '&nbsp;' . $item->name . '</option>';

                if (is_array($item->children) && count($item->children) > 0) {
                    $html .= $this->filebird_term_tree_option($item->children, str_repeat($spaces, 2));
                }
            }
        }
        return $html;
    }

    public function filebird_term_tree_array($taxonomy, $parent)
    {

        $terms = get_terms($taxonomy, array(
            'hide_empty' => false,
            'meta_key' => 'folder_position',
            'orderby' => 'meta_value',
            'parent' => $parent,
        ));
        //var_dump($terms);
        $children = array();
        // go through all the direct decendants of $parent, and gather their children
        foreach ($terms as $term) {
            // recurse to get the direct decendants of "this" term
            $term->children = $this->filebird_term_tree_array($taxonomy, $term->term_id);
            // add the term to our new array
            $children[] = $term;
        }
        // send the results back to the caller
        return $children;
    }

    // show in upload file when add Media on alll page
    public function filebird_pre_upload_ui()
    {
        global $pagenow;
        $terms = $this->filebird_term_tree_array(NJT_FILEBIRD_FOLDER, 0);

        // Get the options depending on the current page
        //if ($pagenow === 'media-new.php' || $pagenow === 'post.php' ||  $pagenow === 'post-new.php') {
        $options = $this->filebird_term_tree_option($terms);
        $label = __("Select a folder and upload files (Optional)", NJT_FILEBIRD_TEXT_DOMAIN);
        echo '<p class="attachments-category">' . $label . '<br/></p>
	        <p>
	            <select name="ntWMCFolder" class="njt-filebird-editcategory-filter"><option value="-1">-' . __('Uncategorized', NJT_FILEBIRD_TEXT_DOMAIN) . '</option>' . $options . '</select>
	        </p>';
        //  }

    }
}
function filebird_loop_term($parent_id, $terms)
{
    $html = null;
    foreach ($terms as $term) {
        if ($term->parent == $parent_id) {
            if (empty($html)) {
                $html .= '<ul>';
            }

            $sub_html = filebird_loop_term($term->term_id, $terms);
            $folder_type = get_term_meta($term->term_id, 'folder_type', true);
            $html .= '<li';
            $html_jstree = null;
            switch ($folder_type) {
                case 'collection':
                    $html_jstree .= '"type":"collection"';
                    break;
                case 'gallery':
                    $html_jstree .= '"type":"gallery"';
                    break;
                default:
                    $html_jstree .= '"type":"default"';
                    break;
            }
            if ($sub_html) {
                $html_jstree .= ',"opened":true';
            }

            if ($html_jstree) {
                $html .= " data-jstree='{" . $html_jstree . "}'";
            }

            if ($term->count > 0) {
                $html .= " data-number='" . $term->count . "'";
            }

            $html .= ' data-id="' . $term->term_id . '">' . $term->name;
            $html .= $sub_html;
            $html .= '</li>';
        }
    }
    if ($html) {
        $html .= '</ul>';
    }

    return $html;
}

function add_admin_scripts($hook)
{

    global $post;

    //  if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
    if ($hook !== 'upload.php' && $hook !== 'media-new.php') {
        wp_enqueue_script('njt-filebird-upload-scripts', plugin_dir_url(__FILE__) . 'js/hook-post-add-media.js', array('jquery'), NJT_FILEBIRD_VERSION, false);
    }
    // }
}
// add_action('admin_enqueue_scripts', 'add_admin_scripts', 10, 1);
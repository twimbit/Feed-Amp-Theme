<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://twimbit.com
 * @since      1.0.0
 *
 * @package    Twimcast_Api
 * @subpackage Twimcast_Api/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Twimcast_Api
 * @subpackage Twimcast_Api/public
 * @author     Twimbit <contactus@twimbit.com>
 */
class Twimcast_Api_Public
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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Twimcast_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Twimcast_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/twimcast-api-public.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Twimcast_Api_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Twimcast_Api_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/twimcast-api-public.js', array('jquery'), $this->version, false);
	}

	/* Unregistering default wordpress widgets */
	public function unregister_default_widgets()
	{
		// unregister all widgets
		unregister_widget('WP_Widget_Pages');
		unregister_widget('WP_Widget_Calendar');
		unregister_widget('WP_Widget_Archives');
		unregister_widget('WP_Widget_Links');
		unregister_widget('WP_Widget_Meta');
		unregister_widget('WP_Widget_Search');
		unregister_widget('WP_Widget_Text');
		unregister_widget('WP_Widget_Categories');
		unregister_widget('WP_Widget_Recent_Posts');
		unregister_widget('WP_Widget_Recent_Comments');
		unregister_widget('WP_Widget_RSS');
		unregister_widget('WP_Widget_Tag_Cloud');
		unregister_widget('WP_Nav_Menu_Widget');
		unregister_widget('Twenty_Eleven_Ephemera_Widget');
		unregister_widget('WP_Widget_Media_Audio');
		unregister_widget('WP_Widget_Media_Image');
		unregister_widget('WP_Widget_Media_Video');
		unregister_widget('WP_Widget_Custom_HTML');
		unregister_widget('WP_Widget_Media_Gallery');
	}
}


// Register and load the widget
function wpb_load_widget()
{
	register_widget('wpb_widget');
}
add_action('widgets_init', 'wpb_load_widget');

// Creating the widget 
class wpb_widget extends WP_Widget
{

	function __construct()
	{
		parent::__construct(

			// Base ID of your widget
			'wpb_widget',

			// Widget name will appear in UI
			__('WPBeginner Widget', 'wpb_widget_domain'),

			// Widget description
			array('description' => __('Sample widget based on WPBeginner Tutorial', 'wpb_widget_domain'),)
		);
	}

	// Creating widget front-end

	public function widget($args, $instance)
	{
		$title = apply_filters('widget_title', $instance['title']);

		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if (!empty($title))
			echo $args['before_title'] . $title . $args['after_title'];

		// This is where you run the code and display the output
		echo __('Hello, World!', 'wpb_widget_domain');
		echo $args['after_widget'];
	}

	// Widget Backend 
	public function form($instance)
	{
		if (isset($instance['title'])) {
			$title = $instance['title'];
		} else {
			$title = __('New title', 'wpb_widget_domain');
		}
		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
		</p>
<?php
	}

	// Updating widget replacing old instances with new
	public function update($new_instance, $old_instance)
	{
		$instance = array();
		$instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
		return $instance;
	}
} // Class wpb_widget ends here

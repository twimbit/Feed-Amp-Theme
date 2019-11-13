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
		// unregister_widget('WP_Widget_Pages');
		// unregister_widget('WP_Widget_Calendar');
		// unregister_widget('WP_Widget_Archives');
		// unregister_widget('WP_Widget_Links');
		// unregister_widget('WP_Widget_Meta');
		// unregister_widget('WP_Widget_Search');
		// unregister_widget('WP_Widget_Text');
		// unregister_widget('WP_Widget_Categories');
		// unregister_widget('WP_Widget_Recent_Posts');
		// unregister_widget('WP_Widget_Recent_Comments');
		// unregister_widget('WP_Widget_RSS');
		// unregister_widget('WP_Widget_Tag_Cloud');
		// unregister_widget('WP_Nav_Menu_Widget');
		// unregister_widget('Twenty_Eleven_Ephemera_Widget');
		// unregister_widget('WP_Widget_Media_Audio');
		// unregister_widget('WP_Widget_Media_Image');
		// unregister_widget('WP_Widget_Media_Video');
		// unregister_widget('WP_Widget_Custom_HTML');
		// unregister_widget('WP_Widget_Media_Gallery');
	}
}


/* Registering crousel widget */
require_once plugin_dir_path(dirname(__FILE__)) . 'public/widgets/twimcast-carousel.php';


/* Create widget meta and returning widget meta array*/
function createWidgetMeta()
{
	$sidebar_widgets = wp_get_sidebars_widgets()['sidebar-1'];
	$widget_meta = array();
	foreach ($sidebar_widgets as $widget) {
		$widget_param = explode('-', $widget, 2);
		$widget_meta[$widget]['name'] = "widget_" . $widget_param[0];
		$widget_meta[$widget]['id'] = $widget_param[1];
	}
	return $widget_meta;
}


/* Update widget data */
function updateWidgetMeta($name, $value)
{
	$widget_meta =  createWidgetMeta();
	foreach ($widget_meta as $widget) {
		$option_to_update = get_option($widget['name']);
		$option_to_update[$widget['id']][$name] = $value;
		update_option($widget['name'], $option_to_update, true);
	}
}


/* get widget data */
function getWidgetData()
{
	$widget_meta =  createWidgetMeta();
	$widget_data = [];
	foreach ($widget_meta as $key => $widget) {
		$option_to_update = get_option($widget['name']);
		$widget_data[$key] = $option_to_update[$widget['id']];
	}
	return $widget_data;
}

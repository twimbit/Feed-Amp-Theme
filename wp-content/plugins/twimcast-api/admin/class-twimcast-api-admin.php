<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://twimbit.com
 * @since      1.0.0
 *
 * @package    Twimcast_Api
 * @subpackage Twimcast_Api/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Twimcast_Api
 * @subpackage Twimcast_Api/admin
 * @author     Twimbit <contactus@twimbit.com>
 */
class Twimcast_Api_Admin
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
	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/twimcast-api-admin.css', array(), $this->version, 'all');

		/* jquery multiple select css */
		wp_enqueue_style('choosen min css', plugin_dir_url(__FILE__) . 'css/choosen.min.css', array(), $this->version, 'all');
	}


	/**
	 * Register the JavaScript for the admin area.
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
		/* jquery multiple select js */
		wp_enqueue_script('Choosen jquery min js', plugin_dir_url(__FILE__) . 'js/chosen.jquery.min.js', $this->version, false);

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/twimcast-api-admin.js', array('jquery'), $this->version, false);
	}

	/* Registering admin menu for wordpress */
	public function admin_action()
	{
		/* Twimcast admin page */
		$page_title = 'twimcast admin';
		$menu_title = 'twimcast';
		$capability = 'manage_options';
		$menu_slug  = 'twimcast-api';
		$function   = 'twimcast_api_admin_page';
		$icon_url   = 'dashicons-media-code';
		$position   = 2;
		add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
		/* Admin main page view */
		function twimcast_api_admin_page()
		{
			require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/twimcast-api-admin-display.php';
		}

		/* Twimcast submenue */
		add_submenu_page('twimcast-api', 'twimcast home', 'home', 'manage_options', 'twimcast_home', 'twimcast_api_admin_home');
		/* Twimcast admin home page view */
		function twimcast_api_admin_home()
		{
			require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/twimcast-api-admin-home.php';
		}

		/* Twimcast submenue */
		add_submenu_page('twimcast-api', 'twimcast settings', 'settings', 'manage_options', 'twimcast_settings', 'twimcast_api_admin_settings');
		/* Twimcast admin home page view */
		function twimcast_api_admin_settings()
		{
			require_once plugin_dir_path(dirname(__FILE__)) . 'admin/partials/twimcast-api-admin-settings.php';
		}
	}
}

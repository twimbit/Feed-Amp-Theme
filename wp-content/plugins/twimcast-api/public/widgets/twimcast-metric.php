<?php
function twimcast_metric()
{
    register_widget('twimcast_metric_widget');
}
add_action('widgets_init', 'twimcast_metric');

// Creating the widget 
class twimcast_metric_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

            // Base ID of your widget
            'twimcast_metric',

            // Widget name will appear in UI
            __('Metric Widget', 'twimcast_metric_widget_domain'),

            // Widget description
            array('description' => __('A Metric widget', 'twimcast_metric_widget_domain'),)
        );
    }

    // Creating widget front-end

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title)) { }
    }

    // Widget Backend 
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'twimcast_metric_widget_domain');
        }

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
} // Class twimcast_metric_widget ends here

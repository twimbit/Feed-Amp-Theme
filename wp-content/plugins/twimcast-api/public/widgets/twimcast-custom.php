<?php
function twimcast_custom()
{
    register_widget('twimcast_custom_widget');
}
add_action('widgets_init', 'twimcast_custom');

// Creating the widget 
class twimcast_custom_widget extends WP_Widget
{

    function __construct()
    {
        parent::__construct(

            // Base ID of your widget
            'twimcast_custom',

            // Widget name will appear in UI
            __('Custom Widget', 'twimcast_custom_widget_domain'),

            // Widget description
            array('description' => __('A Custom widget', 'twimcast_custom_widget_domain'),)
        );
    }

    // Creating widget front-end

    public function widget($args, $instance)
    {
        $title = apply_filters('widget_title', $instance['title']);
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if (!empty($title)) {
            $widgets = getWidgetData();
            $main = [];
            foreach ($widgets as $key => $val) {
                $widget_id = 'widget_' . $key;
                $main[$widget_id] = get_fields($widget_id);
                // if (have_rows('media', $widget_id)) {
                //     // loop through the rows of data
                //     while (have_rows('media', $widget_id)) {
                //         the_row();
                //         // display a sub field value
                //         $image = get_sub_field('image', $widget_id);
                //         $url = get_sub_field('link', $widget_id);
                //         $main[$widget_id][] = array(
                //             'image' => $image,
                //             'link' => $url
                //         );
                //     }
                // }
            }
        }
    }

    // Widget Backend 
    public function form($instance)
    {
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('New title', 'twimcast_custom_widget_domain');
        }


        // Widget admin form
        $args = array('post_type' => 'post');
        $posts = get_posts($args);
        $selected_posts = !empty($instance['selected_posts']) ? $instance['selected_posts'] : array();
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
} // Class twimcast_custom_widget ends here

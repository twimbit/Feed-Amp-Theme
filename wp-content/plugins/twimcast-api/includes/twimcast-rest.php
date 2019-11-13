<?php
add_filter('rest_url_prefix', 'rest_url_prefix');


/* Changing default wp-json to twimcast */
function rest_url_prefix()
{
    return 'twimcast';
}


/* end point returning data */
function customRest($data)
{
    $sidebar_widgets = createWidgetMeta();
    print_r(get_option('widget_twimcast_carousel'));
    $postsRest = [];
    foreach ($sidebar_widgets as $widget) {
        $postsRest[] = array(
            'name' => 'widget',
            'type' => $widget,
            'title' => 'this is widget title',
            'data' => array('data' => 'data will come here')
        );
    }

    return $postsRest;
}


/* Registering end point */
add_action('rest_api_init', function () {
    register_rest_route('/v1', '/widget/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'customRest',
    ));
});

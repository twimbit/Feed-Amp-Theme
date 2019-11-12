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
    $controller = new WP_REST_Posts_Controller('post');
    $postsRest = [];

    $postsRest[] = array(
        'name' => 'widget',
        'type' => 'carousel',
        'title' => 'This is testing widget',
        'data' => array('data' => 'data will come here')
    );
    return new WP_REST_Response($postsRest, 200);
}


/* Registering end point */
add_action('rest_api_init', function () {
    register_rest_route('/v1', '/widget/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'customRest',
    ));
});

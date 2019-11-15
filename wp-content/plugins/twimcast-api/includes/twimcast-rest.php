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
    // updateWidgetMeta('data', array('img' => 'url', 'img-1' => 'url'));
    //return getWidgetData()[$data['type']];
    widgetDataCreate();
}


/* Registering end point */
add_action('rest_api_init', function () {
    register_rest_route('/v1', '/widget/(?P<type>[^/]+)', array(
        'methods' => 'GET',
        'callback' => 'customRest',
    ));
});

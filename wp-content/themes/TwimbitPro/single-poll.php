<?php
/*
     * The template for displaying all poll template
     *
     *
     * */

get_header();


;
$webinar_title = get_the_title();
$poll = get_field('poll_type');
$attachment=get_field('webinar_attachment');
$attachment1=get_field('webinar_attachment1');
$zoom=get_field('zoom_webinar');
$slide=get_field('slide');
$webinar_img   = get_the_post_thumbnail_url($val);

?>

<style scoped>
    body{
        background-color: #fff;
    }
    .webinar-image
    {
        height: 15em;
        width: 100%;
        margin-bottom:0px;
    }


</style>

<!--<div class="webinar-head">-->
<!--    <img class="webinar-image" src="--><?php //echo $webinar_img ?><!--">-->
<!--</div>-->


<div id="embedWidget"></div>

<script type='text/javascript'>
    var _options = {
        '_license_key':'423-032-129',
        '_role_token':'',
        '_registration_token':'',
        '_widget_containerID':'embedWidget',
        '_widget_width':'100%',
        '_widget_height':'100vh',
    };
    (function() {
        !function(i){
            i.Widget=function(c){
                'function'==typeof c&&i.Widget.__cbs.push(c),
                i.Widget.initialized&&(i.Widget.__cbs.forEach(function(i){i()}),
                    i.Widget.__cbs=[])
            },
                i.Widget.__cbs=[]
        }(window);
        var ab = document.createElement('script');
        ab.type = 'text/javascript';
        ab.async = true;
        ab.src = 'https://embed.archiebot.com/em?t='+_options['_license_key']+'&'+Object.keys(_options).reduce(function(a,k){
            a.push(k+'='+encodeURIComponent(_options[k]));
            return a
        },[]).join('&');
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ab, s);
    })();
</script>
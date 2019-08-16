<?php
/*
     * The template for displaying all poll template
     *
     *
     * */

get_header();


$webinar_img   = get_the_post_thumbnail_url($val);
$heading_poll   = get_field('heading_poll');
$presenter_poll   = get_field('presenter_poll');
$schedule_poll   = get_field('schedule_poll');
?>

<style scoped>
    body{
        background-color: #fff;
    }
    .webinar-head{
        display: flex;
        margin-top: 55px;
        position: relative;
        height: 12em;
        background-image: url("<?php echo $webinar_img ?>");
    }

    .details-poll{
        display:flex;
        position: absolute;
        width: 100%;
        height: 100%;
        flex-wrap: wrap;
        align-items: center;
        /*flex-grow: 1;*/
    }
    .heading-poll
    {
        /*margin-top: -5em;*/
        color: white;
        padding-left: 5rem;
        text-transform: capitalize;
    }
    .heading-poll h3
    {
        font-weight: 800;
    }
    .presenter-poll h4
    {
        font-weight: 700;
        font-size: 18px;
    }
    .presenter-poll {
        /*margin-top: -3em;*/
        color: white;
        padding-left: 5rem;
        font-weight: 700;
        text-transform: capitalize;
    }
    .presenter-main{
        display: flex;
    }
    .schedule_main{
        display: flex;
    }
    .presenter_detail{
        margin-left: 4px;
    }
    .schedule_detail{
        margin-left:4px;
    }
    .presenter{
        margin-left: 1px;
    }
    .schedule{
        margin-left:16px;
    }
    @media (max-width:768px)  {
        .presenter-poll h4{
            font-size: 18px;
        }
        .heading-poll h3
        {
            font-size: 22px;
        }
    }
    @media (max-width:650px) {
        .details-poll{
            flex-direction: column;
        }
        .heading-poll
        {
            padding-left: 0px;
            margin-top: 2rem;
            /* font-size: 28px; */
            width: 100%;
            text-align: center;
        }
        .heading-poll h3
        {
            font-size: 30px;
            font-weight: 800;
        }
        .presenter-poll{
            margin-top: 3rem;
            width: 100%;
        }
    }
    @media (max-width:430px) {
        .heading-poll h3
        {
            font-size: 23px;
        }
        .presenter-poll{
            margin-top: 2rem;
        }
    }
    @media (max-width:320px) {
        .heading-poll h3
        {
            font-size: 20px;
        }
        .presenter-poll{
            margin-top: 2rem;
            padding-left: 2.5rem;
        }
    }

</style>

<div class="webinar-head">

    <div class="fade"></div>
    <div class="details-poll">
        <div class="col-6 heading-poll">
            <h3><?php echo $heading_poll ?></h3>
        </div>
        <div class="col-6 presenter-poll">
            <div class="presenter-main">
                <div class="presenter">
                    <h4>Presenters: </h4>
                </div>
                <div class="presenter_detail">
                    <h4> <?php echo $presenter_poll ?></h4>
                </div>
            </div>
            <div class="schedule_main">
                <div class="schedule">
                    <h4>Schedule:</h4>
                </div>
                <div class="schedule_detail">
                    <h4> <?php echo $schedule_poll ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="embedWidget"></div>

<script type='text/javascript'>
    var _options = {
        '_license_key':'423-032-129',
        '_role_token':'',
        '_registration_token':'',
        '_widget_containerID':'embedWidget',
        '_widget_width':'100%',
        '_widget_height':'70vh',
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
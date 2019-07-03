<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


<!--bottom navigation bar-->
<!-- .site-footer -->
<footer id="colophon" class="site-footer footer_amp tabs_bottom d-lg-none" role="contentinfo">

    <a id="feed_bottom" class="nav_button" style="background:url('<?php print content_url() . '/themes/TwimbitLite/src/feed.svg'; ?>');">

    </a>
    <a id="explore_bottom" class="nav_button" style="background:url('<?php print content_url() . '/themes/TwimbitLite/src/explore.svg'; ?>');">

    </a>
    <a on="tap:sidebar.toggle" class="nav_button" style="background:url('<?php print content_url() . '/themes/TwimbitLite/src/menu.svg'; ?>');">

    </a>
</footer>
</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<script>
    let feed = document.querySelector('#feed');
    feed.addEventListener('click', function(event) {
        $.get("http://localhost/wordpress/feed-2", function(data) {
            $('#main').html(data);
        });
    });
    let feed_bottom = document.querySelector('#feed_bottom');
    feed_bottom.addEventListener('click', function(event) {
        $.get("http://localhost/wordpress/feed-2", function(data) {
            $('#main').html(data);
        });
    });
    let explore = document.querySelector('#explore');
    explore.addEventListener('click', function(event) {
        $.get("http://localhost/wordpress/explore/", function(data) {
            $('#main').html(data);
        });
    });
    let explore_bottom = document.querySelector('#explore_bottom');
    explore_bottom.addEventListener('click', function(event) {
        $.get("http://localhost/wordpress/explore/", function(data) {
            $('#main').html(data);
        });
    });
</script>
</body>

</html>
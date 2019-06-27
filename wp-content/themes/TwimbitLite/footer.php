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

</div><!-- .site-content -->
<!--bottom navigation bar-->
<!-- .site-footer -->
<footer id="colophon" class="site-footer footer_amp tabs_bottom" role="contentinfo" >

    <a href="http://localhost/app-theme/" class="nav_button" style="background:url('<?php print content_url() . '/themes/TwimbitLite/src/feed.svg'; ?>');">

    </a>
    <a href="http://localhost/app-theme/explore" class="nav_button" style="background:url('<?php print content_url() . '/themes/TwimbitLite/src/explore.svg'; ?>');">

    </a>
    <a on="tap:sidebar.toggle" class="nav_button" style="background:url('<?php print content_url() . '/themes/TwimbitLite/src/menu.svg'; ?>');">

    </a>
</footer>
</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>

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

		<footer id="colophon" class="site-footer footer_amp" role="contentinfo" >

            <div class="signup_form" >

            </div>
            <div class="twimbit_logo">
                <img src='<?php print content_url() . '/themes/TwimbitLite/src/t-logo.png'; ?>' style="">
            </div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>

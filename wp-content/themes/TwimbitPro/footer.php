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
<footer id="colophon" class="site-footer footer_amp tabs_bottom md-hide lg-hide" role="contentinfo">
    <div class="footer-content flex">
        <a id="feed-button" class="nav_button feed-selector-class" on="tap:explore-tab-section.hide(),feed-tab-section.show()" aria-label="feed button" <?php if (!(is_home())) {
                                                                                                                                                            ?> href="<?php echo home_url(); ?>" <?php } ?>>
            <svg>
                <path d="M 2 26.51701164245605 L 26.82351112365723 26.51701164245605 L 26.82351112365723 22.59750747680664 L 2 22.59750747680664 L 2 26.51701164245605 Z M 25.51700782775879 9.532502174377441 L 3.306500434875488 9.532502174377441 C 2.587925434112549 9.532502174377441 2 10.12042713165283 2 10.83900260925293 L 2 18.67800521850586 C 2 19.39658164978027 2.587925434112549 19.98450660705566 3.306500434875488 19.98450660705566 L 25.51700782775879 19.98450660705566 C 26.2355842590332 19.98450660705566 26.82351112365723 19.39658164978027 26.82351112365723 18.67800521850586 L 26.82351112365723 10.83900260925293 C 26.82351112365723 10.12042713165283 26.2355842590332 9.532502174377441 25.51700782775879 9.532502174377441 Z M 2 3 L 2 6.919501304626465 L 26.82351112365723 6.919501304626465 L 26.82351112365723 3 L 2 3 Z">
                </path>
            </svg>
        </a>
        <a id="explore-button" class="nav_button explore-selector-class" on="tap:explore-tab-section.show(),feed-tab-section.hide()" aria-label="explore button" <?php if (!(is_home())) {
                                                                                                                                                                        ?> href="<?php echo home_url(); ?>/explore" <?php } ?>>
            <svg>
                <path d="M 14.39246368408203 27.51700592041016 L 23.0528507232666 27.51700592041016 L 23.0528507232666 17.12454223632813 L 14.39246368408203 17.12454223632813 L 14.39246368408203 27.51700592041016 Z M 4 27.51700592041016 L 12.66038703918457 27.51700592041016 L 12.66038703918457 5 L 4 5 L 4 27.51700592041016 Z M 24.78492736816406 27.51700592041016 L 33.4453125 27.51700592041016 L 33.4453125 17.12454223632813 L 24.78492736816406 17.12454223632813 L 24.78492736816406 27.51700592041016 Z M 14.39246368408203 5 L 14.39246368408203 15.39246273040771 L 33.4453125 15.39246273040771 L 33.4453125 5 L 14.39246368408203 5 Z">
                </path>
            </svg>
        </a>
        <a id="feed_bottom" on="tap:header-sidebar.toggle" class="nav_button" aria-label="feed bottom">
            <svg>
                <path id="ic_dehaze_24px" d="M2,22.479v3.4H28v-3.4Zm0-8.49v3.4H28v-3.4ZM2,5.5V8.9H28V5.5Z"></path>
            </svg>
        </a>
    </div>

</footer>
</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
<!-- <script async>
    document.addEventListener("DOMContentLoaded", function() {
        /* hide header and footer */
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (window.pageYOffset > 50 && prevScrollpos < currentScrollPos) {
                /* Hide header and footer */
                document.querySelector(".ampstart-headerbar").style.top = "-70px";
                document.querySelector("#colophon").style.bottom = "-70px";
            } else if (prevScrollpos > currentScrollPos) {
                // show header and footer
                document.querySelector(".ampstart-headerbar").style.top = "0";
                document.querySelector("#colophon").style.bottom = "0";
            }
            prevScrollpos = currentScrollPos;
        }

        /* Explore and feed switching */
        // feed button
        header_nav = document.querySelectorAll('.feed-selector-class');
        for (var i = 0; i < header_nav.length; i++) {
            header_nav[i].addEventListener('click', function() {
                document.querySelector('#explore-nav').classList.remove("active-nav");
                document.querySelector('#feed-nav').className += ' active-nav';

                document.querySelector('#feed-button').className += ' active-nav';
                document.querySelector('#explore-button').classList.remove("active-nav");
            }, false);
        }

        // explore button
        header_explore = document.querySelectorAll('.explore-selector-class');
        for (var i = 0; i < header_explore.length; i++) {
            header_explore[i].addEventListener('click', function() {
                document.querySelector('#explore-nav').className += ' active-nav';
                document.querySelector('#feed-nav').classList.remove("active-nav");

                document.querySelector('#explore-button').className += ' active-nav';
                document.querySelector('#feed-button').classList.remove("active-nav");
            }, false);
        }
    });
</script> -->
</body>

</html>
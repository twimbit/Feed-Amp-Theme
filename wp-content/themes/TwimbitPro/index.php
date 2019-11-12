<?php
get_header();
// include "page-templates/pf.php";
$template_directory = get_template_directory_uri();
?>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        /* setting feed button to active */
        document.querySelector('#feed-button').className += ' active-nav';
        document.querySelector('#feed-nav').className += ' active-nav';

        /* setting nutshell background as per time */
        let time = new Date();
        let h = time.getHours();
        if (h < 12) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php
                                                                                    if (check_webp_support()) {
                                                                                        echo $template_directory . '/src/morning.jpeg.webp';
                                                                                    } else {
                                                                                        echo $template_directory . '/src/morning.jpeg';
                                                                                    }
                                                                                    ?>)"
        } else if (h >= 12 && h < 17) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php if (check_webp_support()) {
                                                                                        echo $template_directory . '/src/afternoon.jpg.webp';
                                                                                    } else {
                                                                                        echo $template_directory . '/src/afternoon.jpg';
                                                                                    } ?>)"
        } else if (h >= 17 && h < 19) {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php if (check_webp_support()) {
                                                                                        echo $template_directory . '/src/evening.jpeg.webp';
                                                                                    } else {
                                                                                        echo $template_directory . '/src/evening.jpeg';
                                                                                    }
                                                                                    ?>)"
        } else {
            document.querySelector('.nutshell-top').style.backgroundImage = "url(<?php if (check_webp_support()) {
                                                                                        echo $template_directory . '/src/night.jpeg.webp';
                                                                                    } else {
                                                                                        echo $template_directory . '/src/night.jpeg';
                                                                                    }
                                                                                    ?>)"
        }

    });
</script>
<style scoped>
    .nutshell-top {
        height: 183px;
        margin-top: 55px;
        position: relative;
        background-size: 49% 100%
    }

    .nutshell-container-image {
        display: flex;
        flex-wrap: wrap;
        position: absolute;
        height: 183px;
        width: 100%;
        box-shadow: 0 0 15px 5px rgba(0, 0, 0, 0.16);
        background: linear-gradient(90deg, #ffffff00, white 50%)
    }

    .nutshell-inner {
        display: flex;
        height: 100%;
        flex-wrap: wrap
    }

    .nutshell-inner-first {
        display: flex;
        justify-content: center;
        position: relative;
        align-items: center;
        color: #FFFF
    }

    .nutshell-inner-second {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #FFFF
    }

    .nutshell-inner-first .date {
        border: 2px solid #FFFF;
        padding: 2.5rem 1rem;
        font-size: 4rem;
        margin-right: 1.5rem;
        border-radius: 20px;
        font-weight: 500
    }

    .nutshell-inner-first .month {
        font-size: 1.5rem;
        margin-bottom: 1rem;
        font-weight: 500
    }

    .nutshell-inner-first .day {
        font-size: 2rem;
        font-weight: 600
    }

    .nutshell-svg {
        transform: translate(30px, 6px) scale(0.6)
    }

    .nutshell-today-text {
        font-size: 2.5rem;
        line-height: 3rem;
        text-align: center;
        margin-right: 5rem;
        color: #000;
        font-weight: 300;
        width: min-content;
        z-index: 4
    }

    .floating {
        animation-name: floating;
        animation-duration: 2s;
        animation-iteration-count: infinite;
        animation-timing-function: cubic-bezier(0.79, 0.01, 0.49, 0.98) margin-left: 30px;
        margin-top: 5px
    }

    .user-visited.b {
        fill: #a1a1a1
    }

    .user-visited {
        animation-duration: 0s !important;
        transform: scale(0.4)
    }

    .user-visited .c {
        fill: #a1a1a1
    }

    .user-visited .d {
        fill: #a1a1a1
    }

    .user-visited .e {
        fill: #d3d6d8
    }

    @keyframes floating {
        0% {
            transform: scale(0.6)
        }

        65% {
            transform: scale(0.7)
        }

        100% {
            transform: scale(0.6)
        }
    }

    @media (max-width:768px) {
        .nutshell-inner-second {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFFF
        }

        .nutshell-inner-first .date {
            border: 2px solid #FFFF;
            padding: 1.8rem .8rem;
            font-size: 3rem;
            margin-right: 1.5rem;
            border-radius: 20px
        }

        .nutshell-inner-first .month {
            font-size: 1.5rem;
            margin-bottom: .5rem
        }

        .nutshell-inner-first .day {
            font-size: 2rem;
            font-weight: 600
        }

        .nutshell-svg svg {
            transform: translate(75px, 6px)
        }

        .nutshell-today-text {
            font-size: 2rem;
            line-height: 2.5rem;
            text-align: center;
            margin-right: 8rem;
            color: #000;
            font-weight: 300;
            width: min-content
        }
    }

    @keyframes floating {
        0% {
            transform: scale(0.4)
        }

        65% {
            transform: scale(0.5)
        }

        100% {
            transform: scale(0.4)
        }
    }

    @media (max-width:40.06rem) {
        .nutshell-inner-first {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            color: #FFFF
        }

        .nutshell-top {
            background-size: 118% 100%
        }

        .floating {
            order: 1
        }

        .nutshell-inner-second {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            color: #FFFF;
            height: 100%
        }

        .month-day {
            text-align: center
        }

        .nutshell-inner-first .date {
            border: 2px solid #FFFF;
            padding: 1.2rem .5rem;
            font-size: 2rem;
            margin-bottom: 1rem;
            margin-right: 0;
            border-radius: 20px
        }

        .nutshell-inner-first .month {
            font-size: 1.5rem;
            margin-bottom: .5rem
        }

        .nutshell-inner-first .day {
            font-size: 1.5rem;
            font-weight: 600
        }

        .nutshell-svg svg {
            transform: translate(0px, -44px)
        }

        .nutshell-today-text {
            font-size: 1.8rem;
            line-height: 2.2rem;
            text-align: center;
            order: 0;
            margin-right: 0;
            position: relative;
            top: 1.4rem;
            color: #000;
            font-weight: 300;
            width: min-content
        }
    }
</style>
<?php
if (is_active_sidebar('sidebar-1')) : ?>

    <aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e('Home', 'twimcast'); ?>">
        <?php
            if (is_active_sidebar('sidebar-1')) {
                ?>
            <div class="widget-column footer-widget-1">
                <?php dynamic_sidebar('sidebar-1'); ?>
            </div>
        <?php
            }
            ?>
    </aside><!-- .widget-area -->

<?php endif; ?>

<?php get_footer(); ?>
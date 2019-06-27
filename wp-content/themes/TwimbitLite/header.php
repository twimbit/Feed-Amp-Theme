<!DOCTYPE html>
<html amp="">

<head>
    <meta charset="utf-8">
    <meta name="amp-google-client-id-api" content="googleanalytics">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

    <!-- service worker tag register -->
    <script custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js" async=""></script>

    <!-- Manifest file -->
    <link rel="manifest" href="<?php print content_url() . '/themes/TwimbitLite/src/manifest.json'; ?>">


    <!-- AMP Scripts -->
    <script custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" async></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-template="amp-mustache" src="https://cdn.ampproject.org/v0/amp-mustache-0.2.js"></script>
    <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>



    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both;
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden;
            }

            to {
                visibility: visible;
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden;
            }

            to {
                visibility: visible;
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden;
            }

            to {
                visibility: visible;
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden;
            }

            to {
                visibility: visible;
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden;
            }

            to {
                visibility: visible;
            }
        }
    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none;
            }
        </style>
    </noscript>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <style amp-custom>
        amp-carousel .i-amphtml-scrollable-carousel-container::-webkit-scrollbar {
            display: none;
        }

        div,
        span,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        blockquote,
        a,
        ol,
        ul,
        li,
        figcaption,
        textarea,
        input {
            font: inherit;
        }

        * {
            box-sizing: border-box;
            outline: none;
            font-family: 'Roboto', sans-serif;
        }

        .b1 {
            border: 1px solid red;
        }

        *:focus {
            outline: none;
        }

        body {
            position: relative;
            font-style: normal;
            line-height: 1.5;
        }

        section {
            background-color: #ffffff;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
            padding: 30px 0;
        }

        section,
        .container,
        .container-fluid {
            position: relative;
            word-wrap: break-word;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        p,
        li,
        blockquote {
            letter-spacing: 0.5px;
            line-height: 1.7;
        }

        ul,
        ol,
        blockquote,
        p {
            margin-bottom: 0;
            margin-top: 0;
        }

        a {
            cursor: pointer;
        }

        a,
        a:hover {
            text-decoration: none;
        }

        a.mbr-iconfont:hover {
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .display-1,
        .display-2,
        .display-4,
        .display-5,
        .display-7 {
            word-break: break-word;
            word-wrap: break-word;
        }

        b,
        strong {
            font-weight: bold;
        }

        blockquote {
            padding: 10px 0 10px 20px;
            position: relative;
            border-left: 3px solid;
        }

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            transition-delay: 9999s;
            transition-property: background-color, color;
        }

        html,
        body {
            height: auto;
            min-height: 100vh;
        }

        .mbr-section-title {
            margin: 0;
            padding: 0;
            font-style: normal;
            line-height: 1.2;
            width: 100%;
        }

        .mbr-section-subtitle {
            line-height: 1.3;
            width: 100%;
        }

        .mbr-text {
            font-style: normal;
            line-height: 1.6;
            width: 100%;
        }

        .mbr-figure {
            align-self: center;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-color: transparent;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc
        }

        .btn-primary.focus,
        .btn-primary:focus {
            box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
        }

        .btn-primary.disabled,
        .btn-primary:disabled {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            color: #fff;
            background-color: #0062cc;
            border-color: #005cbf
        }

        .btn-primary:not(:disabled):not(.disabled).active:focus,
        .btn-primary:not(:disabled):not(.disabled):active:focus,
        .show>.btn-primary.dropdown-toggle:focus {
            box-shadow: 0 0 0 .2rem rgba(38, 143, 255, .5)
        }

        .btn-form {
            padding: 1rem 2rem;
        }

        .btn-form:hover {
            cursor: pointer;
        }

        .note-popover .btn:after {
            display: none;
        }



        @media (min-width: 992px) {
            .lg-pb {
                padding-bottom: 3rem;
            }
        }

        @media (max-width: 991px) {
            .md-pb {
                padding-bottom: 2rem;
            }
        }


        .items-list {
            list-style-type: none;
            padding: 0;
        }

        .items-list .list-item {
            padding: 1rem 2rem;
        }



        .gallery-img-wrap {
            position: relative;
            height: 100%;
        }

        .gallery-img-wrap:hover {
            cursor: pointer;
        }

        .gallery-img-wrap:hover .icon-wrap,
        .gallery-img-wrap:hover .caption-on-hover {
            opacity: 1;
        }

        .gallery-img-wrap:hover:after {
            opacity: .5;
        }

        .gallery-img-wrap amp-img {
            height: 250px;
        }

        .gallery-img-wrap:after {
            content: "";
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background: #000;
            opacity: 0;
            transition: opacity .3s;
            pointer-events: none;
        }

        .gallery-img-wrap .icon-wrap,
        .gallery-img-wrap .img-caption {
            position: absolute;
            z-index: 3;
            pointer-events: none;
        }

        .gallery-img-wrap .icon-wrap,
        .gallery-img-wrap .caption-on-hover {
            opacity: 0;
            transition: opacity .3s;
        }

        .gallery-img-wrap .icon-wrap {
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: .5rem;
            border-radius: 50%;
        }

        .gallery-img-wrap .img-caption {
            left: 0;
            right: 0;
        }

        .gallery-img-wrap .img-caption.caption-top {
            top: 0;
        }

        .gallery-img-wrap .img-caption.caption-bottom {
            bottom: 0;
        }

        .gallery-img-wrap .img-caption:after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            transition: opacity .3s;
            z-index: -1;
            pointer-events: none;
        }

        @media (max-width: 767px) {

            .gallery-img-wrap:after,
            .gallery-img-wrap:hover:after,
            .gallery-img-wrap .icon-wrap {
                display: none;
            }

            .gallery-img-wrap .caption-on-hover {
                opacity: 1;
            }
        }

        .is-builder .gallery-img-wrap .icon-wrap {
            pointer-events: all;
        }

        .is-builder .gallery-img-wrap .img-caption>* {
            pointer-events: all;
        }

        .icons-list a {
            margin-right: 1rem;
        }

        .icons-list a:last-child {
            margin-right: 0;
        }

        .counter-container {
            position: relative;
        }

        .counter-container ol li {
            margin-bottom: 2rem;
        }

        .counter-container.stylizedCounters ol {
            counter-reset: section;
        }

        .counter-container.stylizedCounters ol li {
            z-index: 3;
            list-style: none;
        }

        .counter-container.stylizedCounters ol li:before {
            z-index: 2;
            position: absolute;
            left: 0;
            counter-increment: section;
            content: counters(section, ".") " ";
            text-align: center;
            margin: 0 10px;
            line-height: 37px;
            width: 40px;
            height: 40px;
            transition: all .2s;
            color: #232323;
            font-size: 25px;
            border-radius: 50%;
            font-weight: bold;
        }

        .timeline-wrap {
            position: relative;
        }

        .timeline-wrap .iconBackground {
            position: absolute;
            left: 50%;
            width: 20px;
            height: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            font-size: 30px;
            display: inline-block;
            background-color: #232323;
            top: 20px;
            margin-left: -10px;
        }

        @media (max-width: 768px) {
            .timeline-wrap .iconBackground {
                left: 0;
            }

            .d-md-none {
                display: none !important
            }

        }

        .separline {
            position: relative;
        }

        @media (max-width: 768px) {
            .separline:not(.last-child) {
                padding-bottom: 2rem;
            }
        }

        .separline:before {
            position: absolute;
            content: "";
            width: 2px;
            background-color: #232323;
            left: calc(50% - 1px);
            height: calc(100% - 20px);
            top: 40px;
        }
        .masonry-wrapper {
            padding: 1.5em;
            max-width: 1200px;
            margin-right: auto;
            margin-left: auto;
        }
        @media (max-width: 768px) {
            .separline:before {
                left: 0;
            }
        }

        .masonry-wrapper {
            padding: 1.5em;
            max-width: 1200px;
            margin-right: auto;
            margin-left: auto;
        }

        .masonry {
            columns: 1;
            column-gap: 20px;
        }

        .masonry-item {
            border-radius: 10px;
            display: inline-block;
            vertical-align: top;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        @media only screen and (max-width: 1023px) and (min-width: 768px) {
            .masonry {
                columns: 2;
            }
        }

        @media only screen and (min-width: 1024px) {
            .masonry {
                columns: 3;
            }
        }

        .masonry-item,
        .masonry-content {
            border-radius: 10px;
            overflow: hidden;
        }

        .masonry-item {
            border-radius:10px;
            box-shadow:0px 3px 20px 0 rgba(0,0,0,0.2);
            transition: filter .25s ease-in-out;
        }

        .masonry-item:hover {
            filter: drop-shadow(0px 5px 5px rgba(0, 0, 0, .3));
            border-radius: 10px;
        }

        .masonry-content {
            overflow: hidden;
        }

        .masonry-item {
            border-radius: 10px;
            color: #111111;
            background-color: #f9f9f9;
        }

        .masonry-title,
        .masonry-description {
            margin: 0;
        }

        .masonry-title {
            font-weight: 700;
            font-size: 1.1rem;
            padding: 1rem 1.5rem;
        }

        .masonry-description {
            padding: 1.5rem;
            font-size: .75rem;
            border-top: 1px solid rgba(0, 0, 0, .05);
        }

        amp-image-lightbox a.control {
            position: absolute;
            width: 32px;
            height: 32px;
            right: 48px;
            top: 32px;
            z-index: 1000;
        }

        amp-image-lightbox a.control .close {
            position: relative;
        }

        amp-image-lightbox a.control .close:before,
        amp-image-lightbox a.control .close:after {
            position: absolute;
            left: 15px;
            content: ' ';
            height: 33px;
            width: 2px;
            background-color: #fff;
        }

        amp-image-lightbox a.control .close:before {
            transform: rotate(45deg);
        }

        amp-image-lightbox a.control .close:after {
            transform: rotate(-45deg);
        }

        .iconbox.iconfont-wrapper {
            cursor: pointer;
        }

        .iconbox.iconfont-wrapper svg {
            pointer-events: none;
        }

        .lightbox {
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: absolute;
            display: flex;
            flex-direction: column;
            -webkit-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            justify-content: center;
        }

        .lightbox .video-block {
            width: 100%;
        }

        .hidden {
            visibility: hidden;
        }

        .super-hide {
            display: none;
        }

        .inactive {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            pointer-events: none;
            -webkit-user-drag: none;
            user-drag: none;
        }

        .popover-content ul.show {
            min-height: 155px;
        }

        .mbr-white {
            color: #ffffff;
        }

        .mbr-black {
            color: #000000;
        }

        .align-left {
            text-align: left;
        }

        .align-left .list-item {
            justify-content: flex-start;
        }

        .align-center {
            text-align: center;
        }

        .align-center .list-item {
            justify-content: center;
        }

        .align-right {
            text-align: right;
        }

        .align-right .list-item {
            justify-content: flex-end;
        }

        @media (max-width: 767px) {

            .align-left,
            .align-center,
            .align-right {
                text-align: center;
            }

            .align-left .list-item,
            .align-center .list-item,
            .align-right .list-item {
                justify-content: center;
            }
        }

        .mbr-light {
            font-weight: 300;
        }

        .mbr-regular {
            font-weight: 400;
        }

        .mbr-semibold {
            font-weight: 500;
        }

        .mbr-bold {
            font-weight: 700;
        }

        .mbr-section-btn {
            margin-left: -.8rem;
            margin-right: -.8rem;
            font-size: 0;
        }

        nav .mbr-section-btn {
            margin-left: 0;
            margin-right: 0;
        }

        .btn .mbr-iconfont,
        .btn.btn-sm .mbr-iconfont {
            cursor: pointer;
            margin-right: 0.5rem;
        }

        .btn.btn-md .mbr-iconfont,
        .btn.btn-md .mbr-iconfont {
            margin-right: 0.8rem;
        }

        [type="submit"] {
            -webkit-appearance: none;
        }

        .mbr-fullscreen .mbr-overlay {
            min-height: 100vh;
        }

        .mbr-fullscreen {
            display: flex;
            display: -webkit-flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -o-flex;
            align-items: center;
            -webkit-align-items: center;
            min-height: 100vh;
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        .justify-content-center {
            -ms-flex-pack: center !important;
            justify-content: center !important
        }

        .mbr-overlay {
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 0;
        }

        .mbr-parallax-bg {
            bottom: 0;
            left: 0;
            opacity: .5;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 0;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        section.menu {
            min-height: 70px;
        }

        .responsive {
            width: 100%;
            height: auto;
        }

        .menu-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 70px;
        }

        @media (max-width: 991px) {
            .menu-container {
                max-width: 100%;
                padding: 0 2rem;
            }
        }

        @media (max-width: 767px) {
            .menu-container {
                padding: 0 1rem;
            }
        }

        .navbar {
            z-index: 100;
            width: 100%;
        }

        .navbar-fixed-top {
            position: fixed;
            top: 0;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            word-break: break-word;
            z-index: 1;
        }

        .navbar-logo {
            margin-right: .8rem;
        }

        @media (max-width: 767px) {
            .navbar-logo amp-img {
                max-height: 55px;
                max-width: 55px;
            }
        }

        .navbar-caption-wrap {
            display: flex;
        }

        .navbar .navbar-collapse {
            display: flex;
            flex-basis: auto;
            align-items: center;
            justify-content: flex-end;
        }

        @media (max-width: 991px) {
            .navbar .navbar-collapse {
                display: none;
                position: absolute;
                top: 0;
                right: 0;
                min-height: 100vh;
                padding: 70px 2rem 1rem;
                z-index: 1;
            }
        }

        @media (max-width: 991px) {

            .navbar.opened .navbar-collapse.show,
            .navbar.opened .navbar-collapse.collapsing {
                display: block;
            }

            .is-builder .navbar-collapse {
                position: fixed;
            }
        }

        .navbar-nav {
            list-style-type: none;
            display: flex;
            flex-wrap: wrap;
            padding-left: 0;
            min-width: 10rem;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                flex-direction: column;
            }
        }

        .navbar-nav .mbr-iconfont {
            margin-right: .2rem;
        }

        .nav-item {
            word-break: break-all;
        }

        .nav-link {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-link,
        .navbar-caption {
            transition: all 0.2s;
            letter-spacing: 1px;
        }

        .nav-dropdown .dropdown-menu {
            min-width: 10rem;
            padding-bottom: 1.25rem;
            padding-top: 1.25rem;
            position: absolute;
            left: 0;
        }

        .nav-dropdown .dropdown-menu .dropdown-item {
            line-height: 2;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: .25rem 1.5rem;
            white-space: nowrap;
        }

        .nav-dropdown .dropdown-menu .dropdown {
            position: relative;
        }

        .dropdown-menu .dropdown:hover>.dropdown-menu {
            opacity: 1;
            pointer-events: all;
        }

        .nav-dropdown .dropdown-submenu {
            top: 0;
            left: 100%;
            margin: 0;
        }

        .nav-item.dropdown {
            position: relative;
        }

        .nav-item.dropdown .dropdown-menu {
            opacity: 0;
            pointer-events: none;
        }

        .nav-item.dropdown:hover>.dropdown-menu {
            opacity: 1;
            pointer-events: all;
        }

        .link.dropdown-toggle:after {
            content: '';
            margin-left: .25rem;
            border-top: 0.35em solid;
            border-right: 0.35em solid transparent;
            border-left: 0.35em solid transparent;
            border-bottom: 0;
        }

        .navbar .dropdown.open>.dropdown-menu {
            display: block;
        }

        @media (max-width: 991px) {
            .is-builder .nav-dropdown .dropdown-menu {
                position: relative;
            }

            .nav-dropdown .dropdown-submenu {
                left: 0;
            }

            .dropdown-item {
                padding: .25rem 1.5rem;
                margin: 0;
                justify-content: center;
            }

            .dropdown-item:after {
                right: auto;
            }

            .navbar.opened .dropdown-menu {
                top: 0;
            }

            .dropdown-toggle[data-toggle="dropdown-submenu"]:after {
                content: '';
                margin-left: .25rem;
                border-top: .35em solid;
                border-right: .35em solid transparent;
                border-left: .35em solid transparent;
                border-bottom: 0;
                top: 55%;
            }
        }

        .navbar-buttons {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 991px) {
            .navbar-buttons {
                flex-direction: column;
            }
        }

        .menu-social-list {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .menu-social-list a {
            margin: 0 .5rem;
        }

        button.navbar-toggler {
            position: absolute;
            right: 20px;
            top: 25px;
            width: 31px;
            height: 20px;
            cursor: pointer;
            transition: all .2s;
            align-self: center;
        }

        .hamburger span {
            position: absolute;
            right: 0;
            width: 30px;
            height: 2px;
            border-right: 5px;
        }

        .hamburger span:nth-child(1) {
            top: 0;
            transition: all .2s;
        }

        .hamburger span:nth-child(2) {
            top: 8px;
            transition: all .15s;
        }

        .hamburger span:nth-child(3) {
            top: 8px;
            transition: all .15s;
        }

        .hamburger span:nth-child(4) {
            top: 16px;
            transition: all .2s;
        }

        nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(1) {
            top: 8px;
            width: 0;
            opacity: 0;
            right: 50%;
            transition: all .2s;
        }

        nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(2) {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            transition: all .25s;
        }

        nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(3) {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            transition: all .25s;
        }

        nav.opened .navbar-toggler:not(.hide) .hamburger span:nth-child(4) {
            top: 8px;
            width: 0;
            opacity: 0;
            right: 50%;
            transition: all .2s;
        }

        .ampstart-btn.hamburger {
            position: absolute;
            top: 25px;
            right: 15px;
            margin-left: auto;
            width: 30px;
            height: 20px;
            background: none;
            border: none;
            cursor: pointer;
            z-index: 1000;
        }

        @media (min-width: 992px) {

            .ampstart-btn,
            amp-sidebar {
                display: none;
            }

            .dropdown-menu .dropdown-toggle:after {
                content: '';
                border-bottom: 0.35em solid transparent;
                border-left: 0.35em solid;
                border-right: 0;
                border-top: 0.35em solid transparent;
                margin-left: 0.3rem;
                margin-top: -0.3077em;
                position: absolute;
                right: 1.1538em;
                top: 50%;
            }
        }

        .close-sidebar {
            width: 30px;
            height: 30px;
            position: relative;
            cursor: pointer;
            background-color: transparent;
            border: none;
        }

        .close-sidebar span {
            position: absolute;
            left: 0;
            width: 30px;
            height: 2px;
            border-right: 5px;
        }

        .close-sidebar span:nth-child(1) {
            transform: rotate(45deg);
        }

        .close-sidebar span:nth-child(2) {
            transform: rotate(-45deg);
        }

        .builder-sidebar {
            position: relative;
            min-height: 100vh;
            z-index: 1030;
            padding: 1rem 2rem;
            max-width: 20rem;
        }

        .builder-sidebar .dropdown:hover>.dropdown-menu {
            position: relative;
            text-align: center;
        }

        section.sidebar-open:before {
            content: '';
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.2);
            z-index: 1040;
        }

        .map-placeholder {
            display: none;
        }

        .map-placeholder h4 {
            padding-top: 5rem;
            color: #767676;
            text-align: center;
        }

        .google-map {
            position: relative;
            width: 100%;
        }

        @media (max-width: 992px) {
            .google-map {
                padding: 0;
                margin: 0;
            }
        }

        .google-map [data-state-details] {
            color: #6b6763;
            font-family: Montserrat;
            height: 1.5em;
            margin-top: -0.75em;
            padding-left: 1.25rem;
            padding-right: 1.25rem;
            position: absolute;
            text-align: center;
            top: 50%;
            width: 100%;
        }

        .google-map[data-state] {
            background: #e9e5dc;
        }

        .google-map[data-state="loading"] [data-state-details] {
            display: none;
        }

        div[submit-success] {
            padding: 1rem;
            margin-bottom: 1rem;
        }

        div[submit-error] {
            padding: 1rem;
            margin-bottom: 1rem;
        }

        textarea[type="hidden"] {
            display: none;
        }

        amp-img {
            width: 100%;
        }

        amp-img img {
            max-height: 100%;
            max-width: 100%;
        }

        img.mbr-temp {
            width: 100%;
        }

        .rounded {
            border-radius: 50%;
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        .is-builder .nodisplay+img[async],
        .is-builder .nodisplay+img[decoding="async"],
        .is-builder amp-img>a+img[async],
        .is-builder amp-img>a+img[decoding="async"] {
            display: none;
        }

        html:not(.is-builder) amp-img>a {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1;
        }

        .is-builder .temp-amp-sizer {
            position: absolute;
        }

        .is-builder amp-youtube .temp-amp-sizer,
        .is-builder amp-vimeo .temp-amp-sizer {
            position: static;
        }

        .is-builder section.horizontal-menu .ampstart-btn {
            display: none;
        }

        .is-builder section.horizontal-menu .dropdown-menu {
            z-index: auto;
            opacity: 1;
            pointer-events: auto;
        }

        .is-builder section.horizontal-menu .nav-dropdown .link.dropdown-toggle[aria-expanded="true"] {
            margin-right: 0;
            padding: 0.667em 1em;
        }

        div.placeholder {
            z-index: 4;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.5);
        }

        div.placeholder svg {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20%;
            height: auto;
        }

        div.placeholder svg circle.big {
            animation: big-anim 3s linear infinite;
        }

        div.placeholder svg circle.small {
            animation: small-anim 1.5s linear infinite;
        }

        @keyframes big-anim {
            from {
                stroke-dashoffset: 900;
            }

            to {
                stroke-dashoffset: 0;
            }
        }

        @keyframes small-anim {
            from {
                stroke-dashoffset: 850;
            }

            to {
                stroke-dashoffset: 0;
            }
        }

        .placeholder-loader .amp-active>div {
            display: none;
            box-radius:10px;
        }

        .container {
            padding-right: 1rem;
            padding-left: 1rem;
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        @media (max-width: 767px) {
            .container {
                max-width: 540px;
            }
        }

        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }

        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }

        @media (min-width: 1200px) {
            .container {
                max-width: 1200px;
            }
        }

        .container-fluid {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .media-container-row {
            display: flex;
            flex-wrap: wrap;
        }

        @media (min-width: 992px) {
            .media-container-row {
                flex-wrap: nowrap;
            }
        }

        .mbr-flex {
            display: flex;
        }

        .flex-wrap {
            flex-wrap: wrap;
        }

        .mbr-jc-s {
            justify-content: flex-start;
        }

        .mbr-jc-c {
            justify-content: center;
        }

        .mbr-jc-e {
            justify-content: flex-end;
        }

        .mbr-row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -1rem;
            margin-left: -1rem;
        }

        .mbr-row-reverse {
            flex-direction: row-reverse;
        }

        .mbr-column {
            flex-direction: column;
        }

        @media (max-width: 767px) {
            .mbr-col-sm-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding-right: 1rem;
                padding-left: 1rem;
            }
        }

        @media (min-width: 768px) {
            .mbr-col-md-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-md-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-md-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-md-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-md-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-md-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .mbr-col-md-10 {
                -ms-flex: 0 0 83.333333%;
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .mbr-col-md-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding-right: 1rem;
                padding-left: 1rem;
            }
        }

        @media (min-width: 992px) {
            .mbr-col-lg-2 {
                -ms-flex: 0 0 16.666667%;
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-lg-3 {
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-lg-4 {
                -ms-flex: 0 0 33.33%;
                flex: 0 0 33.33%;
                max-width: 33.33%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-lg-5-5 {
                -ms-flex: 0 0 48.666%;
                flex: 0 0 48.666%;
                max-width: 48.666%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-lg-5 {
                -ms-flex: 0 0 41.666%;
                flex: 0 0 41.666%;
                max-width: 41.666%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-lg-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-lg-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .mbr-col-lg-9 {
                -ms-flex: 0 0 75%;
                flex: 0 0 75%;
                max-width: 75%;
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .mbr-col-lg-10 {
                -ms-flex: 0 0 83.3333%;
                flex: 0 0 83.3333%;
                max-width: 83.3333%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-lg-12 {
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                padding-right: 1rem;
                padding-left: 1rem;
            }
        }

        @media (min-width: 1200px) {
            .mbr-col-xl-7 {
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-xl-4 {
                -ms-flex: 0 0 33.333333%;
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
                padding-right: 1rem;
                padding-left: 1rem;
            }

            .mbr-col-xl-8 {
                -ms-flex: 0 0 66.666667%;
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
                padding-left: 1rem;
                padding-right: 1rem;
            }

            .mbr-col-xl-5 {
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%;
            }
        }

        .mbr-pt-1 {
            padding-top: .5rem;
        }

        .mbr-pt-2 {
            padding-top: 1rem;
        }

        .mbr-pt-3 {
            padding-top: 1.5rem;
        }

        .mbr-pt-4 {
            padding-top: 2rem;
        }

        .mbr-pt-5 {
            padding-top: 3rem;
        }

        .mbr-pb-1 {
            padding-bottom: .5rem;
        }

        .mbr-pb-2 {
            padding-bottom: 1rem;
        }

        .mbr-pb-3 {
            padding-bottom: 1.5rem;
        }

        .mbr-pb-4 {
            padding-bottom: 2rem;
        }

        .mbr-pb-5 {
            padding-bottom: 3rem;
        }

        .mbr-px-1 {
            padding-left: .5rem;
            padding-right: .5rem;
        }

        .mbr-px-2 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .mbr-px-3 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .mbr-px-4 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        @media (max-width: 991px) {
            .mbr-px-4 {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        .mbr-px-5 {
            padding-left: 3rem;
            padding-right: 3rem;
        }

        @media (max-width: 991px) {
            .mbr-px-5 {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        .mbr-m-sub-1 {
            margin-left: -1rem;
            margin-right: -1rem;
        }

        @media (max-width: 768px) {
            .mbr-m-sub-1 {
                margin-left: 0;
                margin-right: 0;
            }
        }

        .mbr-py-1 {
            padding-top: .5rem;
            padding-bottom: .5rem;
        }

        .mbr-py-2 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        @media (max-width: 767px) {
            .mbr-py-2 {
                padding-top: 0;
                padding-bottom: 0;
            }
        }

        .mbr-py-3 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        @media (max-width: 991px) {
            .mbr-py-3 {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }

        .mbr-py-4 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        @media (max-width: 991px) {
            .mbr-py-4 {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }

        .mbr-py-5 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        @media (max-width: 991px) {
            .mbr-py-5 {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
        }

        .mbr-p-1 {
            padding: .5rem;
        }

        .mbr-p-2 {
            padding: 1rem;
        }

        .mbr-p-3 {
            padding: 1.5rem;
        }

        @media (max-width: 991px) {
            .mbr-p-3 {
                padding: 1rem;
            }
        }

        .mbr-p-4 {
            padding: 2rem;
        }

        @media (max-width: 991px) {
            .mbr-p-4 {
                padding: 1rem;
            }
        }

        .mbr-p-5 {
            padding: 3rem;
        }

        @media (max-width: 991px) {
            .mbr-p-5 {
                padding: 1rem;
            }
        }



        @media (max-width: 992px) {}

        .form-block input,
        .form-block textarea {
            border-radius: 0;
            background-color: #ffffff;
            margin: 0;
            transition: 0.4s;
            width: 100%;
            border: 1px solid #e0e0e0;
            padding: 11px 1rem;
        }

        form .fieldset {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
        }

        .field {
            flex-basis: auto;
            flex-grow: 1;
            flex-shrink: 1;
            padding: 0.5rem;
        }


        textarea {
            width: 100%;
            margin-right: 0;
        }




        amp-img,
        img {
            height: 100%;
            width: 100%;
        }

        amp-sidebar {
            background: transparent;
        }

        .is-builder .menu {
            overflow: visible;
        }

        .is-builder .preview button {
            opacity: 0.5;
            position: relative;
            pointer-events: none;
        }

        .is-builder .preview button:before {
            display: block;
            position: absolute;
            content: '';
            background-color: #efefef;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 2;
        }

        .hidden-slide {
            display: none;
        }

        .visible-slide {
            display: flex;
        }

        .dots-wrapper .dots {
            margin: 4px 8px;
        }

        .dots-wrapper .dots span {
            cursor: pointer;
            border-radius: 12px;
            display: block;
            height: 24px;
            width: 24px;
            transition: 0.4s;
            border: 10px solid #cccccc;
        }

        .dots-wrapper .dots span:hover {
            opacity: 1;
        }

        .dots-wrapper .dots span.current {
            outline: none;
            width: 40px;
            opacity: 1;
        }



        button.btn-img {
            cursor: pointer;
        }

        .iconfont-wrapper {
            display: inline-block;
            width: 1.5rem;
            height: 1.5rem;
        }

        .amp-iconfont {
            vertical-align: middle;
            width: 1.5rem;
            height: 100%;
            font-size: 1.5rem;
        }

        #freeversion-wrapper {
            position: relative;
            z-index: 1000;
        }

        @media (max-width: 767px) {
            #freeversion-wrapper {
                position: sticky;
                bottom: 0;
            }
        }

        #freeversion {
            text-align: center;
            display: flex;
            background-color: #fff;
            border-top: 2px solid #efefef;
            border-left: 1px solid #efefef;
            bottom: 0;
            right: 0;
            justify-content: center;
            padding: 1rem;
        }

        @media (min-width: 768px) {
            #freeversion {
                position: fixed;
            }
        }

        #freeversion>* {
            display: flex;
            align-self: center;
        }

        @media (max-width: 767px) {
            #freeversion {
                width: 100%;
            }
        }

        #freeversion .freeversion {
            color: #000;
        }

        @media (min-width: 768px) {
            #freeversion .freeversion {
                max-width: 160px;
            }
        }

        #freeversion .btn-wrap .btn {
            padding: 5px;
            white-space: nowrap;
        }

        @media (max-width: 992px) {
            #freeversion .btn-wrap .btn {
                margin: 0;
                white-space: normal;
            }
        }

        @media (max-width: 992px) {

            #freeversion>*,
            #freeversion .btn-wrap .btn {
                padding: 5px;
            }
        }

        body {
            font-family: Didact Gothic;
        }

        blockquote {
            border-color: #ec6963;
        }

        div[submit-success] {
            background: #fac769;
        }

        div[submit-error] {
            background: #ec6963;
        }

        .display-1 {
            font-family: 'Roboto', sans-serif;
            font-size: 2.5rem;
            line-height: 1.2;
        }

        .display-2 {
            font-family: 'Roboto', sans-serif;
            font-size: 2.1rem;
            line-height: 1.2;
        }

        .display-4 {
            font-family: 'Roboto', sans-serif;
            font-size: 0.9rem;
            line-height: 1.4;
        }

        .display-5 {
            font-family: 'Roboto', sans-serif;
            font-size: 1.5rem;
            line-height: 1.2;
        }

        .display-6 {
            font-family: 'Roboto', sans-serif;
            font-size: 1.3rem;
            line-height: 1.3;
        }

        .display-7 {
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            line-height: 1.6;
        }

        .form-block input,
        .form-block textarea {
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            line-height: 1;
        }

        @media (max-width: 768px) {
            .display-1 {
                font-size: 2rem;
                font-size: calc(1.525rem + (2.5 - 1.525) * ((100vw - 20rem) / (48 - 20)));
                line-height: calc(1.4 * (1.525rem + (2.5 - 1.525) * ((100vw - 20rem) / (48 - 20))));
            }

            .display-2 {
                font-size: 1.68rem;
                font-size: calc(1.385rem + (2.1 - 1.385) * ((100vw - 20rem) / (48 - 20)));
                line-height: calc(1.4 * (1.385rem + (2.1 - 1.385) * ((100vw - 20rem) / (48 - 20))));
            }

            .display-4 {
                font-size: 0.72rem;
                font-size: calc(0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20)));
                line-height: calc(1.4 * (0.965rem + (0.9 - 0.965) * ((100vw - 20rem) / (48 - 20))));
            }

            .display-5 {
                font-size: 1.2rem;
                font-size: calc(1.175rem + (1.5 - 1.175) * ((100vw - 20rem) / (48 - 20)));
                line-height: calc(1.4 * (1.175rem + (1.5 - 1.175) * ((100vw - 20rem) / (48 - 20))));
            }
        }

        .display-1 .mbr-iconfont-btn {
            font-size: 2.5rem;
            width: 2.5rem;
        }

        .display-2 .mbr-iconfont-btn {
            font-size: 2.1rem;
            width: 2.1rem;
        }

        .display-4 .mbr-iconfont-btn {
            font-size: 0.9rem;
            width: 0.9rem;
        }

        .display-5 .mbr-iconfont-btn {
            font-size: 1.5rem;
            width: 1.5rem;
        }

        .display-7 .mbr-iconfont-btn {
            font-size: 1rem;
            width: 1rem;
        }

        .btn {
            padding: 10px 30px;
            border-radius: 0;
        }

        .btn-sm {
            padding: 10px 30px;
            border-radius: 0;
        }

        .btn-md {
            padding: 10px 30px;
            border-radius: 0;
        }

        .btn-lg {
            padding: 10px 30px;
            border-radius: 0;
        }

        .bg-primary {
            background-color: #ec6963;
        }

        .bg-success {
            background-color: #fac769;
        }

        .bg-info {
            background-color: #4c86e7;
        }

        .bg-danger {
            background-color: #ec6963;
        }

        .btn-secondary:hover,
        .btn-secondary:focus,
        .btn-secondary.focus {
            background-color: #121424;
            border-color: #121424;
            color: #ffffff;
        }

        .btn-secondary.disabled,
        .btn-secondary:disabled {
            color: #ffffff;
            background-color: #121424;
            border-color: #121424;
        }

        .btn-info,
        .btn-info:active,
        .btn-info.active {
            background-color: #4c86e7;
            border-color: #4c86e7;
            color: #ffffff;
        }

        .btn-info:hover,
        .btn-info:focus,
        .btn-info.focus {
            background-color: #1853b5;
            border-color: #1853b5;
            color: #ffffff;
        }

        .btn-info.disabled,
        .btn-info:disabled {
            color: #ffffff;
            background-color: #1853b5;
            border-color: #1853b5;
        }

        .btn-success,
        .btn-success:active,
        .btn-success.active {
            background-color: #fac769;
            border-color: #fac769;
            color: #614003;
        }

        .btn-success:hover,
        .btn-success:focus,
        .btn-success.focus {
            background-color: #f5a208;
            border-color: #f5a208;
            color: #614003;
        }

        .btn-success.disabled,
        .btn-success:disabled {
            color: #614003;
            background-color: #f5a208;
            border-color: #f5a208;
        }

        .btn-warning,
        .btn-warning:active,
        .btn-warning.active {
            background-color: #ca4336;
            border-color: #ca4336;
            color: #ffffff;
        }

        .btn-warning:hover,
        .btn-warning:focus,
        .btn-warning.focus {
            background-color: #7a2820;
            border-color: #7a2820;
            color: #ffffff;
        }

        .btn-warning.disabled,
        .btn-warning:disabled {
            color: #ffffff;
            background-color: #7a2820;
            border-color: #7a2820;
        }

        .btn-danger,
        .btn-danger:active,
        .btn-danger.active {
            background-color: #ec6963;
            border-color: #ec6963;
            color: #ffffff;
        }

        .btn-danger:hover,
        .btn-danger:focus,
        .btn-danger.focus {
            background-color: #d02119;
            border-color: #d02119;
            color: #ffffff;
        }

        .btn-danger.disabled,
        .btn-danger:disabled {
            color: #ffffff;
            background-color: #d02119;
            border-color: #d02119;
        }



        .btn-black,
        .btn-black:active,
        .btn-black.active {
            background-color: #010101;
            border-color: #010101;
            color: #ffffff;
        }

        .btn-black:hover,
        .btn-black:focus,
        .btn-black.focus {
            background-color: #000000;
            border-color: #000000;
            color: #ffffff;
        }

        .btn-black.disabled,
        .btn-black:disabled {
            color: #ffffff;
            background-color: #000000;
            border-color: #000000;
        }

        .btn-white,
        .btn-white:active,
        .btn-white.active {
            background-color: #fcfcfc;
            border-color: #fcfcfc;
            color: #7d7d7d;
        }

        .btn-white:hover,
        .btn-white:focus,
        .btn-white.focus {
            background-color: #c9c9c9;
            border-color: #c9c9c9;
            color: #7d7d7d;
        }

        .btn-white.disabled,
        .btn-white:disabled {
            color: #7d7d7d;
            background-color: #c9c9c9;
            border-color: #c9c9c9;
        }

        .btn-secondary-outline,
        .btn-secondary-outline:active,
        .btn-secondary-outline.active {
            background: none;
            border-color: #333b69;
            color: #333b69;
        }

        .btn-secondary-outline:hover,
        .btn-secondary-outline:focus,
        .btn-secondary-outline.focus {
            color: #ffffff;
            background-color: #333b69;
            border-color: #333b69;
        }

        .btn-secondary-outline.disabled,
        .btn-secondary-outline:disabled {
            color: #ffffff;
            background-color: #333b69;
            border-color: #333b69;
        }

        .btn-info-outline,
        .btn-info-outline:active,
        .btn-info-outline.active {
            background: none;
            border-color: #4c86e7;
            color: #4c86e7;
        }

        .btn-info-outline:hover,
        .btn-info-outline:focus,
        .btn-info-outline.focus {
            color: #ffffff;
            background-color: #4c86e7;
            border-color: #4c86e7;
        }

        .btn-info-outline.disabled,
        .btn-info-outline:disabled {
            color: #ffffff;
            background-color: #4c86e7;
            border-color: #4c86e7;
        }

        .btn-success-outline,
        .btn-success-outline:active,
        .btn-success-outline.active {
            background: none;
            border-color: #fac769;
            color: #fac769;
        }

        .btn-success-outline:hover,
        .btn-success-outline:focus,
        .btn-success-outline.focus {
            color: #614003;
            background-color: #fac769;
            border-color: #fac769;
        }

        .btn-success-outline.disabled,
        .btn-success-outline:disabled {
            color: #614003;
            background-color: #fac769;
            border-color: #fac769;
        }

        .btn-warning-outline,
        .btn-warning-outline:active,
        .btn-warning-outline.active {
            background: none;
            border-color: #ca4336;
            color: #ca4336;
        }

        .btn-warning-outline:hover,
        .btn-warning-outline:focus,
        .btn-warning-outline.focus {
            color: #ffffff;
            background-color: #ca4336;
            border-color: #ca4336;
        }

        .btn-warning-outline.disabled,
        .btn-warning-outline:disabled {
            color: #ffffff;
            background-color: #ca4336;
            border-color: #ca4336;
        }

        .btn-danger-outline,
        .btn-danger-outline:active,
        .btn-danger-outline.active {
            background: none;
            border-color: #ec6963;
            color: #ec6963;
        }

        .btn-danger-outline:hover,
        .btn-danger-outline:focus,
        .btn-danger-outline.focus {
            color: #ffffff;
            background-color: #ec6963;
            border-color: #ec6963;
        }

        .btn-danger-outline.disabled,
        .btn-danger-outline:disabled {
            color: #ffffff;
            background-color: #ec6963;
            border-color: #ec6963;
        }

        .btn-black-outline,
        .btn-black-outline:active,
        .btn-black-outline.active {
            background: none;
            border-color: #010101;
            color: #010101;
        }

        .btn-black-outline:hover,
        .btn-black-outline:focus,
        .btn-black-outline.focus {
            color: #ffffff;
            background-color: #010101;
            border-color: #010101;
        }

        .btn-black-outline.disabled,
        .btn-black-outline:disabled {
            color: #ffffff;
            background-color: #010101;
            border-color: #010101;
        }

        .btn-white-outline,
        .btn-white-outline:active,
        .btn-white-outline.active {
            background: none;
            border-color: #fcfcfc;
            color: #fcfcfc;
        }

        .btn-white-outline:hover,
        .btn-white-outline:focus,
        .btn-white-outline.focus {
            color: #7d7d7d;
            background-color: #fcfcfc;
            border-color: #fcfcfc;
        }

        .btn-white-outline.disabled,
        .btn-white-outline:disabled {
            color: #7d7d7d;
            background-color: #fcfcfc;
            border-color: #fcfcfc;
        }

        .text-primary {
            color: #ec6963;
        }

        .text-secondary {
            color: #333b69;
        }

        .text-success {
            color: #fac769;
        }

        .text-info {
            color: #4c86e7;
        }

        .text-warning {
            color: #ca4336;
        }

        .text-danger {
            color: #ec6963;
        }

        .text-white {
            color: #fcfcfc;
        }

        .text-black {
            color: #010101;
        }

        a[class*="text-"],
        .amp-iconfont,
        .mbr-iconfont {
            transition: 0.2s ease-in-out;
        }

        .amp-iconfont {
            color: #ec6963;
        }

        a.text-primary:hover,
        a.text-primary:focus {
            color: #a21a14;
        }

        a.text-secondary:hover,
        a.text-secondary:focus {
            color: #010102;
        }

        a.text-success:hover,
        a.text-success:focus {
            color: #c38107;
        }

        a.text-info:hover,
        a.text-info:focus {
            color: #123e88;
        }

        a.text-warning:hover,
        a.text-warning:focus {
            color: #521b15;
        }

        a.text-danger:hover,
        a.text-danger:focus {
            color: #a21a14;
        }

        a.text-white:hover,
        a.text-white:focus {
            color: #e6e6e6;
        }

        a.text-black:hover,
        a.text-black:focus {
            color: #cccccc;
        }

        .alert-success {
            background-color: #fac769;
        }

        .alert-info {
            background-color: #4c86e7;
        }

        .alert-warning {
            background-color: #ca4336;
        }

        .alert-danger {
            background-color: #ec6963;
        }

        .mbr-plan-header.bg-primary .mbr-plan-subtitle,
        .mbr-plan-header.bg-primary .mbr-plan-price-desc {
            color: #ffffff;
        }

        .mbr-plan-header.bg-success .mbr-plan-subtitle,
        .mbr-plan-header.bg-success .mbr-plan-price-desc {
            color: #ffffff;
        }

        .mbr-plan-header.bg-info .mbr-plan-subtitle,
        .mbr-plan-header.bg-info .mbr-plan-price-desc {
            color: #ffffff;
        }

        .mbr-plan-header.bg-warning .mbr-plan-subtitle,
        .mbr-plan-header.bg-warning .mbr-plan-price-desc {
            color: #f5dad7;
        }

        .mbr-plan-header.bg-danger .mbr-plan-subtitle,
        .mbr-plan-header.bg-danger .mbr-plan-price-desc {
            color: #ffffff;
        }


        .info2 .form-block {
            border-radius: 5px;
        }

        .info2 .form-block .mbr-overlay {
            -webkit-box-shadow: 0 20px 40px 0 rgba(61, 65, 84, 0.15);
            box-shadow: 0 20px 40px 0 rgba(61, 65, 84, 0.15);
        }



        .contacts5 .form-block {
            overflow: visible;
        }

        .contacts5 .form-block .mbr-overlay {
            -webkit-box-shadow: 0 1px 6px rgba(61, 65, 84, 0.15);
            box-shadow: 0 1px 6px rgba(61, 65, 84, 0.15);
            transition: 0.2s;
        }

        .contacts5 .form-block:hover .mbr-overlay {
            -webkit-box-shadow: 0 20px 40px 0 rgba(61, 65, 84, 0.15);
            box-shadow: 0 20px 40px 0 rgba(61, 65, 84, 0.15);
        }

        @media (max-width: 767px) {
            .info2 .form-block {
                box-shadow: none;
                -webkit-box-shadow: none;
                border-radius: 0;
            }

            .info2 .form-block input {
                border-radius: 5px;
            }
        }



        .cid-qXijZlysdL {
            background-color: #ffffff;
            overflow: visible;
        }

        .cid-qXijZlysdL .navbar {
            background: #ffffff;
            display: flex;
        }

        .cid-qXijZlysdL .navbar-caption {
            line-height: inherit;
        }

        @media (max-width: 991px) {
            .cid-qXijZlysdL .navbar .navbar-collapse {
                background: #ffffff;
            }
        }

        .cid-qXijZlysdL .nav-link {
            margin: .667em 1em;
            padding: 0;
        }

        .cid-qXijZlysdL .dropdown-item.active,
        .cid-qXijZlysdL .dropdown-item:active {
            background-color: transparent;
        }

        .cid-qXijZlysdL .dropdown-menu {
            background: #ffffff;
        }

        .cid-qXijZlysdL .hamburger span {
            background-color: #232323;
        }

        .cid-qXijZlysdL .builder-sidebar {
            background-color: #ffffff;
        }

        .cid-qXijZlysdL .close-sidebar:focus {
            outline: 2px auto #ec6963;
        }

        .cid-qXijZlysdL .close-sidebar span {
            background-color: #232323;
        }

        .cid-qXijZlysdL a.nav-link:hover {
            color: #ec6963;
        }

        .cid-r7SlQppHmg {
            padding-top: 10rem;
            padding-bottom: 10rem;
            align-items: center;
            display: flex;
            background-image: url("https://app.8b.io/app/themes/webamp/projects/agency/assets/images/02-1-1920x1279.jpg");
        }

        .cid-r7SlQppHmg .mbr-overlay {
            background: #ffffff;
            opacity: 0.9;
        }

        @media (max-width: 992px) {
            .cid-r7SlQppHmg .mbr-row>* {
                padding-left: 0;
                padding-right: 0;
            }
        }

        .cid-r7SlQppHmg .title-block {
            margin: auto;
            width: 100%;
        }

        @media (max-width: 992px) {
            .cid-r7SlQppHmg .title-wrap {
                margin-bottom: 2rem;
            }
        }

        @media (min-width: 992px) {

            .cid-r7SlQppHmg .title-block,
            .cid-r7SlQppHmg .image-block {
                padding-left: 0;
                padding-right: 0;
            }

            .cid-r7SlQppHmg .mbr-row>* {
                padding-left: 2rem;
                padding-right: 2rem;
            }

            .cid-r7SlQppHmg .mbr-row {
                margin-left: -2rem;
                margin-right: -2rem;
            }
        }

        .cid-r7SlQppHmg .mbr-section-title,
        .cid-r7SlQppHmg .mbr-section-btn {
            color: #000000;
        }

        .cid-r7SlQppHmg .mbr-section-subtitle,
        .cid-r7SlQppHmg .mbr-section-btn {
            color: #000000;
        }

        .cid-r8JfuXoudY {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #f4f8ff;
        }

        @media (max-width: 768px) {
            .cid-r8JfuXoudY .title-wrap {
                padding-bottom: 2rem;
            }
        }

        .cid-r8JfuXoudY .field {
            padding: 0 0 0.5rem 0;
        }

        .cid-r8JfuXoudY input {
            color: #000000;
            border: 1px solid #767676;
            background-color: #ffffff;
        }

        .cid-r8JfuXoudY input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.3);
        }

        .cid-r8JfuXoudY input::-moz-placeholder {
            color: rgba(0, 0, 0, 0.3);
        }

        .cid-r8JfuXoudY .form-wrap .mbr-form {
            width: 100%;
        }

        .cid-r8JfuXoudY .form-wrap .mbr-overlay {
            opacity: 1;
            background: #ffffff;
        }

        .cid-r8JfuXoudY .form-wrap .btn {
            width: 100%;
            margin: 0;
        }

        .cid-r8JfuXoudY .mbr-section-btn {
            width: 100%;
            margin: 0;
        }

        .cid-r8TZVo6I8x {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #ffffff;
        }



        .cid-r8TZVo6I8x .iconfont-wrapper {
            height: 3rem;
            width: 3rem;
            display: inline-block;
        }

        .cid-r8TZVo6I8x .iconfont-wrapper .amp-iconfont {
            color: #ec6963;
            transition: color 0.2s;
            vertical-align: bottom;
        }

        @media (min-width: 768px) {
            .cid-r8TZVo6I8x .iconfont-wrapper .amp-iconfont {
                font-size: 3rem;
                width: 3rem;
            }
        }

        @media (max-width: 767px) {
            .cid-r8TZVo6I8x .iconfont-wrapper .amp-iconfont {
                font-size: 2.5rem;
                width: 2.5rem;
            }
        }

        .cid-r7S8jRKbW1 {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #f4f8ff;
        }







        .cid-r8J9eA34T9 {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #f5f5f5;
        }



        .cid-qYf3WIyq6m {
            padding-top: 75px;
            padding-bottom: 75px;
            background-color: #ffffff;
        }



        .cid-qYf3WIyq6m .icons-list .iconfont-wrapper {
            width: 2rem;
            height: 2rem;
            transition: 0.2s;
        }

        .cid-qYf3WIyq6m .icons-list span {
            font-size: 2rem;
            width: 2rem;
            color: #ec6963;
        }

        .cid-qYf3WIyq6m .title-wrap {
            width: 100%;
        }

        .cid-qYf3WIyq6m .icons-list .amp-iconfont {
            border-radius: 5px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
        }

        .cid-r7RWWJFJl7 {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #ffffff;
        }

        .cid-r7RWWJFJl7 amp-img,
        .cid-r7RWWJFJl7 img {
            height: auto;
            width: 100%;
        }

        .cid-r7RWWJFJl7 .gallery-row {
            padding-left: 0;
            padding-right: 0;
        }

        @media (max-width: 992px) {
            .cid-r7RWWJFJl7 .gallery-row {
                justify-content: center;
            }
        }

        @media (max-width: 768px) {

            .cid-r7RWWJFJl7 .gallery-row,
            .cid-r7RWWJFJl7 .gallery-item {
                padding-left: 0;
                padding-right: 0;
            }
        }

        .cid-r7RWWJFJl7 .gallery-item:nth-last-child(1),
        .cid-r7RWWJFJl7 .gallery-row:nth-last-child(1) {
            padding-bottom: 0;
        }

        .cid-r7RWWJFJl7 .gallery-img-wrap {
            width: 75%;
            margin: auto;
        }

        .cid-r7RWWJFJl7 .gallery-img-wrap:hover:after {
            opacity: 0;
        }

        .cid-r7RWWJFJl7 .gallery-img-wrap:hover .img-caption:after {
            opacity: 0;
        }

        .cid-r7RWWJFJl7 .gallery-img-wrap:after {
            background: #000000;
        }

        .cid-r7RWWJFJl7 .gallery-img-wrap .img-caption:after {
            opacity: 0;
            background: #000000;
        }

        .cid-qY2TKUrsRz {
            padding-top: 75px;
            padding-bottom: 75px;
            background-color: #f4f8ff;
        }





        .cid-qY2TKUrsRz .icons-list .iconfont-wrapper {
            margin-right: 0.2rem;
            width: 1.5rem;
            height: 1.5rem;
        }

        .cid-qY2TKUrsRz .icons-list span {
            transition: 0.2s;
            font-size: 1.5rem;
            width: 1.5rem;
            color: #ec6963;
        }

        .cid-qY2TKUrsRz .title-wrap {
            width: 100%;
        }





        .cid-qY2TKUrsRz .mbr-section-title {
            color: #333b69;
        }

        .cid-qY2TKUrsRz .mbr-section-subtitle {
            color: #ffffff;
        }

        .cid-r7SmB6Xmdo {
            padding-top: 5rem;
            padding-bottom: 5rem;
            align-items: center;
            display: flex;
            background-color: #4c86e7;
        }

        @media (max-width: 992px) {
            .cid-r7SmB6Xmdo .mbr-row {
                flex-direction: column-reverse;
            }

            .cid-r7SmB6Xmdo .mbr-row .title-wrap {
                padding-top: 2rem;
            }
        }

        @media (max-width: 992px) {
            .cid-r7SmB6Xmdo .mbr-row>* {
                padding-left: 0;
                padding-right: 0;
            }
        }

        .cid-r7SmB6Xmdo .title-block {
            margin: auto;
            width: 100%;
        }

        @media (min-width: 992px) {

            .cid-r7SmB6Xmdo .title-block,
            .cid-r7SmB6Xmdo .image-block {
                padding-left: 0;
                padding-right: 0;
            }

            .cid-r7SmB6Xmdo .mbr-row>* {
                padding-left: 2rem;
                padding-right: 2rem;
            }

            .cid-r7SmB6Xmdo .mbr-row {
                margin-left: -2rem;
                margin-right: -2rem;
            }
        }

        .cid-r7SmB6Xmdo .mbr-section-title,
        .cid-r7SmB6Xmdo .mbr-section-btn {
            color: #ffffff;
        }

        .cid-r7SmB6Xmdo .mbr-section-btn,
        .cid-r7SmB6Xmdo .mbr-text {
            color: #ffffff;
        }

        .cid-r7RWIJULa8 {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #ffffff;
        }

        .cid-r7RWIJULa8 .title-wrap,
        .cid-r7RWIJULa8 .title {
            width: 100%;
        }

        .cid-r7RWIJULa8 * {
            word-break: break-word;
        }

        .cid-r7Se9R5zrE {
            padding-top: 5rem;
            padding-bottom: 2rem;
            background-color: #f4f8ff;
        }

            .card {
                /* background-color: #444; */
                background-color: #eee;
                display: inline-block;
                margin: 0 0 1em;
                width: 100%;
                /* box-shadow: 2px 2px 4px #aaa; */
            }

        .card>hr {
            margin-right: 0;
            margin-left: 0
        }

        .card>.list-group:first-child .list-group-item:first-child {
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem
        }

        .card>.list-group:last-child .list-group-item:last-child {
            border-bottom-right-radius: .25rem;
            border-bottom-left-radius: .25rem
        }

        .card-title {
            margin-bottom: .75rem
        }

        .card-text:last-child {
            margin-bottom: 0;
            font-size: 14px;
            line-height: 16px;
            color: #ababab;
            font-weight: 300;
        }

        .cid-r7Se9R5zrE .icons-list .iconfont-wrapper {
            width: 2rem;
            height: 2rem;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem
        }

        .cid-r7Se9R5zrE .icons-list .amp-iconfont {
            font-size: 2rem;
            width: 2rem;
        }

        .cid-r8J7s9RNhi {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #f4f8ff;
        }

        .cid-r8J7s9RNhi .mbr-form .mbr-overlay {
            opacity: 1;
            background: #ffffff;
        }

        .cid-r8J7s9RNhi .mbr-form .fieldset input,
        .cid-r8J7s9RNhi .mbr-form .fieldset textarea {
            background-color: #efefef;
            color: #000000;
            border: 1px solid #232323;
        }

        .cid-r8J7s9RNhi .mbr-form .fieldset input::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        .cid-r8J7s9RNhi .mbr-form .fieldset input::-moz-placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        .cid-r8J7s9RNhi .mbr-form .fieldset textarea::-webkit-input-placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        .cid-r8J7s9RNhi .mbr-form .fieldset textarea::-moz-placeholder {
            color: rgba(0, 0, 0, 0.5);
        }

        .cid-r8J7s9RNhi .mbr-form .fieldset textarea {
            min-height: 200px;
        }

        .cid-qYgaJlWaD1 {
            padding-top: 2rem;
            padding-bottom: 2rem;
            background-color: #000000;
        }

        @media (max-width: 992px) {
            .cid-qYgaJlWaD1 .link-items {
                justify-content: space-between;
            }
        }

        .cid-qYgaJlWaD1 .link-items .fLink {
            width: auto;
            line-height: 2;
        }

        .cid-qYgaJlWaD1 .mbr-row {
            margin: 0;
        }

        .cid-qYgaJlWaD1 .mbr-row:nth-child(1) {
            margin-bottom: 1rem;
        }

        .cid-qYgaJlWaD1 .copyright .mbr-text {
            color: #ffffff;
        }

        [class*="-iconfont"] {
            display: inline-flex;
        }

        .m0 {
            margin: 0;
        }

        .mt0 {
            margin-top: 0;
        }

        .mr0 {
            margin-right: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .ml0,
        .mx0 {
            margin-left: 0;
        }

        .mx0 {
            margin-right: 0;
        }

        .my0 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .m1 {
            margin: .5rem;
        }

        .mt1 {
            margin-top: .5rem;
        }

        .mr1 {
            margin-right: .5rem;
        }

        .mb1 {
            margin-bottom: .5rem;
        }

        .ml1,
        .mx1 {
            margin-left: .5rem;
        }

        .mx1 {
            margin-right: .5rem;
        }

        .my1 {
            margin-top: .5rem;
            margin-bottom: .5rem;
        }

        .m2 {
            margin: 1rem;
        }

        .mt2 {
            margin-top: 1rem;
        }

        .mr2 {
            margin-right: 1rem;
        }

        .mb2 {
            margin-bottom: 1rem;
        }

        .ml2,
        .mx2 {
            margin-left: 1rem;
        }

        .mx2 {
            margin-right: 1rem;
        }

        .my2 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }

        .m3 {
            margin: 1.5rem;
        }

        .mt3 {
            margin-top: 1.5rem;
        }

        .mr3 {
            margin-right: 1.5rem;
        }

        .mb3 {
            margin-bottom: 1.5rem;
        }

        .ml3,
        .mx3 {
            margin-left: 1.5rem;
        }

        .mx3 {
            margin-right: 1.5rem;
        }

        .my3 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .m4 {
            margin: 2rem;
        }

        .mt4 {
            margin-top: 2rem;
        }

        .mr4 {
            margin-right: 2rem;
        }

        .mb4 {
            margin-bottom: 2rem;
        }

        .ml4,
        .mx4 {
            margin-left: 2rem;
        }

        .mx4 {
            margin-right: 2rem;
        }

        .my4 {
            margin-top: 2rem;
            margin-bottom: 2rem;
        }

        .mxn1 {
            margin-left: calc(.5rem * -1);
            margin-right: calc(.5rem * -1);
        }

        .mxn2 {
            margin-left: calc(1rem * -1);
            margin-right: calc(1rem * -1);
        }

        .mxn3 {
            margin-left: calc(1.5rem * -1);
            margin-right: calc(1.5rem * -1);
        }

        .mxn4 {
            margin-left: calc(2rem * -1);
            margin-right: calc(2rem * -1);
        }

        .m-auto {
            margin: auto;
        }

        .mt-auto {
            margin-top: auto;
        }

        .mr-auto {
            margin-right: auto;
        }

        .mb-auto {
            margin-bottom: auto;
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto;
        }

        .mx-auto {
            margin-right: auto;
        }

        .my-auto {
            margin-top: auto;
            margin-bottom: auto;
        }

        .p0 {
            padding: 0;
        }

        .pt0 {
            padding-top: 0;
        }

        .pr0 {
            padding-right: 0;
        }

        .pb0 {
            padding-bottom: 0;
        }

        .pl0,
        .px0 {
            padding-left: 0;
        }

        .px0 {
            padding-right: 0;
        }

        .py0 {
            padding-top: 0;
            padding-bottom: 0;
        }

        .p1 {
            padding: .5rem;
        }

        .pt1 {
            padding-top: .5rem;
        }

        .pr1 {
            padding-right: .5rem;
        }

        .pb1 {
            padding-bottom: .5rem;
        }

        .pl1 {
            padding-left: .5rem;
        }

        .py1 {
            padding-top: .5rem;
            padding-bottom: .5rem;
        }

        .px1 {
            padding-left: .5rem;
            padding-right: .5rem;
        }

        .p2 {
            padding: 1rem;
        }

        .pt2 {
            padding-top: 1rem;
        }

        .pr2 {
            padding-right: 1rem;
        }

        .pb2 {
            padding-bottom: 1rem;
        }

        .pl2 {
            padding-left: 1rem;
        }

        .py2 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .px2 {
            padding-left: 1rem;
            padding-right: 1rem;
        }

        .p3 {
            padding: 1.5rem;
        }

        .pt3 {
            padding-top: 1.5rem;
        }

        .pr3 {
            padding-right: 1.5rem;
        }

        .pb3 {
            padding-bottom: 1.5rem;
        }

        .pl3 {
            padding-left: 1.5rem;
        }

        .py3 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .px3 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .p4 {
            padding: 2rem;
        }

        .pt4 {
            padding-top: 2rem;
        }

        .pr4 {
            padding-right: 2rem;
        }

        .pb4 {
            padding-bottom: 2rem;
        }

        .pl4 {
            padding-left: 2rem;
        }

        .py4 {
            padding-top: 2rem;
            padding-bottom: 2rem;
        }

        .px4 {
            padding-left: 2rem;
            padding-right: 2rem;
        }

        .post-cards {
            margin-bottom: 1rem;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            background-color: white;
        }

        .post-cards:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        @media only screen and (max-width: 600px) {

            /* code will run when screen size is 600 or smaller */
            .footer_amp {
                height: 5vh;
                background-color: white;

                position: fixed;
                bottom: 0;
                width: 100%;
                z-index: 10;
            }

            .twimbit_logo {
                align-content: center;
                padding-left: 20%;
                padding-right: 20%;
                display: block;
            }

            .post-cards {
                margin-bottom: 0;
                box-shadow: none;
                transition: none;
                background-color: #f4f8ff;
            }

            .signup_form {
                display: block;
                height: 50%;
            }

            .hr {
                display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                border-width: 1px;
                color: #ccc;
            }
        }

        .footer_amp {
            height: 8vh;
            background-color: white;
            display: flex;
        }

        a.nav_button {
            background-repeat: no-repeat !important;
            background-position: center !important;
            width: 33.33%;
        }

        a.nav_button:active {
            background-color: #F16A6E !important;
        }

        .twimbit_logo {

            padding: 30px;
            display: inline;
            float: left;

        }

        .signup_form {
            display: inline;
            width: 70%;
        }

        .nav-item:hover {
            border-bottom: 3px solid #ec6963;
        }

        amp-carousel .ampstart-image-with-heading {
            margin-bottom: 0
        }

        .m0 {
            margin: 0
        }

        .relative {
            position: relative
        }

        .mb4 {
            margin-bottom: 2rem
        }

        .absolute {
            position: absolute
        }

        .right-0 {
            right: 0
        }

        .bottom-0 {
            bottom: 0
        }

        .left-0 {
            left: 0
        }


        .ampstart-image-heading {
            color: #fff;
            background: linear-gradient(0deg, rgba(0, 0, 0, .65) 0, transparent)
        }

        .py2 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px2 {
            padding-left: 1rem;
            padding-right: 1rem
        }


        .line-height-4 {
            line-height: 2rem
        }

        .sept {
            border-top: .5px solid #ccc;
            width: 98%;
        }




        .space-between {
            justify-content: space-between;
        }


        .col,
        .col-1,
        .col-10,
        .col-11,
        .col-12,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-auto,
        .col-lg,
        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-auto,
        .col-md,
        .col-md-1,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-auto,
        .col-sm,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-auto,
        .col-xl,
        .col-xl-1,
        .col-xl-10,
        .col-xl-11,
        .col-xl-12,
        .col-xl-2,
        .col-xl-3,
        .col-xl-4,
        .col-xl-5,
        .col-xl-6,
        .col-xl-7,
        .col-xl-8,
        .col-xl-9,
        .col-xl-auto {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%
        }

        .col-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: none
        }

        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.333333%;
            flex: 0 0 8.333333%;
            max-width: 8.333333%
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%
        }

        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%
        }

        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.333333%;
            flex: 0 0 33.333333%;
            max-width: 33.333333%
        }

        .col-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.666667%;
            flex: 0 0 30%;
        }

        .col-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 70%;
        }

        .col-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.333333%;
            flex: 0 0 70%;
        }

        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.666667%;
            flex: 0 0 66.666667%;
            max-width: 66.666667%
        }

        .col-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%
        }

        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.333333%;
            flex: 0 0 83.333333%;
            max-width: 83.333333%
        }

        .col-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666667%;
            flex: 0 0 91.666667%;
            max-width: 91.666667%
        }

        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%
        }

        .feature-text {
            color: #A9A9A9;
        }

        @media only screen and (max-width: 450px) {

            /* code will run when screen size is 450 or smaller */
            .d-sm-none {
                display: none !important
            }

            .tile-img amp-img {
                width: 120px !important;
            }


            .post-cards {
                margin-bottom: 0;
                box-shadow: none;
                transition: none;
                background-color: #f4f8ff;
            }

            .tile-text h3 {
                font-size: 1rem;
            }

            .tile-text p {
                padding-top: .5rem;
            }

            .feature-text {
                display: none;
            }

            .hr {
                display: block;
                margin-top: 0.5em;
                margin-bottom: 0.5em;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                border-width: 1px;
                color: #ccc;
            }

            .card-badge {
                position: relative;
                top: -3.5rem;
                height: fit-content;
                padding: 5px;
                background-color: #EAEFF2;
                border-radius: 8px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .card-badge-text {
                font-size: 16px;
                font-weight: 400;
                color: grey;
                margin-top: 0.5rem;
            }

            .img-cat {
                position: relative;
                width: 100%;
                /* height: 64px; */
                padding: 5px 10px 0px 10px;
                /* margin: 5px; */
                /* left: 15%; */
            }



            .category-caption {
                position: relative;
                top: -50px;
                font-size: 14px;
                font-weight: 300;
                font-style: italic;
            }

            .story-carousel {
                height: 100px;
            }

            .story-carousel amp-img {
                height: 95px;
                width: 95px;
            }
        }

        @media (min-width: 768px) {

            .card-badge {
                position: relative;
                top: -3.5rem;
                height: fit-content;
                padding: 5px;
                background-color: #EAEFF2;
                border-radius: 8px;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            }

            .card-badge-text {
                font-size: 16px;
                font-weight: 400;
                color: grey;
                margin-top: 0.5rem;
            }

            .img-cat {
                position: relative;
                width: 100%;
                /* height: 64px; */
                padding: 5px 10px 0px 10px;
                /* margin: 5px; */
                /* left: 15%; */

            }

            .category-caption {
                position: relative;
                top: 30px;
            }

            .story-carousel {
                height: 200px;
            }

            .story-carousel amp-img {
                height: 200px;
                width: 190px;
            }

            .cards .card {
                width: 100%;
                margin:10px;
            }

            .d-flex {
                display: -ms-flexbox !important;
                display: flex !important
            }

            .card-title {
                font-size: 18px;
                font-weight: 500;
            }

        }

        @media (min-width: 992px) {
            .d-lg-none {
                display: none !important
            }
        }

        .search {width: fit-content;
            height: 36px;
            background: #fafafa;
            /* border: 0.5px solid #707070; */
            box-shadow: rgba(0, 0, 0, 0.2) 0px 3px 6px 0px;
            border-radius: 20px;
        }

        #searchTerm{
            border: none;
            margin-left: 20px;
            background: transparent;

        }

        .desktop-tool {

            margin-right: 15%;
            margin-bottom: 0% !important;
        }
    </style>

</head>

<body>

    <!-- Registering Service Worker -->
    <amp-install-serviceworker src="<?php print content_url() . '/themes/TwimbitLite/src/sw.js'; ?>" layout="nodisplay" data-iframe-src="<?php print content_url() . '/themes/TwimbitLite/src/install-sw.html'; ?>">
    </amp-install-serviceworker>

    <amp-sidebar id="sidebar" class="cid-qXijZlysdL" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar">
                <span></span>
                <span></span>
            </button>


            <!-- NAVBAR ITEMS -->
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#header2-28">Home</a></li>
                <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#features3-24">Insights</a></li>
                <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#contacts1-26">Stories</a></li>
                <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#contacts1-26">Videos</a></li>
                <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#contacts1-26">Events</a></li>
            </ul>
            <!-- NAVBAR ITEMS END -->

        </div>
    </amp-sidebar>
    <section class="menu1 menu horizontal-menu cid-qXijZlysdL" id="menu1-o">

        <!-- <div class="menu-wrapper"> -->
        <nav class="navbar navbar-dropdown navbar-expand-lg navbar-fixed-top" style="box-shadow: 0 15px 30px 0 rgba(0,0,0,0.2);">
            <div class="menu-container container">
                <!-- SHOW LOGO -->
                <div class="mr-auto d-sm-none d-md-none">
                    <img src="<?php print content_url() . '/themes/TwimbitLite/src/twimbit-lite-logo.png'; ?>" alt="">
                </div>
                
                    <form action="#">
                        <div class="search d-flex">
                            <input type="text" placeholder="Search.." name="s" id="searchTerm">
                            <button type="submit"  href="#"  style="    border: none;
    background: none;"><img src="<?php print content_url() . '/themes/TwimbitLite/src/search.svg'; ?>" style="padding-right: 10px; " alt=""></button>
                        </div>
                    </form>
                
                <div class="navbar-brand mx-auto">
                    <amp-img src="<?php print content_url() . '/themes/TwimbitLite/src/download.png'; ?>" width="40" height="40" layout="fixed" class="ml2 d-lg-none" alt="Example logo image"></amp-img>


                    <!-- <span class="navbar-caption-wrap"><a class="navbar-caption mbr-bold text-secondary display-5" href="#top"><span>Twimbit</span></a></span> -->
                </div>

                <div class="d-flex desktop-tool">
                    <a href="#" class="p1 d-flex">
                        <img src="<?php print content_url() . '/themes/TwimbitLite/src/feed.svg'; ?>" alt="">
                        <p>Feed</p>
                    </a>
                    <a href="#" class="p1 d-flex">
                        <img src="<?php print content_url() . '/themes/TwimbitLite/src/explore.svg'; ?>" alt="">
                        <p>Explore</p>
                    </a>
                    <a href="#" on="tap:sidebar.toggle" class="p1 d-flex">
                        <img src="<?php print content_url() . '/themes/TwimbitLite/src/menu.svg'; ?>" alt="">
                        <p>Menu</p>
                    </a>
                </div>

                <div class="align-left d-lg-none">
                    <h1 class="align-right"><img src="<?php print content_url() . '/themes/TwimbitLite/src/search.svg'; ?>" alt=""></h1>
                </div>

                <!-- SHOW LOGO END -->
                <!-- COLLAPSED MENU -->

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->

                <!-- NAVBAR ITEMS -->
                <!-- <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#header2-28">Home</a></li>
                        <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#features3-24">Insights</a></li>
                        <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#contacts1-26">Stories</a></li>
                        <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#contacts1-26">Videos</a></li>
                        <li class="nav-item"><a class="nav-link mbr-bold link text-secondary display-4" href="#contacts1-26">Events</a></li>
                    </ul> -->
                <!-- NAVBAR ITEMS END -->


                <!-- </div> -->
                <!-- COLLAPSED MENU END -->

                <!-- <button on="tap:sidebar.toggle" class="ampstart-btn hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </button> -->
            </div>
        </nav>
        <!-- AMP plug -->

        <!-- </div> -->
    </section>
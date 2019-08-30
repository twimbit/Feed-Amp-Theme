<!DOCTYPE html>
<html amp="1.2.1" <?php language_attributes(); ?>>

<head>

    <!-- Montserrat fonts load -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600&display=swap" rel="stylesheet">
    <!-- Style css	 -->
    <style amp-custom="">
        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: #fff;
            color: #4a4a4a;
            /* font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, Arial, sans-serif; */
            min-width: 315px;
            overflow-x: hidden;
            font-smooth: always;
            margin: 0;
            -webkit-font-smoothing: antialiased
        }

        p {
            padding: 0;
            margin: 0
        }

        .active {
            fill: #f16c70 !important;
            border-color: #f16c70 !important
        }

        .active svg {
            fill: #f16c70 !important
        }

        .fade-animate {
            animation: fadeEffect 1s
        }

        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }

        img {
            border-style: none
        }

        svg:not(:root) {
            overflow: hidden
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0
        }

        button,
        input {
            overflow: visible
        }

        button,
        select {
            text-transform: none
        }

        [type=reset],
        [type=submit],
        button,
        html [type=button] {
            -webkit-appearance: button
        }

        [type=button]::-moz-focus-inner,
        [type=reset]::-moz-focus-inner,
        [type=submit]::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0
        }

        [type=button]:-moz-focusring,
        [type=reset]:-moz-focusring,
        [type=submit]:-moz-focusring,
        button:-moz-focusring {
            outline: 1px dotted ButtonText
        }

        [type=checkbox],
        [type=radio] {
            box-sizing: border-box;
            padding: 0
        }

        [type=number]::-webkit-inner-spin-button,
        [type=number]::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        [type=search]::-webkit-search-cancel-button,
        [type=search]::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        [hidden],
        template {
            display: none
        }

        .text-decoration-none {
            text-decoration: none
        }

        .center {
            text-align: center
        }

        .nowrap {
            white-space: nowrap
        }

        .list-reset {
            list-style: none;
            padding-left: 0
        }

        .block {
            display: block
        }

        .m0 {
            margin: 0
        }

        .my0 {
            margin-top: 0;
            margin-bottom: 0
        }

        .ml1,
        .mx1 {
            margin-left: .5rem
        }

        .mt2 {
            margin-top: 1rem
        }

        .mr2 {
            margin-right: 1rem
        }

        .mb2 {
            margin-bottom: 1rem
        }

        .ml2,
        .mx2 {
            margin-left: 1rem
        }

        .mt4 {
            margin-top: 2rem
        }

        .mr4 {
            margin-right: 2rem
        }

        .mb4 {
            margin-bottom: 2rem
        }

        .ml-auto,
        .mx-auto {
            margin-left: auto
        }

        .mx-auto {
            margin-right: auto
        }

        .p0 {
            padding: 0
        }

        .pr2 {
            padding-right: 1rem
        }

        .pl2 {
            padding-left: 1rem
        }

        .px3 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .col {
            float: left
        }

        .col,
        .col-right {
            box-sizing: border-box
        }

        .col-right {
            float: right
        }

        .col-1 {
            width: 8.33333%
        }

        .col-2 {
            width: 16.66667%
        }

        .col-3 {
            width: 25%
        }

        .col-4 {
            width: 33.33333%
        }

        .col-5 {
            width: 41.66667%
        }

        .col-6 {
            width: 50%
        }

        .col-7 {
            width: 58.33333%
        }

        .col-8 {
            width: 66.66667%
        }

        .col-9 {
            width: 75%
        }

        .col-10 {
            width: 83.33333%
        }

        .col-11 {
            width: 91.66667%
        }

        .col-12 {
            width: 100%
        }

        @media (max-width:40.06rem) {
            .xs-col {
                float: left;
                box-sizing: border-box
            }

            .xs-col-right {
                float: right;
                box-sizing: border-box
            }

            .xs-col-1 {
                width: 8.33333%
            }

            .xs-col-2 {
                width: 16.66667%
            }

            .xs-col-3 {
                width: 25%
            }

            .xs-col-4 {
                width: 33.33333%
            }

            .xs-col-5 {
                width: 41.66667%
            }

            .xs-col-6 {
                width: 50%
            }

            .xs-col-7 {
                width: 58.33333%
            }

            .xs-col-8 {
                width: 66.66667%
            }

            .xs-col-9 {
                width: 75%
            }

            .xs-col-10 {
                width: 83.33333%
            }

            .xs-col-11 {
                width: 91.66667%
            }

            .xs-col-12 {
                width: 100%
            }
        }

        @media (min-width:40.06rem) {
            .sm-col {
                float: left;
                box-sizing: border-box
            }

            .sm-col-right {
                float: right;
                box-sizing: border-box
            }

            .sm-col-1 {
                width: 8.33333%
            }

            .sm-col-2 {
                width: 16.66667%
            }

            .sm-col-3 {
                width: 25%
            }

            .sm-col-4 {
                width: 33.33333%
            }

            .sm-col-5 {
                width: 41.66667%
            }

            .sm-col-6 {
                width: 50%
            }

            .sm-col-7 {
                width: 58.33333%
            }

            .sm-col-8 {
                width: 66.66667%
            }

            .sm-col-9 {
                width: 75%
            }

            .sm-col-10 {
                width: 83.33333%
            }

            .sm-col-11 {
                width: 91.66667%
            }

            .sm-col-12 {
                width: 100%
            }
        }

        @media (min-width:52.06rem) {
            .md-col {
                float: left;
                box-sizing: border-box
            }

            .md-col-right {
                float: right;
                box-sizing: border-box
            }

            .md-col-1 {
                width: 8.33333%
            }

            .md-col-2 {
                width: 16.66667%
            }

            .md-col-3 {
                width: 25%
            }

            .md-col-4 {
                width: 33.33333%
            }

            .md-col-5 {
                width: 41.66667%
            }

            .md-col-6 {
                width: 50%
            }

            .md-col-7 {
                width: 58.33333%
            }

            .md-col-8 {
                width: 66.66667%
            }

            .md-col-9 {
                width: 75%
            }

            .md-col-10 {
                width: 83.33333%
            }

            .md-col-11 {
                width: 91.66667%
            }

            .md-col-12 {
                width: 100%
            }
        }

        @media (min-width:64.06rem) {
            .lg-col {
                float: left;
                box-sizing: border-box
            }

            .lg-col-right {
                float: right;
                box-sizing: border-box
            }

            .lg-col-1 {
                width: 8.33333%
            }

            .lg-col-2 {
                width: 16.66667%
            }

            .lg-col-3 {
                width: 25%
            }

            .lg-col-4 {
                width: 33.33333%
            }

            .lg-col-5 {
                width: 41.66667%
            }

            .lg-col-6 {
                width: 50%
            }

            .lg-col-7 {
                width: 58.33333%
            }

            .lg-col-8 {
                width: 66.66667%
            }

            .lg-col-9 {
                width: 75%
            }

            .lg-col-10 {
                width: 83.33333%
            }

            .lg-col-11 {
                width: 91.66667%
            }

            .lg-col-12 {
                width: 100%
            }
        }

        .flex {
            display: -ms-flexbox;
            display: flex
        }

        @media (min-width:40.06rem) {
            .sm-flex {
                display: -ms-flexbox;
                display: flex
            }
        }

        @media (min-width:52.06rem) {
            .md-flex {
                display: -ms-flexbox;
                display: flex
            }
        }

        @media (min-width:64.06rem) {
            .lg-flex {
                display: -ms-flexbox;
                display: flex
            }
        }

        .flex-wrap {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap
        }

        .items-start {
            -ms-flex-align: start;
            align-items: flex-start
        }

        .items-center {
            -ms-flex-align: center;
            align-items: center
        }

        .justify-start {
            -ms-flex-pack: start;
            justify-content: flex-start
        }

        .justify-end {
            -ms-flex-pack: end;
            justify-content: flex-end
        }

        .justify-around {
            -ms-flex-pack: distribute;
            justify-content: space-around
        }

        .fixed {
            position: fixed
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .left-0 {
            left: 0
        }

        .hide {
            position: absolute;
            height: 1px;
            width: 1px;
            overflow: hidden;
            clip: rect(1px, 1px, 1px, 1px)
        }

        @media (max-width:40rem) {
            .xs-hide {
                display: none
            }
        }

        @media (min-width:40.06rem) and (max-width:52rem) {
            .sm-hide {
                display: none
            }
        }

        @media (min-width:52.06rem) and (max-width:64rem) {
            .md-hide {
                display: none
            }
        }

        @media (min-width:64.06rem) {
            .lg-hide {
                display: none
            }
        }

        .display-none {
            display: none
        }

        .ampstart-subtitle,
        body {
            line-height: 1.5rem;
            letter-spacing: normal
        }

        .ampstart-byline,
        .ampstart-caption,
        .ampstart-hint,
        .ampstart-label {
            font-size: .875rem;
            color: #4f4f4f;
            line-height: 1.125rem;
            letter-spacing: .06rem
        }

        .ampstart-label {
            text-transform: uppercase
        }

        .h3,
        h3 {
            font-size: 1.5rem;
            line-height: 2rem
        }

        .h4,
        h4 {
            font-size: 1.125rem;
            line-height: 1.5rem
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
            font-weight: 400;
            letter-spacing: .06rem
        }

        a,
        a:active,
        a:visited {
            color: inherit
        }

        .amp-carousel-button-next {
            background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Next</title><path d="M25.557 14.7L13.818 2.961 16.8 0l16.8 16.8-16.8 16.8-2.961-2.961L25.557 18.9H0v-4.2z" fill="%23FFF" fill-rule="evenodd"/></svg>')
        }

        .amp-carousel-button-prev {
            background-image: url('data:image/svg+xml;charset=utf-8,<svg width="18" height="18" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg"><title>Previous</title><path d="M33.6 14.7H8.043L19.782 2.961 16.8 0 0 16.8l16.8 16.8 2.961-2.961L8.043 18.9H33.6z" fill="%23FFF" fill-rule="evenodd"/></svg>')
        }

        .ampstart-dropdown {
            min-width: 200px
        }

        .ampstart-dropdown>section>header {
            background-color: #000;
            border: 0;
            color: #fff
        }

        .ampstart-dropdown>section>header:after {
            display: inline-block;
            content: "+";
            padding: 0 0 0 1.5rem;
            color: #003f93
        }

        .ampstart-dropdown>[expanded]>header:after {
            content: "–"
        }

        .absolute .ampstart-dropdown-items {
            z-index: 200
        }

        .ampstart-dropdown-item {
            background-color: #000;
            color: #003f93;
            opacity: .9
        }

        .ampstart-dropdown-item:active,
        .ampstart-dropdown-item:hover {
            opacity: 1
        }

        amp-carousel .ampstart-image-with-heading {
            margin-bottom: 0
        }

        .ampstart-image-with-caption figcaption {
            color: #4f4f4f;
            line-height: 1.125rem
        }

        amp-carousel .ampstart-image-with-caption {
            margin-bottom: 0
        }

        .ampstart-input {
            max-width: 100%;
            width: 300px;
            min-width: 100px;
            font-size: 1rem;
            line-height: 1.5rem
        }

        .ampstart-headerbar {
            background-color: #fff;
            color: #000;
            z-index: 999;
            box-shadow: 0 0 5px 2px rgba(0, 0, 0, .1);
            height: 55px;
            transition: all .3s ease-in-out
        }

        .ampstart-headerbar+:not(amp-sidebar),
        .ampstart-headerbar+amp-sidebar+* {
            margin-top: 3.5rem
        }

        .ampstart-headerbar-nav .ampstart-nav-item {
            padding: 0 1rem;
            background: transparent;
            opacity: .8
        }

        .ampstart-headerbar-nav {
            line-height: 3.5rem
        }

        .ampstart-nav-item:active,
        .ampstart-nav-item:focus,
        .ampstart-nav-item:hover {
            opacity: 1
        }

        .ampstart-nav-item {
            color: #094d5f
        }

        .ampstart-navbar-trigger:focus {
            outline: none
        }

        .ampstart-nav a,
        .ampstart-navbar-trigger,
        .ampstart-sidebar-faq a {
            cursor: pointer;
            text-decoration: none
        }

        .ampstart-nav .ampstart-label {
            color: inherit
        }

        .ampstart-navbar-trigger {
            line-height: 3.5rem;
            font-size: 2rem
        }

        .ampstart-headerbar-nav {
            -ms-flex: 1;
            flex: 1
        }

        .ampstart-nav-search {
            -ms-flex-positive: .5;
            flex-grow: .5
        }

        .ampstart-nav-dropdown amp-accordion ul {
            background-color: #fff
        }

        .ampstart-nav-dropdown .ampstart-dropdown-item,
        .ampstart-nav-dropdown .ampstart-dropdown>section>header {
            background-color: #fff;
            color: #000
        }

        .ampstart-nav-dropdown .ampstart-dropdown-item {
            color: #003f93
        }

        .ampstart-sidebar {
            background-color: #fff;
            color: #000;
            min-width: 300px;
            width: 300px
        }

        .ampstart-sidebar .ampstart-icon {
            fill: #003f93
        }

        .ampstart-sidebar-header {
            line-height: 3.5rem;
            min-height: 3.5rem
        }

        .ampstart-sidebar .ampstart-dropdown-item,
        .ampstart-sidebar .ampstart-dropdown header,
        .ampstart-sidebar .ampstart-faq-item,
        .ampstart-sidebar .ampstart-nav-item,
        .ampstart-sidebar .ampstart-social-follow {
            margin: 0 0 2rem
        }

        .ampstart-sidebar .ampstart-nav-dropdown {
            margin: 0
        }

        .ampstart-sidebar .ampstart-navbar-trigger {
            line-height: inherit
        }

        .ampstart-navbar-trigger svg {
            pointer-events: none
        }

        .search {
            width: fit-content;
            align-items: center;
            display: flex;
            justify-content: space-between;
            height: 36px;
            background: #fafafa;
            box-shadow: rgba(0, 0, 0, 0.2) 0 3px 6px 0;
            border-radius: 20px;
        }

        #searchTerm {
            border: none;
            background: transparent;
            width: 80%;
            position: relative;
            /* bottom: 9px; */
            left: 10px;
        }

        .search button {
            border: none;
            background: none;
            display: flex;
            position: relative;
            right: 5px;
            height: 100%;
            align-items: center;
        }

        .b1 {
            border: 1px solid red
        }

        .ampstart-nav-item {
            display: flex;
            align-items: center;
        }

        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:576px) {
            .container {
                max-width: 540px
            }
        }

        @media (min-width:768px) {
            .container {
                max-width: 720px
            }
        }

        @media (min-width:992px) {
            style .container {
                max-width: 960px
            }
        }

        @media (min-width:1200px) {
            .container {
                max-width: 1140px
            }
        }

        .container-fluid {
            width: 100%;
            max-width: 1920px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }

        #stories {
            margin-top: 5rem
        }

        .story-carousel {
            padding: 0 10px
        }

        .story-carousel amp-img {
            border-radius: 6px;
            box-shadow: 3px 3px 8px 1px rgba(0, 0, 0, .5)
        }

        .amp-carousel-button {
            background-color: rgba(241, 107, 111, 0.54);
            border-radius: 50%
        }

        .amp-carousel-slide>.i-amphtml-replaced-content {
            -o-object-fit: contain;
            object-fit: cover
        }

        .feed-card {
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform .2s;
            border-radius: 4px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
            height: 245px;
            transition: all .4s
        }

        .feed-thumbnail {
            border: none !important;
            position: relative;
            background: #DDD;
            height: 100%;
            display: flex;
            align-items: center
        }

        .feed-card amp-img {
            height: 100%;
            width: 100%;
            transition: all .2s
        }

        .feed-card amp-img img {
            object-fit: cover;
            transform: scale(1);
            transition: all .2s
        }

        .feed-card:hover {
            box-shadow: 8px 9px 12px 2px rgba(0, 0, 0, .5)
        }

        .fade {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
            opacity: .9;
            background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.23) 0, #000 100%)
        }

        .audio-fade {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
            opacity: .9;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.90) 43%, #00000000 100%);
        }

        .feed-link {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0
        }

        .feed-title {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 10px;
            margin: 0;
            color: #FFF;
            padding: 16px
        }

        .feed-title h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 0;
            text-shadow: 0 1px 2px #1a1a1a;
            line-height: 1.4
        }

        .feed-subtitle {
            font-size: 12px
        }

        .feed-title p {
            margin: 8px 0 0;
            font-weight: 400;
            font-size: 17px;
            line-height: .9
        }

        .audio {
            position: relative;
            top: 85%;
            padding: 6px
        }

        .video-container {
            margin: 1.5em;
            height: auto;
            box-shadow: 3px 3px 6px 0px rgba(0, 0, 0, .5);
        }

        .description-share-option ul {
            display: flex;
            list-style: none;
            padding: 5px;
            margin-left: 1em;
            margin-top: -2em
        }

        .detail-option {
            padding: 5px
        }

        .detail-link {
            font-size: 12px;
            background: none;
            border-width: 0 0 3px;
            width: 100%;
            height: 40px;
            color: #094d5f;
            border-color: #f8f8f836;
            display: flex;
            transition-duration: .3s
        }

        .video-description {
            margin-top: -1em;
            padding: 2em
        }

        .video-title {
            font-family: "Open Sans", sans-serif;
            font-weight: 700;
            font-size: 1.5em;
            color: #000;
            margin-bottom: 10px;
            text-transform: capitalize
        }

        .video-description span {
            text-decoration: none;
            text-transform: capitalize
        }

        .overlay {
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: row;
            justify-content: center;
            cursor: pointer;
            overflow-y: scroll
        }

        .content {
            line-height: 1.5em;
            color: #000;
            font-size: 1em;
            padding: 12em;
            justify-content: center;
            font-family: "Open Sans", sans-serif;
            display: flex;
            align-items: center
        }

        .share-icons {
            background-color: #fff;
            width: fit-content;
            height: fit-content;
            z-index: 10;
            padding: 1em;
            text-align: justify;
            flex-direction: column;
            display: flex;
            border-radius: 4px
        }

        .share-icons svg {
            width: 18px;
            text-align: right;
            margin-bottom: 12px;
            align-self: flex-end
        }

        .description-icons {
            background-color: #fff;
            width: 600px;
            height: 300px;
            z-index: 10;
            padding: 1em;
            display: flex;
            text-align: justify;
            flex-direction: column;
            border-radius: 4px
        }

        .description-icons svg {
            width: 18px;
            text-align: right;
            margin-bottom: 12px;
            align-self: flex-end
        }

        .share1 .content p {
            width: auto;
            height: 9em
        }

        .social {
            margin-left: 40%;
            width: 60%;
            height: 20%;
            display: inline-block
        }

        .social1 {
            display: inline-block;
            margin-left: 0;
            height: 2em;
            width: 2em
        }

        .tablinks svg {
            transform: scale(0.6);
            fill: #094d5f
        }

        .tablinks {
            font-size: 12px;
            background: none;
            border-width: 0 0 3px;
            width: 100%;
            height: 40px;
            color: #094d5f;
            border-color: #f8f8f836;
            display: flex;
            transition-duration: .3s
        }

        .tablinks:hover {
            box-shadow: 0 7px 10px 0 #dcdcdc
        }

        @media (min-width:320px) and (max-width:768px) {
            .sub1 span {
                font-size: 11px
            }

            .detail1 {
                font-size: 16px
            }

            .content {
                font-size: 80%;
                padding: 15em 1em
            }

            .content p {
                padding: 10em 1em;
                text-align: justify;
                font-family: sans-serif
            }

            .menu ul {
                flex-direction: row !important
            }

            #filter {
                overflow-x: scroll
            }
        }

        .social {
            margin-left: 40px;
            width: 180px;
            height: 23px;
            display: inline-block
        }

        .social1 {
            display: inline-block;
            margin-left: 0;
            height: 3em;
            width: 3em
        }

        @media (min-width:40rem) and (max-width:52rem) {
            #filter {
                overflow-x: scroll
            }

            .featured-image {
                height: 500px
            }

            .audio {
                padding: 7px;
                top: 83%
            }

            .light1 {
                margin-left: 20px
            }

            .share1 {
                margin-left: 240px
            }

            .right-side {
                margin: 21px 36px 10px 10px;
            }
        }

        @media (min-width: 768px) {
            .feed-card {
                height: 350px
            }

            .feed-card-search {
                height: 250px
            }

            .feed-title {
                padding: 24px
            }

            .feed-title h3 {
                font-size: 32px
            }

            .feed-title p {
                font-size: 14px
            }

            .podcast-cover .feed-title p {
                font-size: 28px
            }

            .podcast-cover .feed-title span {
                font-size: 16px;
                margin-right: 10px;
                text-transform: capitalize;
                font-style: italic
            }
        }

        .podcast-cover .feed-title {
            bottom: auto
        }

        .podcast-cover .feed-title p {
            font-weight: 600;
            font-family: sans-serif;
            text-transform: capitalize
        }

        .feed-action {
            height: 52px;
            display: flex;
            align-items: center;
            bottom: 0;
            color: #FFF;
            position: absolute;
            top: 8px;
            right: 8px
        }

        .feed-button {
            font-size: initial
        }

        .feed-wrap {
            flex-direction: row-reverse;
            display: flex;
            align-items: center
        }

        .feed-button-in {
            border-radius: 30px;
            background: #000;
            transform: scale(.85);
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 0 4px 1px rgba(255, 240, 240, 0.25);
            border-radius: 30px;
            background: #000;
            height: 51px;
            width: 51px
        }

        .atomic-heart {
            filter: invert(100%);
            filter: invert(100%);
            width: 51px;
            height: 51px;
            background-repeat: no-repeat;
            background-size: 50px auto;
            background-position: 0 0;
            text-align: center;
            font-size: 26px;
            color: #000;
            -webkit-animation-duration: 1s;
            -moz-animation-duration: 1s;
            -o-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-timing-function: steps(23, end);
            -moz-animation-timing-function: steps(23, end);
            -o-animation-timing-function: steps(23, end);
            animation-timing-function: steps(23, end)
        }

        .atomic-heart svg {
            transform: translate(0px, 7px) scale(0.7)
        }

        .count {
            font-weight: 600;
            letter-spacing: 2px;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            line-height: 1.3
        }

        .story-section {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
            padding: 10px
        }

        .single-thumbnail {
            position: relative;
            height: 100%;
            display: flex;
            align-items: flex-end
        }

        .featured-image-text {
            position: absolute;
            bottom: 50px;
            padding: 0 15px
        }

        .featured-image-text a {
            font-size: 16px;
            padding: 0 0 2px;
            opacity: .75;
            color: #FFF;
            text-decoration: none;
            border-bottom: 1.5px solid rgba(255, 255, 255, .75)
        }

        .featured-image-text-container {
            display: flex;
            justify-content: center;
            width: 100%
        }

        .featured-image-text h2 {
            color: #fff
        }

        .menu ul {
            display: flex;
            list-style: none;
            padding: 5px
        }

        .menu {
            box-shadow: 0 1px .5px 0 rgba(0, 0, 0, 0.11)
        }

        .menu-item {
            padding: 5px
        }

        .site-footer {
            position: fixed;
            bottom: 0;
            background-color: #fff;
            width: 100%;
            box-shadow: 0 0 5px 2px rgba(0, 0, 0, .1);
            height: 42px;
            z-index: 99
        }

        .site-footer a {
            width: 50px;
            height: 50px
        }

        .site-footer svg {
            transform: translate(9px, 5px) scale(1);
            fill: #094d5f
        }

        .popup {
            transform: translate(5px, 26px);
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5)
        }

        .share2 {
            margin-left: 1.5em
        }

        .footer-content {
            justify-content: space-around;
            height: 100%
        }

        .search-img img {
            width: 30px;
            height: 26px;
            margin-top: 8px
        }

        .amp-carousel-button-prev {
            background-size: 32px 18px
        }

        .amp-carousel-button {
            height: 32px;
            width: 32px
        }

        .amp-carousel-button-next {
            background-size: 32px 18px
        }

        .sub-cat {
            border-radius: 4px
        }

        .sub-cat amp-img {
            opacity: .5
        }

        .sub-cat img {
            object-fit: cover;
            border-radius: 4px
        }

        .sub-cat p {
            position: relative;
            top: -130px;
            left: 15px;
            width: 120px;
            color: #fff
        }

        .sub-cat-inner-container {
            display: flex !important;
            margin-bottom: 10px
        }

        .sub-cat a {
            text-decoration: none;
        }

        .sub-cat-img {
            height: 140px;
            background-color: #000;
            border-radius: 4px;
            margin-right: 20px;
            white-space: normal;
            width: 140px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5)
        }

        .sub-cat-inner-container.amp-scrollable-carousel-slide:first-child {
            margin-left: 34px
        }

        .divider {
            margin-bottom: -19px
        }

        .amp-scrollable-carousel-slide {
            margin-left: 24px
        }

        .single-content {
            padding: 0 15px
        }

        .featured-image {
            background-attachment: fixed;
            height: 400px;
            background-size: cover
        }

        .post-content {
            display: flex;
            justify-content: center
        }

        .single-date-name {
            display: flex;
            justify-content: center
        }

        .post-content figure img {
            width: 100%;
            height: 100%
        }

        #colophon {
            transition: all .3s ease-in-out
        }

        .cont p {
            margin-bottom: .9rem;
            line-height: 2em;
            color: #000;
            font-size: 16px;
            font-weight: 200
        }

        .cont li {
            margin-bottom: .9rem;
            line-height: 2em;
            color: #000;
            font-size: 16px;
            font-weight: 200
        }

        .post-content p {
            margin-bottom: .9rem;
            color: #000;
            font-size: 16px;
            font-weight: 300
        }

        .right-side {
            margin: 36px 65px 10px 22px;
        }

        .podcast-cover .feed-card {
            margin: 36px;
            height: 313px
        }

        .next {
            color: #000;
            margin-top: 1em;
            margin-bottom: 0;
            font-size: 20px;
            text-decoration: none;
            text-transform: capitalize
        }

        .player {
            width: 85%;
            height: 35px
        }

        light1 {
            margin-left: 100px
        }

        .share1 {
            margin-left: 1em
        }

        .desc {
            position: relative;
            top: -20px;
            margin-left: 45px;
            padding: 10px;
            font-size: 13px;
            line-height: 20px;
            text-transform: capitalize
        }

        .desc p {
            color: #000;
            font-family: "Open Sans", sans-serif;
            text-align: justify;
            font-size: 13px;
            line-height: initial
        }

        .desc head1 {
            color: #000
        }

        .head {
            display: flex
        }

        .info {
            display: flex
        }

        @media only screen and (max-width:40rem) {
            .wp-block-embed__wrapper iframe {
                width: 100%;
                height: 100%
            }

            .podcast-cover .feed-title span {
                font-size: 12px;
                margin-right: 10px;
                text-transform: capitalize
            }


            .player {
                width: 100%;
                height: 30px
            }

            .desc p {
                color: #FFF;
                font-size: 10px;
                text-transform: capitalize;
                line-height: initial
            }

            .featured-image-text h2 {
                font-size: 25px;
                line-height: 2rem
            }

            .cont p {
                line-height: 1.5em
            }

            .cont li {
                line-height: 1.5em
            }

            .feed-card-container {
                order: 2
            }

            .filter-bar-container {
                order: 1
            }

            [class*="col-"] .details h3 {
                margin-left: 150px;
                margin-top: -270px;
                width: 800px;
                font-size: 20px;
                align: right;
                color: #000;
                text-transform: capitalize
            }

            [class*="col-"] .sub1 {
                font-size: 40px;
                /*margin-top: 26px;*/
                color: #000
            }

            .right-side {
                margin: 0 36px 10px
            }

            .podcast-cover .feed-card {
                margin: 20px 36px
            }

            .feed-card-search {
                height: 150px
            }

            .feed-title h3 {
                font-size: 20px
            }

            .feed-title p {
                font-size: 13px
            }

            #filter {
                overflow-x: scroll
            }

            .video-container {
                margin-top: 0;
                margin-left: 1em;
                margin-right: 1em
            }
        }

        .more-to-explore-card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between
        }

        .archive-filter-card-container {
            flex-wrap: wrap
        }

        @media (max-width:52rem) {
            .more-to-explore-card-container {
                display: block;
                flex-wrap: wrap;
                justify-content: space-between
            }

            .more-to-explore-card-container .feed-card {
                width: 100% !important
            }

            .twimbit-lite-logo {
                width: 100%;
                display: flex;
                justify-content: center
            }
        }

        @media (min-width:64.06rem) {
            .podcast-cover .feed-card {
                margin: 36px;
                height: 400px
            }
        }

        @media (min-width:320px) and (max-width:768px) {
            .content {
                font-size: 80%;
                padding: 1em
            }

            .content p {
                padding: 1em;
                text-align: justify;
                font-family: sans-serif
            }
        }

        .social {
            margin-left: 40px;
            width: 180px;
            height: 23px;
            display: inline-block
        }

        .social1 {
            display: inline-block;
            margin-left: 0;
            height: 2em;
            width: 2em
        }

        @media (min-width:40rem) and (max-width:52rem) {
            .featured-image {
                height: 500px
            }

            .audio {
                padding: 7px;
                top: 83%
            }

            .light1 {
                margin-left: 20px
            }

            .share1 {
                margin-left: 240px
            }

            .right-side {
                margin: 21px 36px 10px 0px
            }
        }

        .desc {
            font-size: 3px;
            right: 15px;
            line-height: 10px;
            text-align: justify
        }

        .pre-next-dialog {
            position: sticky;
            top: 4%;
            width: 100%;
            background-color: #f4f4f4;
            box-shadow: 5px 3px 8px -3px rgba(0, 0, 0, 0.23)
        }

        .pre-next-dialog-content {
            padding: 0 10px;
            min-width: 100%
        }

        .pre-next-dialog-content h2 {
            margin-bottom: 10px;
            font-size: 22px
        }

        .pre-next-dialog-content p {
            width: 100%;
            background-color: #fff;
            padding: 10px;
            margin-bottom: 10px;
            box-shadow: 0 0 6px 1px rgba(0, 0, 0, 0.23);
            transition: all .3s
        }

        .pre-next-dialog-content p:hover {
            box-shadow: 0 2px 14px 0 rgba(0, 0, 0, .5)
        }

        .pre-next-dialog-content a {
            text-decoration: none
        }

        .feed-card-container {
            flex: 2 400px
        }

        .filter-bar-container {
            flex: 1 150px;
            height: 200px
        }

        .podcast {
            margin-top: 50px;
            justify-content: center
        }

        .short-card {
            display: flex;
            height: 90px;
            background-color: #fff;
            border-radius: 4px;
            margin-top: 20px;
            margin-bottom: 20px;
            margin-left: 0;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .5);
            transition: all .2s
        }

        .short-card:hover {
            box-shadow: 3px 3px 6px 0px rgba(0, 0, 0, .5);
        }

        .short-image {
            height: 100%;
            width: 110px;
            margin-right: 20px;
            border-radius: 4px
        }

        .icon {
            height: 50px;
            width: 50px;
            transform: translate(30px, -75px)
        }

        .details {
            font-size: 20px;
            align: right;
            color: #000;
            flex-grow: 1;
            justify-content: space-between;
            display: flex;
            flex-direction: column;
            width: 70%
        }

        .sub1 span {
            font-size: 13px;
            color: #000;
            text-transform: capitalize
        }

        .sub1 {
            /*margin-top: 25px;*/
            /*display: flex;*/
            /*flex-wrap: wrap*/
        }

        .detail1 {
            font-size: 16px;
            position: relative;
            top: 10px;
            overflow: hidden !important;
            display: -webkit-box !important;
            -webkit-line-clamp: 2 !important;
            -webkit-box-orient: vertical !important;
            text-transform: capitalize
        }

        .social {
            margin-left: 40px;
            width: 180px;
            height: 23px;
            display: inline-block
        }

        .light2 {
            margin-left: 36px;
            display: flex;
            margin-top: -2em
        }

        .light1 {
            margin-left: 1em
        }

        .lightbox {
            background: rgba(0, 0, 0, 2.8);
            width: 90%;
            height: 40%;
            margin: 1.5em;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .lightbox p {
            color: #fff;
            margin: 20px;
            font-size: 20px;
            display: flex
        }

        .lightbox1 {
            background: rgba(3, 4, 5, 1.8);
            width: 42%;
            height: 30%;
            margin: 300px 20px 30px 210px;
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .lightbox1 p {
            color: #fff;
            margin: 20px;
            font-size: 20px;
            display: flex
        }

        @media (min-width:320px) and (max-width:835px) {
            .sub1 span {
                font-size: 11px
            }

            .detail1 {
                font-size: 16px
            }

            /*.sub1 {*/
            /*    margin-top: 15px*/
            /*}*/
        }

        @media (min-width:768px) {
            .menu {
                box-shadow: none
            }
        }

        @media only screen and (max-width: 320px) {
            .sub1 h2 {
                line-height: 22px
            }

            .short-card {
                height: 80px
            }

            .short-image {
                height: 100%;
                width: 90px;
                margin-right: 15px
            }

            [class*="col-"] .sub1 {
                margin-top: 10px
            }

            .social {
                margin-left: 40px;
                width: 180px;
                height: 23px
            }

            .desc {
                font-size: 3px;
                right: 15px;
                line-height: 8px;
                text-align: justify
            }

            .social1 {
                display: inline-block;
                margin-left: 0;
                height: 2em;
                width: 2em
            }

            .podcast-cover .feed-card {
                height: 240px
            }

            .audio .player {
                width: 100%
            }

            .lightbox1 {
                width: 71%;
                height: 30%;
                margin: 4em
            }

            .lightbox {
                margin-top: 0;
                height: auto;
                margin-left: 1.5em
            }

            .lightbox p {
                font-size: 1em
            }

            .audio {
                margin-top: -3%
            }

            .share2 {
                margin-left: 1.5em;
                margin-top: -.4em
            }

            .next {
                margin-top: 8px
            }

            .light1 {
                margin-left: 1em
            }

            .share1 {
                margin-left: 1em
            }

            .right-side {
                margin: 11px 36px 10px
            }

            .content {
                font-size: 80%;
                padding: 8em 1em
            }

            .content p {
                width: 100%;
                padding: 2em;
                justify-content: center;
                text-align: justify;
                font-family: sans-serif
            }

            .video-container {
                margin-top: 0;
                margin-left: 1em;
                margin-right: 1em
            }
        }

        .podcast-card {
            box-shadow: 8px 9px 12px 2px rgba(0, 0, 0, .5)
        }

        @media (max-width: 64rem) and (min-width: 52.06rem) {
            .md-hide {
                display: none
            }
        }

        @media (min-width: 64.06rem) {
            .lg-hide {
                display: none
            }
        }

        .amp-story-carousel a {
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0
        }

        .amp-story-carousel {
            position: relative;
            margin: 8px
        }

        .active-nav {
            color: #f16c70;
            border-bottom: 3px solid #f16c70
        }

        .search-lightbox {
            background: rgba(0, 0, 0, 0.8);
            width: 100%;
            height: 100%;
            position: absolute;
            display: flex;
            justify-content: center
        }

        .overlay-content {
            position: relative;
            top: 2%;
            width: 95%;
            text-align: center;
            margin: auto
        }

        .search-overlay .closebtn {
            position: absolute;
            top: 20px;
            right: 10px;
            font-size: 41px;
            cursor: pointer;
            color: #fff
        }

        .search-overlay .closebtn:hover {
            color: #ccc
        }

        .search-overlay input[type=text] {
            padding: 15px;
            font-size: 17px;
            border: none;
            float: left;
            width: 80%;
            background: #fff
        }

        .search-overlay input[type=text]:hover {
            background: #f1f1f1
        }

        .search-overlay button {
            float: left;
            width: 20%;
            padding: 5px;
            background: #ddd;
            border: none;
            cursor: pointer
        }

        .search-overlay button:hover {
            background: #bbb
        }

        .overlay-content form {
            display: flex
        }

        .overlay-content img {
            margin-top: 1px
        }

        #cards-feed {
            max-width: 700px
        }

        .text-decoration-none svg {
            width: 40px;
            height: 30px;
            transform: translate(0px, 9px);
            width: 40px;
            height: 30px;
            transform: translate(0px, 9px);
            fill: #094d5f
        }

        .active-nav svg {
            fill: #f16c70
        }

        .text-decoration-none {
            position: relative;
            bottom: -3px
        }

        .feed-menu svg {
            transform: translate(9px, 10px)
        }

        * {
            outline: none
        }

        .back-button-icon {
            position: relative;
            top: 5px;
            width: 24px
        }

        /* Header top line css */
        /* Make clicks pass-through */
        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            background: #f16c70;

            position: fixed;
            z-index: 999999;
            top: 0;
            left: 0;

            width: 100%;
            height: 3px;
        }

        /* Fancy blur effect */
        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #f16c70, 0 0 5px #f16c70;
            opacity: 1.0;

            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        .nav-links {
            display: flex;
            color: #FFF;
        }

        .nav-links .next {
            margin-top: 0px;
        }

        .nav-links .page-numbers {
            padding: 9px;
            /* border: 1px solid; */
            margin: 4px;
            border-radius: 4px;
            text-decoration: none;
            background-color: #f16c70;
        }

        .nav-links .current {
            background-color: #f3454a;
        }
    </style>
    <!-- iphone meta tags	 -->
    <?php if (have_posts()) : while (have_posts()) : the_post();
        endwhile;
    endif; ?>
    <meta property="fb:app_id" content="713777305326587" />
    <meta property="fb:admins" content="1626522259" />

    <?php if (is_single()) { ?>
        <!-- Open Graph -->
        <meta property="og:url" content="<?php the_permalink() ?>" />
        <meta property="og:title" content="<?php single_post_title(''); ?>" />
        <meta property="og:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {
                                                    echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID));
                                                } ?>" />
        <!-- Schema.org -->
        <meta itemprop="name" content="<?php single_post_title(''); ?>">
        <meta itemprop="description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">
        <meta itemprop="image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {
                                                echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID));
                                            } ?>">
        <!-- Twitter Cards -->
        <meta property="twitter:card" content="summary">
        <meta property="twitter:site" content="Twimbit.pro">
        <meta property="twitter:title" content="<?php single_post_title(''); ?>">
        <meta property="twitter:description" content="<?php echo strip_tags(get_the_excerpt($post->ID)); ?>">
        <meta property="twitter:creator" content="Twimbit User">
        <meta property="twitter:image" content="<?php if (function_exists('wp_get_attachment_thumb_url')) {
                                                        echo wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID));
                                                    } ?>">
        <meta property="twitter:url" content="<?php the_permalink() ?>" />
        <meta property="twitter:domain" content="Twimbit Pro">

    <?php } ?>



    <!-- AMP Scripts -->
    <!-- Import the `amp-lightbox` component in the header -->
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js" async></script>
    <script async custom-element="amp-lightbox" src="https://cdn.ampproject.org/v0/amp-lightbox-0.1.js"></script>
    <script custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js" async></script>
    <script custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js" async></script>
    <script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
    <script async custom-element="amp-video" src="https://cdn.ampproject.org/v0/amp-video-0.1.js"></script>
    <script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
    <title><?php

            global $page, $paged;

            wp_title('|', true, 'right');

            // Add the blog name.
            bloginfo('name');

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && (is_home() || is_front_page()))
                echo " | $site_description";

            // Add a page number if necessary:
            if ($paged >= 2 || $page >= 2)
                echo ' | ' . sprintf(__('Page %s', 'oscar'), max($paged, $page));

            ?></title>
    <meta charset="<?php bloginfo('charset'); ?>">
    <!-- <script type="application/javascript" src="<?php echo get_template_directory_uri() . '/src/toggler.js' ?>"> </script> -->
    <meta name="amp-google-client-id-api" content="googleanalytics">
    <!--     <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- service worker tag register -->
    <!-- <script custom-element="amp-install-serviceworker" src="https://cdn.ampproject.org/v0/amp-install-serviceworker-0.1.js" async=""></script> -->

    <!-- Manifest file -->
    <!-- <link rel="manifest" href="<?php //print get_template_directory_uri(). '/src/manifest.json';
                                    ?>"> -->





    <!-- jQuery -->
    <!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->


    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }

        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }

        @keyframes -amp-start {
            from {
                visibility: hidden
            }

            to {
                visibility: visible
            }
        }
    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>

    <?php wp_head();
    ?>
</head>
<?php
$business = get_category_by_slug('business_model');
$business_child = get_categories(array('child_of' => $business->term_id, 'hide_empty' => FALSE));

$careers = get_category_by_slug('careers');
$careers_child = get_categories(array('child_of' => $careers->term_id, 'hide_empty' => FALSE));

$companies = get_category_by_slug('companies');
$companies_child = get_categories(array('child_of' => $companies->term_id, 'hide_empty' => FALSE));

$technology = get_category_by_slug('technology');
$technology_child = get_categories(array('child_of' => $technology->term_id, 'hide_empty' => FALSE));

$exclusive = get_category_by_slug('exclusive');
$exclusive_child = get_categories(array('child_of' => $exclusive->term_id, 'hide_empty' => FALSE));

$industry = get_category_by_slug('industry');
$industry_child = get_categories(array('child_of' => $industry->term_id, 'hide_empty' => FALSE));
?>

<body>
    <!-- Registering Service Worker -->
    <!-- <amp-install-serviceworker src="<?php //echo get_template_directory_uri(). '/src/sw.js'; 
                                            ?>" layout="nodisplay" data-iframe-src="<?php //echo get_template_directory_uri(). '/src/install-sw.html'; 
                                                                                    ?>"></amp-install-serviceworker> -->

    <!-- Start Navbar -->
    <header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr2" style="display: flex;
										justify-content:space-between;">
        <div class="lg-hide md-hide" style="width:32px">
            <?php if (!(is_home())) { ?>
                <a href="javascript:history.go(-1)">
                    <img class="back-button-icon" src="<?php echo get_template_directory_uri() . '/src/back.svg'; ?>" alt="header-back-button">
                </a>
            <?php } ?>
        </div>
        <a href="<?php echo home_url(); ?>" style="height: 100%;padding-top: 0.6rem;">
            <img src="<?php echo get_template_directory_uri() . '/src/twimbit-pro-logo.png' ?>" height="52" width="130" layout="fixed" alt="Twimbit logo">
        </a>
        <nav class="ampstart-headerbar-nav ampstart-nav xs-hide sm-hide">
            <ul class="list-reset center m0 p0 flex justify-end nowrap">
                <li class="ampstart-nav-item mr4">
                    <form action="<?php echo site_url(); ?>">
                        <div class="search d-flex">
                            <input type="text" required="required" placeholder="Search.." name="s" id="searchTerm">
                            <button type="submit" href="#" style="border:none;background:none;" name="search-submit">
                                <amp-img src="<?php echo get_template_directory_uri() . '/src/search.svg' ?>" width="20" height="20" class="my0 mx-auto"></amp-img>
                            </button>
                        </div>
                    </form>
                </li>

                <li on="tap:explore-tab-section.hide(),feed-tab-section.show()" class="ampstart-nav-item tool feed-selector-class" id="feed-nav" style="padding: 0 0;">
                    <a style="padding: 0 1rem;" class="text-decoration-none block feed-menu" <?php if (!(is_home())) {
                                                                                                    ?> href="<?php echo home_url(); ?>" <?php } ?>>
                        <svg>
                            <path d=" M 2 26.51701164245605 L 26.82351112365723 26.51701164245605 L 26.82351112365723 22.59750747680664 L 2 22.59750747680664 L 2 26.51701164245605 Z M 25.51700782775879 9.532502174377441 L 3.306500434875488 9.532502174377441 C 2.587925434112549 9.532502174377441 2 10.12042713165283 2 10.83900260925293 L 2 18.67800521850586 C 2 19.39658164978027 2.587925434112549 19.98450660705566 3.306500434875488 19.98450660705566 L 25.51700782775879 19.98450660705566 C 26.2355842590332 19.98450660705566 26.82351112365723 19.39658164978027 26.82351112365723 18.67800521850586 L 26.82351112365723 10.83900260925293 C 26.82351112365723 10.12042713165283 26.2355842590332 9.532502174377441 25.51700782775879 9.532502174377441 Z M 2 3 L 2 6.919501304626465 L 26.82351112365723 6.919501304626465 L 26.82351112365723 3 L 2 3 Z">
                            </path>
                        </svg>
                        Feed</a>
                </li>

                <li on="tap:explore-tab-section.show(),feed-tab-section.hide()" class="ampstart-nav-item tool explore-selector-class" id="explore-nav" style="padding: 0 0;">
                    <a style="padding: 0 1rem;" class="text-decoration-none block">
                        <svg>
                            <path d="M 14.39246368408203 27.51700592041016 L 23.0528507232666 27.51700592041016 L 23.0528507232666 17.12454223632813 L 14.39246368408203 17.12454223632813 L 14.39246368408203 27.51700592041016 Z M 4 27.51700592041016 L 12.66038703918457 27.51700592041016 L 12.66038703918457 5 L 4 5 L 4 27.51700592041016 Z M 24.78492736816406 27.51700592041016 L 33.4453125 27.51700592041016 L 33.4453125 17.12454223632813 L 24.78492736816406 17.12454223632813 L 24.78492736816406 27.51700592041016 Z M 14.39246368408203 5 L 14.39246368408203 15.39246273040771 L 33.4453125 15.39246273040771 L 33.4453125 5 L 14.39246368408203 5 Z">
                            </path>
                        </svg>Explore</a>
                </li>
                <li class="ampstart-nav-item">
                    <a on="tap:header-sidebar.toggle" class="nav_button text-decoration-none feed-menu block">
                        <svg>
                            <path d="M2,22.479v3.4H28v-3.4Zm0-8.49v3.4H28v-3.4ZM2,5.5V8.9H28V5.5Z"></path>
                        </svg>
                        Menu
                    </a>
                </li>
            </ul>
        </nav>
        <div class="search-img lg-hide md-hide">
            <amp-lightbox id="search-lightbox" layout="nodisplay">
                <div class="search-lightbox" role="button" tabindex="0">
                    <div id="myOverlay" class="search-overlay">
                        <span class="closebtn" on="tap:search-lightbox.close" title="Close Overlay">×</span>
                        <div class="overlay-content">
                            <form action="<?php echo site_url(); ?>">
                                <input type="text" placeholder="Search.." name="s">
                                <button type="submit" href="#" name="light-box-search">
                                    <amp-img src="<?php echo get_template_directory_uri() . '/src/search.svg' ?>" width="20" height="20" class="my0 mx-auto"></amp-img>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </amp-lightbox>
            <img on="tap:search-lightbox" src="<?php echo get_template_directory_uri() . '/src/search.svg'; ?>" alt="lightbox-search-image">
        </div>
    </header>

    <!-- Start Sidebar -->
    <amp-sidebar id="header-sidebar" class="ampstart-sidebar px3" layout="nodisplay" side="right" style="box-shadow: 0 0 20px 0 rgba(0,0,0,.1);">
        <div class="flex justify-start items-center ampstart-sidebar-header">
            <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
        </div>
        <nav class="ampstart-sidebar-nav ampstart-nav">
            <ul class="list-reset m0 p0 ampstart-label">
                <li class="ampstart-nav-item feed-selector-class" style="margin-bottom:1rem"><a on="tap:explore-tab-section.hide(),feed-tab-section.show(),header-sidebar.toggle" <?php if (!(is_home())) {
                                                                                                                                                                                        ?> href="<?php echo home_url(); ?>" <?php } ?>>Feed</a></li>
                <li class=" ampstart-nav-item explore-selector-class" style="margin-bottom:1rem"><a on="tap:explore-tab-section.show(),feed-tab-section.hide(),header-sidebar.toggle" <?php if (!(is_home())) {
                                                                                                                                                                                            ?> href="<?php echo home_url(); ?>/explore" <?php } ?>>Explore</a></li>
            </ul>
            <ul class="ampstart-dropdown-items list-reset m0 p0">
                <p>Categories</p>
                <hr>
                <li class="ampstart-nav-item">
                    <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown ml1" expand-single-section>
                        <section>
                            <header class="ampstart-nav-item" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem">Business Model</header>
                            <ul class="ampstart-dropdown-items list-reset m0 ml1 p0">
                                <?php
                                foreach ($business_child as $val) {
                                    ?>
                                    <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="<?php echo get_category_link($val->term_id); ?>" class="text-decoration-none"><?php echo $val->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </section>
                        <section>
                            <header class="ampstart-nav-item" style="background-color:#fff;color:#094d5f;margin-bottom:0.5em">Careers</header>
                            <ul class="ampstart-dropdown-items list-reset m0 ml1 p0">
                                <?php
                                foreach ($careers_child as $val) {
                                    ?>
                                    <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="<?php echo get_category_link($val->term_id); ?>" class="text-decoration-none"><?php echo $val->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </section>
                        <section>
                            <header class="ampstart-nav-item" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem">Companies</header>
                            <ul class="ampstart-dropdown-items list-reset m0 ml1 p0">
                                <?php
                                foreach ($companies_child as $val) {
                                    ?>
                                    <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="<?php echo get_category_link($val->term_id); ?>" class="text-decoration-none"><?php echo $val->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </section>
                        <section>
                            <header class="ampstart-nav-item" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem">Technology</header>
                            <ul class="ampstart-dropdown-items list-reset m0 ml1 p0">
                                <?php
                                foreach ($technology_child as $val) {
                                    ?>
                                    <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="<?php echo get_category_link($val->term_id); ?>" class="text-decoration-none"><?php echo $val->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </section>
                        <section>
                            <header class="ampstart-nav-item" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem">Exclusive</header>
                            <ul class="ampstart-dropdown-items list-reset m0 ml1 p0">
                                <?php
                                foreach ($exclusive_child as $val) {
                                    ?>
                                    <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="<?php echo get_category_link($val->term_id); ?>" class="text-decoration-none"><?php echo $val->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </section>
                        <section>
                            <header class="ampstart-nav-item" style="background-color:#fff;color:#094d5f;margin-bottom:0.5rem">Industry</header>
                            <ul class="ampstart-dropdown-items list-reset m0 ml1 p0">
                                <?php
                                foreach ($industry_child as $val) {
                                    ?>
                                    <li class="ampstart-nav-item" style="margin-bottom:1rem"><a href="<?php echo get_category_link($val->term_id); ?>" class="text-decoration-none"><?php echo $val->name; ?></a></li>
                                <?php } ?>
                            </ul>
                        </section>
                    </amp-accordion>
                </li>
            </ul>
            <div class='onesignal-customlink-container'></div>
        </nav>
        <ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
            <li class="mr2">
                <div class="social" style="display: flex;justify-content: space-between;margin-left:0px;">
                    <amp-social-share class="social1" height="30px" data-param-app_id="254325784911610" width="30px" type="facebook"></amp-social-share>
                    <amp-social-share class="social1" height="30px" width="30px" type="linkedin"></amp-social-share>
                    <amp-social-share class="social1" height="30px" width="30px" type="twitter"></amp-social-share>
                    <amp-social-share class="social1" height="30px" width="30px" type="whatsapp"></amp-social-share>
                </div>
            </li>
        </ul>
        <!-- <ul class="ampstart-sidebar-faq list-reset m0">
                <li class="ampstart-faq-item">
                    <a href="#" class="text-decoration-none">About</a>
                </li>
                <li class="ampstart-faq-item">
                    <a href="#" class="text-decoration-none">Contact</a>
                </li>
            </ul> -->
        <div class='onesignal-customlink-container'></div>
    </amp-sidebar>
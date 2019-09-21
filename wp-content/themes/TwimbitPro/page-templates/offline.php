<?php

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Twimbit</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/offline/offline.css">
    <script type="application/javascript" src="<?php echo get_template_directory_uri(); ?>/src/offline/offline.js" defer=""></script>
    <script type="application/javascript" src="<?php echo get_template_directory_uri(); ?>/src/offline/vendor-offline.js" defer=""></script>
</head>

<body class="offline-page">
    <header class="siteheader" role="banner">
        <a href="<?php echo home_url(); ?>" class="siteheader__logo-link" style="display:flex;align-items: flex-end;justify-content: center;">
            <img src="<?php echo get_template_directory_uri() . '/src/twimbit-pro-logo.png' ?>" height="52" width="130" alt="Twimbit logo">
        </a>
    </header>

    <main class="offline-page__content" role="main">
        <h1 class="offline-page__title">You are currently offline </h1>
        <button id="js_offline_manual_reload" class="btn offline-page__retry" onclick="javascript:history.go(-1)">
            back
        </button>

        <p class="offline-page__description">In the meantime, how about a trip in the offline maze?</p>

        <div class="offline-page__maze js-maze" style="height: 274px;"><canvas width="548" height="274" style="position: absolute; left: 3px; top: 4px; width: 548px; height: 274px;"></canvas><canvas width="548" height="274" style="position: absolute; left: 4px; top: 5px; width: 548px; height: 274px;"></canvas>
            <div style="background-color: rgb(0, 127, 173); height: 6px; width: 6px; border-radius: 100px; position: absolute; left: 1px; top: 2px; transition: transform 100ms ease 0s, box-shadow 200ms ease 0s; transform: translate(6px, 6px); box-shadow: rgba(0, 127, 173, 0.2) 0px 0px 0px 10px;"></div>
            <div style="position: absolute; right: 0px; top: 100%; margin-top: 5px; font-size: 12px; font-weight: bold; transition: opacity 200ms ease 0s; opacity: 1; color: rgb(0, 127, 173);">00:00</div>
            <div style="position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px; color: rgb(255, 255, 255); background-color: rgba(0, 127, 173, 0.7); font-weight: bold; transition: opacity 100ms ease 0s; opacity: 1; text-align: center; padding: 20px; display: flex; flex-direction: column; justify-content: center;">
                <p id="js_offline_translation_desk">Press an arrow key to start playing the game!</p>
            </div>
            <div class="offline-page__trophy" style="position: absolute; left: 0px; top: 100%; margin-top: 5px; font-size: 12px; font-weight: bold; transition: opacity 200ms ease 0s; opacity: 1; max-width: 50%;"></div>
        </div>
        <div class="offline-page__guide">

            <p id="js_offline_translation_mob">Tilt the phone to move the pin and start playing!</p>
        </div>
    </main>


</body>

</html>
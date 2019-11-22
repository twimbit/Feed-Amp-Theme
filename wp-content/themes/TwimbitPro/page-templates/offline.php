<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Twimbit</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/offline/offline.css">
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
            Go back
        </button>
    </main>


</body>

</html>
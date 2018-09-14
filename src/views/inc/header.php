<!DOCTYPE html>
<html dir="ltr" lang="en-gb">
    <head>
        <!-- <link rel='canonical' href="" /> -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= $page->getTitle() ?> | Boombase</title>
        <meta name="description" content="<?= $description() ?>" />
        <meta name="keywords" content="<?= $page->getKeywords() ?>" />

        <meta property="og:type" content="blog">
        <meta property="og:site_name" content="Boombase">
        <meta property="og:url" content="<?= $page->url() ?>">
        <meta property="og:title" content="<?= $page->getTitle() ?>">
        <meta property="og:description" content="<?= $page->getDescription() ?>">

        <?= $analytics() ?>

        <link rel="manifest" href="<?= $pub('manifest.json') ?>">
        <link rel="shortcut icon" href="<?= $pub('favicon.png') ?>">

        <link rel="alternate" type="application/rss+xml" title="RSS" href="<?= $page->url() ?>.rss"/>

        <?php if ($page->allowsExternalIndexing()): ?>
            <meta name='robots' content='index, follow' />
        <?php else: ?>
            <meta name='robots' content='noindex, nofollow' />
        <?php endif ?>

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?= $pub('app.css') ?>" />

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117424260-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-117424260-2');
        </script>

</head>

<body class="<?= $page->getTemplate()->getFilename() ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M4BHNG"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="cookie-banner" class="bg-grey d-none">
        <div class="container p-1 d-flex justify-content-center align-items-center">
            <p class="text-small m-0">We use cookies to ensure that we give you the best experience on our website. If you continue, we will assume that you agree to our <a class="text-pink" href="/cookie-policy">cookie policy.</a></p>
            <a href="#" class="text-small ml-auto close">Close</a>
        </div>
    </div>
    
    <header class="header">
        <div class="container">
            <?= $view('inc.navbar') ?>
        </div>
    </header>
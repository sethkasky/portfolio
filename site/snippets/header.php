<!DOCTYPE html>
  <html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $site->title()->html() ?> &middot; <?= $page->title()->html() ?></title>
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="url" content="https://kas.ky/">

    <link rel="me" href="mailto:seth@kas.ky">
    <link rel="me" href="sms:+18725297384">
    <link rel="author" href="humans.txt">

    <link rel="icon" href="assets/images/favicon/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="icon" href="assets/images/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/images/favicon/favicon-48x48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="assets/images/favicon/favicon-62x62.png" sizes="62x62" type="image/png">
    <link rel="icon" href="assets/images/favicon/favicon-192x192.png" sizes="192x192" type="image/png">

    <!-- Search Engine -->
    <meta name="description" content="<?= $site->description()->html() ?>">
    <meta name="image" content="https://kas.ky/assets/images/meta/og-meta-image.png">
    <!-- Schema.org for Google -->
    <meta itemprop="name" content="Seth Kasky">
    <meta itemprop="description" content="<?= $site->description()->html() ?>">
    <meta itemprop="image" content="https://kas.ky/assets/images/meta/og-meta-image.png">
    <!-- Twitter -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Seth Kasky">
    <meta name="twitter:description" content="<?= $site->description()->html() ?>">
    <meta name="twitter:site" content="@sethkasky">
    <meta name="twitter:image:src" content="https://kas.ky/assets/images/meta/twitter-meta-image.jpg">
    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta name="og:title" content="Seth Kasky">
    <meta name="og:description" content="<?= $site->description()->html() ?>">
    <meta name="og:image" content="https://kas.ky/assets/images/meta/og-meta-image.png">
    <meta name="og:url" content="https://kas.ky">
    <meta name="og:site_name" content="Seth Kasky">
    <meta name="og:type" content="website">

    <?= css('assets/css/main.css') ?>
    <script src="https://use.typekit.net/cev1apd.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
    <?php echo ga(); ?>
  </head>
  <body>

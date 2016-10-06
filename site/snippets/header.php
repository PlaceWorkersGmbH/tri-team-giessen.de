<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <script src="/assets/js/jquery.min.js"></script>
  <?php echo css('assets/css/lightbox.css') ?>

  <?php echo css('assets/css/main.css') ?>

  <link rel="shortcut icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png" />
  <link rel="icon" href="<?= url('assets/images/favicon.png') ?>" type="image/png" />

</head>
<body>

  <header class="header cf" role="banner">
    <h1 class="logo">
      <a href="<?php echo url() ?>" alt="Triathlon Team Giessen e.V.">
        <img src="<?php echo url('assets/images/triathlon-team-giessen.png') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>
    </h1>
    <?php snippet('menu') ?>
  </header>

<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main" role="main">
    <div class="text">
      <?php echo $page->date('d.m.Y') ?>
      <h1><?php echo $page->title()->html() ?></h1>
      <div class="subtitle">
        <?php echo $page->subtitle()->kirbytext(false) ?>
      </div>
      <?php echo $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>

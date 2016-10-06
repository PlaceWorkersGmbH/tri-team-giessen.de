<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
      <?php snippet('articles', array(
        'articles' => $pages->find('aktuelles/neuigkeiten')->children()->visible()
      )) ?>
    </div>

  </main>

<?php snippet('footer') ?>

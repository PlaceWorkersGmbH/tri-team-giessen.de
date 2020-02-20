<?php snippet('header') ?>

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
      <?php snippet('articles', array(
        'articles' => $pages->find('aktuelles/neuigkeiten')->children()->flip()->listed()
      )) ?>
    </div>

  </main>

<?php snippet('footer') ?>

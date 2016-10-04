<?php snippet('header') ?>

  <main class="main two-col-layout" role="main">

    <div class="mood-image">
      <?= $page->images('mood') ?>
    </div>

    <?php snippet('sponsors') ?>
    <?php snippet('articles', array(
      'articles' => $pages->find('articles/neuigkeiten')->children()->visible()->limit(3)
    )) ?>

  </main>

<?php snippet('footer') ?>

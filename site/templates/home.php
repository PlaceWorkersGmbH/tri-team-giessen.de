<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="mood-image">
      <?= $page->images('mood') ?>
    </div>

    <?php snippet('sponsors') ?>

    <h2>Neuigkeiten aus dem Verein</h2>

    <?php snippet('articles', array(
      'articles' => $pages->find('aktuelles/neuigkeiten')->children()->visible()->limit(3)
    )) ?>

  </main>

<?php snippet('footer') ?>

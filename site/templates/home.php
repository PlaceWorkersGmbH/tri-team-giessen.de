<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="mood-image">
      <?= $page->image('mood.jpg') ?>
    </div>

    <?php snippet('sponsors') ?>

    <a href="<?php echo $site->find('aktuelles/neuigkeiten') ?>"><h2>Neuigkeiten aus dem Verein</h2></a>

    <?php snippet('articles', array(
      'articles' => $pages->find('aktuelles/neuigkeiten')->children()->listed()->flip()->limit(3)
    )) ?>

  </main>

<?php snippet('footer') ?>

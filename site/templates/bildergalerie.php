<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
      <?php if ($page->hasImages()): ?>
        <div class="gallery cards">
        <?php foreach ($page->images() as $image): ?>
          <a href="<?= $image->url() ?>" class="image">
            <?= $image ?>
          </a>
        <?php endforeach ?>
        </div>
      <?php endif ?>
    </div>

  </main>

<?php snippet('footer') ?>

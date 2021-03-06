<?php snippet('header') ?>

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div>
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
      <?php if ($page->hasImages()): ?>
        <?php foreach ($page->images() as $image): ?>
          <div class="image">
            <?php echo $image ?>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>

  </main>


<?php snippet('footer') ?>

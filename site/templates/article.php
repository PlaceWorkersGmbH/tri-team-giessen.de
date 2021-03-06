<?php snippet('header') ?>

  <main class="main" role="main">
    <div class="article-layout">
      <div class="text">
        <div>
          <?= $page->date()->toDate('d.m.Y') ?>
          <h2><?php echo $page->title()->html() ?></h2>
        </div>
        <div class="subtitle">
          <?php echo $page->subtitle()->kirbytext() ?>
        </div>
        <?php echo $page->text()->kirbytext() ?>
      </div>
      <?php if ($page->hasImages()): ?>
        <div class="images cards">
          <?php foreach ($page->images() as $image): ?>
            <a class="image" href="<?= $image->url() ?>" data-lightbox="gallery">
              <img class="magnet" src="<?= $image->url() ?>">
            </a>
          <?php endforeach ?>
        </div>
      </div>
    <?php endif ?>

  </main>

<?php snippet('footer') ?>

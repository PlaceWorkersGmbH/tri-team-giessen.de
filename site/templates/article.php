<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main" role="main">
    <div>
      <?php echo $page->date('d.m.Y') ?>
      <h1><?php echo $page->title()->html() ?></h1>
    </div>
    <div class="article-layout">
      <div class="text">
        <div class="subtitle">
          <?php echo $page->subtitle()->kirbytext(false) ?>
        </div>
        <?php echo $page->text()->kirbytext() ?>
      </div>
      <?php if ($page->hasImages()): ?>
        <div class="images cards">
          <?php foreach ($page->images() as $image): ?>
            <a class="image" href="<?= $image->url() ?>">
              <img class="" src="<?= $image->url() ?>">
            </a>
          <?php endforeach ?>
        </div>
      </div>
    <?php endif ?>

  </main>

<?php snippet('footer') ?>

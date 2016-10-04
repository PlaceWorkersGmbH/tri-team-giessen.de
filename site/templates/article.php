<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main two-col-layout" role="main">
    <div class="text">
      <?php echo $page->date('d.m.Y') ?>
      <h1><?php echo $page->title()->html() ?></h1>
      <div class="subtitle">
        <?php echo $page->subtitle()->kirbytext(false) ?>
      </div>
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

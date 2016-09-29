<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
    </div>
    <?php if ($page->hasBeader()): ?>
      <div class="baeder flex">
      <?php foreach ($page->beader()->toStructure() as $bad): ?>
        <?php if ($bad->link() != ''): ?>
          <a class="bad" href="<?= $bad->link() ?>">
        <?php else: ?>
          <div class="bad">
        <?php endif ?>
          <h4>
            <?php echo($bad->title()) ?>
          </h4>
          <div class="bad-content flex">
            <div class="image">
              <?php if ($bad->image() != ''): ?>
                <?= thumb($page->images()->find($bad->image()), array('height' => 400, 'width' => 600, 'crop' => true)) ?>
              <?php endif ?>
            </div>
            <div>
              <?php if ($bad->text()): ?>
                <?php echo($bad->text()->kirbytext()) ?>
              <?php endif ?>
            </div>
          </div>
        <?php if ($bad->link() != ''): ?>
          </a>
        <?php else: ?>
          </div>
        <?php endif ?>
      <?php endforeach ?>
      </div>
    <?php endif ?>

  </main>

<?php snippet('footer') ?>

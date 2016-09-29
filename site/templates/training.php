<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
      <?php if ($page->hasBeader()): ?>
        <?php foreach ($page->beader()->toStructure() as $bad): ?>
          <div class="bad">
            <?php if ($bad->link() != ''): ?>
              <a href="<?= $bad->link() ?>">
            <?php endif ?>
            <h4><?php echo($bad->title()) ?></h4>
            <?php if ($bad->link() != ''): ?>
              </a>
            <?php endif ?>
            <div class="flex">
              <div>
                <p>
                  <?php if ($bad->text()): ?>
                    <?php echo($bad->text()->kirbytext()) ?>
                  <?php endif ?>
                </p>
              </div>
              <div>
                <?php if ($bad->image() != ''): ?>
                  <?= thumb($page->images()->find($bad->image()), array('height' => 220, 'width' => 360, 'crop' => true)) ?>
                <?php endif ?>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>

  </main>

<?php snippet('footer') ?>

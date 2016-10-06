<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h1><?php echo $page->title()->html() ?></h1>
      <?php echo $page->text()->kirbytext() ?>
      <?php if ($page->hasImages()): ?>
        <?php foreach ($page->images() as $image): ?>
          <div class="image">
            <?php echo $image ?>
          </div>
        <?php endforeach ?>
      <?php endif ?>
      <?php if ($page->events()->toStructure()->count() > 0): ?>
        <div class="cards">
          <?php foreach ($page->events()->toStructure() as $event): ?>
            <?php if ($event->link() != ''): ?>
              <a class="card" href="<?= $event->link() ?>">
            <?php else: ?>
              <div class="">
            <?php endif ?>
              <h4>
                <?php echo($event->title()) ?>
              </h4>
              <div class="flex">
                <?php if ($event->image() != ''): ?>
                  <div class="image">
                    <?= thumb($page->images()->find($event->image()), array('height' => 400, 'width' => 600, 'crop' => true)) ?>
                  </div>
                <?php endif ?>
                <div>
                  <?php if ($event->text()): ?>
                    <?php echo($event->text()->kirbytext()) ?>
                  <?php endif ?>
                  <?php if ($event->link() != ''): ?>
                    Link: <?php $domain = parse_url($event->link()->uri(), PHP_URL_HOST); ?>
                    <?= $domain ?>
                  <?php endif ?>
                </div>
              </div>
            <?php if ($event->link() != ''): ?>
              </a>
            <?php else: ?>
              </div>
            <?php endif ?>
          <?php endforeach ?>
        </div>
      <?php else : ?>
        <p>Aktuell stehen keine Termine an.</p>
      <?php endif ?>
    </div>
  </main>

<?php snippet('footer') ?>

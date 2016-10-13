<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h2><?php echo $page->title()->html() ?></h2>
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
            <?php snippet("card", array(
              'item' => $event,
              'image' => $page->images()->find($event->image()),
              'text' => $event->text()->kirbytext(),
              'link' => $event->link(),
              'linktext' => "Link: ".parse_url($event->link(), PHP_URL_HOST)
            )); ?>
          <?php endforeach ?>
        </div>
      <?php else : ?>
        <p>Aktuell stehen keine Termine an.</p>
      <?php endif ?>
    </div>
  </main>

<?php snippet('footer') ?>

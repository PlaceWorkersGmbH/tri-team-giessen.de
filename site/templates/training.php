<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>


    <div class="text">
      <h2><?php echo $page->title()->html() ?></h2>
      <div class="flex">
        <div>
          <?php echo $page->text()->kirbytext() ?>
        </div>
        <div>
          <?php echo $page->text2()->kirbytext() ?>
        </div>
      </div>
      <?php if ($page->hasBeader()): ?>
        <h2>Hallen- und Freibäder in der Region</h2>
        <ul class="cards flex">
        <?php foreach ($page->beader()->toStructure() as $bad): ?>
          <?php snippet("card", array(
            'item' => $bad,
            'image' => $page->images()->find($bad->image()),
            'text' => $bad->text()->kirbytext(),
            'link' => $bad->link(),
            'linktext' => "Link: ".parse_url($bad->link(), PHP_URL_HOST)
          )); ?>
        <?php endforeach ?>
        </ul>
      <?php endif ?>
    </div>

  </main>

<?php snippet('footer') ?>

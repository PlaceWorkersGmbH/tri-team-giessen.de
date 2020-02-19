<?php snippet('header') ?>

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
      <?php if ($page->members()->isNotEmpty()): ?>
        <?php foreach ($page->members()->toStructure() as $member): ?>
          <div class="member">
            <?php if ($member->hasTitle()): ?>
              <h4><?php echo($member->title()) ?></h4>
            <?php endif ?>
            <div class="flex">
              <?php if ($member->image()->isNotEmpty()): ?>
                <div class="image"><?= $page->images()->find($member->image()) ?></div>
              <?php endif ?>
              <div>
                <p>
                  <?php if ($member->hasFistname()): ?>
                    <?php echo($member->firstname()) ?>
                  <?php endif ?>
                  <?php if ($member->hasLastname()): ?>
                    <?php echo($member->lastname()) ?>
                  <?php endif ?>
                  <?php if ($member->street() != ''): ?>
                    <br>
                    <?php echo($member->street()) ?>
                  <?php endif ?>
                  <?php if ($member->plz() != ''): ?>
                    <br>
                    <?php echo($member->plz()) ?>
                  <?php endif ?>
                  <?php if ($member->city() != ''): ?>
                    <?php echo($member->city()) ?>
                  <?php endif ?>
                  <?php if ($member->mobile() != ''): ?>
                    <br>
                    Telefon: <?php echo($member->mobile()) ?>
                  <?php endif ?>
                  <?php if ($member->email() != ''): ?>
                    <br>
                    E-Mail: <?php echo($member->email()) ?>
                  <?php endif ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>

  </main>

<?php snippet('footer') ?>

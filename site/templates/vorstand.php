<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div class="text">
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
      <?php if ($page->hasMembers()): ?>
        <?php foreach ($page->members()->toStructure() as $member): ?>
          <div class="member">
            <?php if ($member->hasTitle()): ?>
              <h4><?php echo($member->title()) ?></h4>
            <?php endif ?>
            <div class="flex">
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
                    Tel.: <?php echo($member->mobile()) ?>
                  <?php endif ?>
                  <?php if ($member->email() != ''): ?>
                    <br>
                    E-Mail: <?php echo($member->email()) ?>
                  <?php endif ?>
                </p>
              </div>
              <div>
                <?php if ($member->image() != ''): ?>
                  <?= $page->images()->find($member->image()) ?>
                <?php endif ?>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>

  </main>

<?php snippet('footer') ?>

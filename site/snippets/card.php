<li class="card">
  <?php if ($link && $link != ''): ?>
    <a class="image magnet" href="<?php echo $link ?>">
  <?php else: ?>
    <div class="image">
  <?php endif ?>
  <?php if ($image): ?>
    <?= thumb($image, array('width' => 700, 'height' => 420, 'crop' => true)) ?>
  <?php endif ?>
  <?php if ($link && $link != ''): ?>
    </a>
  <?php else: ?>
    </div>
  <?php endif ?>
  <h5><?= $item->date('d.m.Y') ?></h5>
  <h3>
    <?php if ($link && $link != ''): ?>
      <a href="<?php echo $link ?>">
    <?php endif ?>
    <?= $item->title()->html() ?>
    <?php if ($link && $link != ''): ?>
      </a>
    <?php endif ?>
  </h3>
  <?php echo $text ?>
  <?php if ($link && $link != ''): ?>
    <a href="<?= $link ?>"><?= $linktext ?></a>
  <?php endif ?>
</li>

<h2>Neuigkeiten</h2>

<ul class="teaser cf">
  <?php foreach($articles as $project): ?>
  <li>
    <a class="card" href="<?php echo $project->url() ?>">
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <?= thumb($image, array('width' => 700, 'height' => 420, 'crop' => true)) ?>
      <?php endif ?>
      <h5><?= $project->date('d.m.Y') ?></h5>
      <h3><?php echo $project->title()->html() ?></h3>
      <p><?php echo $project->text()->excerpt(200) ?> read&nbsp;more&nbsp;→</p>
    </a>
  </li>
  <?php endforeach ?>
</ul>

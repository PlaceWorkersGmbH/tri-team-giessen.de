<h2>Neuigkeiten</h2>

<ul class="teaser cf">
  <?php foreach($articles as $project): ?>
  <li>
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <a class="teaser-img" href="<?php echo $project->url() ?>">
        <?= thumb($image, array('width' => 700, 'height' => 420, 'crop' => true)) ?>
        </a>
      <?php endif ?>
      <h5><?= $project->date('d.m.Y') ?></h5>
      <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
      <p><?php echo $project->text()->excerpt(200) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
  </li>
  <?php endforeach ?>
</ul>

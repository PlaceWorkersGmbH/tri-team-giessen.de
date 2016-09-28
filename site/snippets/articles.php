<h2>Latest projects</h2>

<ul class="teaser cf">
  <?php foreach($site->pages('projects')->children()->visible()->limit(3) as $project): ?>
  <li>
    <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
      <a class="teaser-img" href="<?php echo $project->url() ?>">
        <?= thumb($image, array('width' => 500, 'height' => 300, 'crop' => true)) ?>
      </a>
    <?php endif ?>
    <h5><?= $project->date('d.m.Y') ?></h5>
    <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
    <p><?php echo $project->text()->excerpt(200) ?> <a href="<?php echo $project->url() ?>">read&nbsp;more&nbsp;→</a></p>
  </li>
  <?php endforeach ?>
</ul>

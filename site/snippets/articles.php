<ul class="teaser cf">
  <?php foreach($articles as $project): ?>
  <li>
      <a class="teaser-img" href="<?php echo $project->url() ?>">
      <?php if($image = $project->images()->sortBy('sort', 'asc')->first()): ?>
        <?= thumb($image, array('width' => 700, 'height' => 420, 'crop' => true)) ?>
      <?php else : ?>
        <?php $image = $page->image("img-placeholder.png"); ?>
        <?= thumb($image, array('width' => 700, 'height' => 420, 'crop' => true)) ?>
      <?php endif ?>
      </a>
      <h5><?= $project->date('d.m.Y') ?></h5>
      <h3><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h3>
      <p><?php echo $project->text()->excerpt(200) ?> <a href="<?php echo $project->url() ?>">weiterlesen&nbsp;→</a></p>
  </li>
  <?php endforeach ?>
</ul>

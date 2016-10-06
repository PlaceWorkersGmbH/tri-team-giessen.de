<ul class="teaser cf">
  <?php $paginated = $articles->paginate(9); ?>
  <?php foreach($paginated as $project): ?>
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


<?php if($paginated->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if($paginated->pagination()->hasNextPage()): ?>
  <a class="next" href="<?php echo $paginated->pagination()->nextPageURL() ?>">&lsaquo; ältere Artikel</a>
  <?php else : ?>
  <div class="next"></div>
  <?php endif ?>

  <?php if($paginated->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?php echo $paginated->pagination()->prevPageURL() ?>">neuere Artikel &rsaquo;</a>
  <?php else : ?>
  <div class="prev"></div>
  <?php endif ?>

</nav>
<?php endif ?>

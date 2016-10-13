<ul class="cards cf">
  <?php $paginated = $articles->paginate(12); ?>
  <?php foreach($paginated as $project): ?>
    <?php
      $image = $project->images()->sortBy('sort', 'asc')->first();
      if (!$image) {$image = $page->image("img-placeholder.png"); }
      snippet("card", array(
        'item' => $project,
        'image' => $image,
        'text' => $project->text()->excerpt(200),
        'link' => $project->url(),
        'linktext' => "weiterlesen"
      )); ?>
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

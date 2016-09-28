<?php if ($page->depth() == 1 && $page->hasVisibleChildren()): ?>
  <?php go($page->children()->first()); ?>
<?php endif ?>

<?php if ($page->depth() > 1) : ?>
  <?php $p = $page->parent(); ?>
<?php else: ?>
  <?php $p = $page; ?>
<?php endif ?>

<?php if($p->hasVisibleChildren()): ?>
<ul class="submenu">
  <?php foreach($p->children()->visible() as $p): ?>
  <li>
    <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
  </li>
  <?php endforeach ?>
</ul>
<?php endif ?>

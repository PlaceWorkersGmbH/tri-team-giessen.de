<?php if ($page->depth() == 1 && $page->hasListedChildren()): ?>
  <?php go($page->children()->first()); ?>
<?php endif ?>

<?php if ($page->depth() > 1) : ?>
  <?php $p = $page->parent(); ?>
<?php else: ?>
  <?php $p = $page; ?>
<?php endif ?>

<?php if($p->hasListedChildren()): ?>
<ul class="submenu">
  <?php foreach($p->children()->listed() as $p): ?>
  <li<?php e($p->isOpen(), ' class="active"') ?>>
    <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
  </li>
  <?php endforeach ?>
</ul>
<?php endif ?>

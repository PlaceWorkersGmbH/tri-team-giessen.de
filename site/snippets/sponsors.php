<?php $images = $pages->find('home/sponsors')->images() ?>

<?php if ($images): ?>
<div class="sponsors">
  <?php foreach ($images as $image): ?>
    <div class="sponsor"><a href="<?= $image->link() ?>"><img src="<?= $image->url() ?>" alt=""></a></div>
  <?php endforeach ?>
</div>
<?php endif ?>

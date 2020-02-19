<?php $images = $page->find('home/sponsors')->images() ?>

<?php if ($images): ?>
<div class="sponsors">
  <?php foreach ($images as $image): ?>
    <div class="sponsor"><a href="<?= $image->link() ?>" target="_blank"><img src="<?= $image->url() ?>" alt=""></a></div>
  <?php endforeach ?>
</div>
<?php endif ?>

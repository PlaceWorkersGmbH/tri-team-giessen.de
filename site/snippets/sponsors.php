<?php $images = $pages->find('home/sponsors')->images() ?>

<?php if ($images): ?>
<div class="sponsors">
  <?php foreach ($images as $image): ?>
    <div class="sponsor"><img src="<?= $image->url() ?>" alt=""></div>
  <?php endforeach ?>
</div>
<?php endif ?>

    <footer class="footer" role="contentinfo">

      <div class="copyright">
        <?php echo $site->copyright()->kirbytext() ?>
        Realisierung <a href="http://placeworkers.com/">PlaceWorkers GmbH</a>
      </div>
      
      <div class="colophon">
        <?php

        $items = $pages->find('impressum', 'kontakt');

        if($items and $items->isNotEmpty()):

        ?>
        <nav>
          <ul>
            <?php foreach($items as $item): ?>
            <li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></li>
            <?php endforeach ?>
          </ul>
        </nav>
        <?php endif ?>
      </div>

      <div class="facebook">
        <a href="https://www.facebook.com/tri.team.giessen" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg"><g transform="translate(0 0)"><g class="nc-icon-wrapper"><path fill-rule="evenodd" clip-rule="evenodd" d="M24 0C10.745 0 0 10.745 0 24s10.745 24 24 24 24-10.745 24-24S37.255 0 24 0zm2.502 25.054v13.058h-5.403V25.054H18.4v-4.5h2.7v-2.701c0-3.671 1.523-5.854 5.853-5.854h3.605v4.5h-2.253c-1.686 0-1.797.629-1.797 1.802l-.006 2.253h4.082l-.478 4.5h-3.604z" /></g></g></svg>
        </a>
      </div>

    </footer>

  </div>

  <script src="/assets/js/lightbox.js"></script>

</body>
</html>

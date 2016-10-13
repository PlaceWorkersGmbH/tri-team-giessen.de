<?php snippet('header') ?>
  <hr style="background: #6c888f; height: 2px; margin-bottom: 2em">

  <main class="main two-col-layout" role="main">

    <?php snippet('submenu') ?>

    <div>
      <h2><?php echo $page->title()->html() ?></h2>
      <?php echo $page->text()->kirbytext() ?>
      <?php if ($page->hasImages()): ?>
        <?php foreach ($page->images() as $image): ?>
          <div class="image">
            <?php echo $image ?>
          </div>
        <?php endforeach ?>
      <?php endif ?>
    </div>
    <div>

      <?php
        $form = uniform('contact-form',[
            'required' => [
                '_from' => 'email'
            ],
            'actions' => [
                [
                    '_action' => 'email',
                    'to'      => (string) $page->email(),
                    'sender'  => 'verein@tri-team-giessen.de',
                    'subject' => $site->title()->html() . ' - Nachricht vom Kontakt-Formular'
                ]
            ]
        ]);
      ?>
    <form action="<?php echo $page->url()?>#form" method="post">

      <div class="formbox">
        <label for="name" class="required">Name</label>
        <input<?php e($form->hasError('name'), ' class="erroneous"')?> type="text" name="name" id="name" value="<?php $form->echoValue('name') ?>" required/>
      </div>
      <div class="formbox">
        <label for="email" class="required">E-Mail</label>
        <input<?php e($form->hasError('_from'), ' class="erroneous"')?> type="email" name="_from" id="email" value="<?php $form->echoValue('_from') ?>" required/>
      </div>
      <div class="formbox">
        <label for="message">Nachricht</label>
        <textarea name="message" id="message"><?php $form->echoValue('message') ?></textarea>
      </div>
      <div class="formbox uniform__potty">
        <label for="website">Bitte leer lassen</label>
        <input type="text" name="website" id="website" />
      </div>
      <?php if ($form->hasMessage()): ?>
        <div class="formbox">
          <a name="form"></a>
          <div class="message <?php e($form->successful(), 'success' , 'error')?>">
              <?php $form->echoMessage() ?>
          </div>
        </div>
      <?php endif; ?>
      <?php if (!$form->successful()): ?>
        <div class="formbox">
          <button class="magnet" type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), ' disabled')?>>Absenden</button>
        </div>
      <?php endif ?>
    </form>

    </div>

  </main>


<?php snippet('footer') ?>

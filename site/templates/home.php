<?php snippet('header') ?>

<main>
  <header class="intro">
    <h1><?= $page->headline() ?></h1>
  </header>
  <p><?= $page->text()->kt() ?></p>
  <?php # /site/templates/yourtemplate.php
  foreach($page->blocks()->toBuilderBlocks() as $block):
    snippet('blocks/' . $block->_key(), array('data' => $block));
  endforeach;
  ?>

</main>

<?php snippet('footer') ?>

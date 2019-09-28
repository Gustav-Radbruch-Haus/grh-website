<?php snippet('header') ?>

<main>
  <header class="intro">
    <?= snippet('cover', ['data' => $page]) ?>
    <h1><?= $page->title() ?></h1>
  </header>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
</main>

<?php snippet('footer') ?>

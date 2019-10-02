<?php snippet('header') ?>

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>
  <div class="text">
    <?= $page->text()->kt() ?>
  </div>
  <div class="cards row">
    <?php foreach ($page->children()->listed() as $group): ?>
      <?= snippet('group/card', ['data' => $group]) ?>
    <?php endforeach ?>
  </div>
</main>

<?php snippet('footer') ?>

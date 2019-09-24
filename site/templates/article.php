<?php snippet('header') ?>

<main>
  <article class="article">
    <header class="article-header intro">
      <h1><?= $page->title() ?></h1>
      <time class="article-date"><?= $page->date()->toDate('d F Y') ?></time>
      <?php if ($page->tags()->isNotEmpty()) : ?>
      <p class="article-tags tags"><?= $page->tags() ?></p>
      <?php endif ?>
    </header>

    <div class="article-text text">
      <?= $page->text()->kt() ?>
    </div>
  </article>
</main>

<?php snippet('footer') ?>

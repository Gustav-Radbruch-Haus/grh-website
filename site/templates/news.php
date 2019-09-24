<?php snippet('header') ?>

<main>
  <header class="intro">
    <h1><?= $page->title() ?></h1>
  </header>

  <div class="news">
    <?php foreach ($page->children()->listed()->sortBy('date', 'desc') as $article): ?>
    <article class="article">
      <header class="article-header">
        <a href="<?= $article->url() ?>">
          <h2><?= $article->title() ?></h2>
          <time><?= $article->date()->toDate('d F Y') ?></time>
        </a>
      </header>
    </article>
    <?php endforeach ?>
  </div>

</main>

<?php snippet('footer') ?>

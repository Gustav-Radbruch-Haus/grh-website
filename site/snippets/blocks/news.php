<section class="news">
    <h2><?= $data->title() ?></h2>
    <div class="grid">
    <?php foreach (page('news')->children()->listed()->sortBy('date', 'desc') as $article): ?>
    <article class="article">
      <header class="article-header">
        <a href="<?= $article->url() ?>">
          <h3><?= $article->title() ?></h3>
          <time><?= $article->date()->toDate('d F Y') ?></time>
        </a>
      </header>
    </article>
    <?php endforeach ?>
    </div>
</section>
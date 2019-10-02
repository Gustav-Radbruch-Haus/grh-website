<section class="card cover column large-4 small-6">
  <a href="<?= $data->url() ?>">
    <div>
      <?= snippet('cover', ['data' => $data]) ?>
      <div class="card-content">
        <h2><?= $data->title() ?></h2>
        <div class="label"><?= $data->typeName() ?></div>
      </div>
    </div>
  </a>
</section>
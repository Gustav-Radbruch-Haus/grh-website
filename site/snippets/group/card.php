<section>
  <a href="<?= $data->url() ?>">
    <div>
      <?= snippet('cover', ['data' => $data]) ?>
      <h2><?= $data->title() ?></h2>
      <div class="label"><?= $data->typeName() ?></div>
    </div>
  </a>
</section>
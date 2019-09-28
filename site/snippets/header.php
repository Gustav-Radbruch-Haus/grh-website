<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/screen.css?v='.time(), '@auto']) ?>

</head>
<body>

  <div class="container">
    <div class="page">
      <header class="header">
        <div class="content">
          <a class="logo" href="<?= $site->url() ?>">
            <?= asset('assets/images/logo.svg'); ?>
            <span class="title"><?= $site->title() ?></span>
          </a>
          <?= snippet('menu') ?>
        </div>
      </header>


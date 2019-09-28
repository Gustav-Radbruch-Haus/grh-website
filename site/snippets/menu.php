<nav class="menu">
  <ul>
    <?php foreach ($site->pages()->listed() as $item): ?>
    <li>
      <?= $item->title()->link() ?>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
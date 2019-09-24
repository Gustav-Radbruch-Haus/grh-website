</div>

<footer class="footer">
  <a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a>
  <nav> 
  <?php foreach ($site->footermenu()->toStructure() as $menuitem): ?>
      <?php if($menuitem->selectpagetype() == 'internal'): ?>
        <a href="<?= $menuitem->internalpage()->toPage()->url() ?>"><?= $menuitem->internalpage()->toPage()->title() ?></a>
      <?php else: ?>
      <a href="<?= $menuitem->externalurl() ?>" target="_blank"><?= $menuitem->externalpagetitle() ?></a>
      <?php endif ?>
    <?php endforeach ?>
    <?php if($user = $kirby->user()): ?>
      <a href="<?= url('logout') ?>">Logout</a>
    <?php endif ?>
  </nav>
</footer>

</body>
</html>

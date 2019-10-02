</div>

<footer class="footer">
  <div class="content">
    <span class="copyright"><a href="<?= url() ?>">&copy; <?= date('Y') ?> / <?= $site->title() ?></a></span>
    <nav> 
      <ul>
        <?php foreach ($site->footermenu()->toStructure() as $menuitem): ?>
        <li>
        <?php if($menuitem->selectpagetype() == 'internal'): ?>
          <a href="<?= $menuitem->internalpage()->toPage()->url() ?>"><?= $menuitem->internalpage()->toPage()->title() ?></a>
        <?php else: ?>
          <a href="<?= $menuitem->externalurl() ?>" target="_blank"><?= $menuitem->externalpagetitle() ?></a>
        <?php endif ?>
        </li>
        <?php endforeach ?>
        <?php if($user = $kirby->user()): ?>
        <li>
          <a href="<?= url('logout') ?>">Logout</a>
        </li>
        <?php endif ?>
      </ul>
    </nav>
  </div>
</footer>
</div>
</body>
</html>

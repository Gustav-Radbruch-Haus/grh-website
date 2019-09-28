<nav class="mainNavigation">
    <ul>
        <?php foreach ($site->pages()->listed() as $page): ?>
        <li>
            <a href="<?= $page->url() ?>">
                <?= $page->title() ?>
            </a>
        </li>
        <?php endforeach ?>
    </ul>
</nav>
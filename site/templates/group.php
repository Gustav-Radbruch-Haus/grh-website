<?php snippet('header')?>
<?php if ($page->cover()->isNotEmpty()): ?>
<div class="cover">
    <?=snippet('cover', ['data' => $page])?>
</div>
<?php endif?>
<main>
    <header class="intro">
        <h1><?=$page->title()?></h1>
    </header>
    <div class="text">
        <?=$page->text()->kt()?>
    </div>
    <section class="events">
        <h2>Next Events</h2>
        <?=snippet('events', ['forGroup' => $page->uid()])?>
    </section>
</main>

<?php snippet('footer')?>
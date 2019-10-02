<?php snippet('header')?>

<main>
    <header class="intro">
        <h1><?=$page->title()?></h1>
    </header>
    <div class="text">
        <?=$page->text()->kt()?>
    </div>
    <section class="events">
        <?=snippet('events')?>
    </section>
</main>

<?php snippet('footer')?>
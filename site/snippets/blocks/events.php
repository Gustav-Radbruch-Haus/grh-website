<section class="events">
    <h2><?=$data->title()?></h2>
    <?=snippet('events', ['data' => $data, 'limitBy' => $data->limitBy()->value()])?>
</section>
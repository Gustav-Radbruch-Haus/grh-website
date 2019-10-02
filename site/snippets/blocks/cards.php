<section class="services">
    <h2><?=$data->title()?></h2>
    <?=snippet('services', ['data' => $data->cards()->toStructure()])?>
</section>
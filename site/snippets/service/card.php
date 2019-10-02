<section class="card column large-3 small-4">
    <a href="<?=$data->url()?>" target="_blank">
        <div class="card-body" style="background: <?=$background?>; background: linear-gradient(325deg, <?=$background?> 0%, <?=$border?>);">
            <?=snippet('cover', ['data' => $data])?>
            <div class="card-content">
                <span style="color: <?=$text?>"><?=$data->title()?></span>
            </div>
        </div>
    </a>
</section>
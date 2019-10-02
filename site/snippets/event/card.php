<article class="card event">
    <a href="<?=$event['url']?>">
        <div class="card-body">
            <div class="card-content">
                <h2><?=$event['title']->title()?></h2>
                <h3>@ <?=$event['location']?></h3>
                <time><?=$event['from']->toDate('d.m H:i')?></time>
                <?php if ($event['to']->isNotEmpty()): ?> -
                <time><?=$event['to']->toDate('d.m H:i')?></time>
                <?php endif?>
                <a class="ical" href="<?=page('ical')->url()?>/id:<?=$event['id']?>">🗓</a>
            </div>
        </div>
    </a>
</article>

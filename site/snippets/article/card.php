<article class="card article">
    <a href="<?=$data->url()?>">
        <div class="card-body">
            <div class="card-content">
                <h2><?=$data->title()?></h2>
                <time><?=$data->date()->toDate('d F Y')?></time>
            </div>
        </div>
    </a>
</article>
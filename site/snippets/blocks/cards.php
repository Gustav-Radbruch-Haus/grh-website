<section class="cards">
    <h2><?= $data->title() ?></h2>
    <div class="cards-container">
        <?php foreach($data->cards()->toStructure() as $card): ?>
            <?php 
            $palette    = $card->color()->yaml();
            $background = $palette['background']; #(string)
            $border     = $palette['border']; #(string)
            $text       = $palette['text']
            ?>
            <?php if($card->usergroups()->isEmpty() || in_array($kirby->auth()->currentUserFromSession()->role()->id(), $card->usergroups()->split())): ?> 
            <div class="card-container">
                <a href="<?= $card->url() ?>" target="_blank">
                    <div class="card" style="background: <?= $background ?>;
background: linear-gradient(325deg, <?= $background ?> 0%, <?= $border ?>);">
                        <span style="color: <?= $text ?>"><?= $card->title() ?></span>
                    </div>
                </a>
            </div>
            <?php endif ?>
        <?php endforeach ?>
    </div>
</section>

    <div class="cards row services">
        <?php foreach ($data as $card): ?>
        <?php
$palette = $card->color()->yaml();
$background = $palette['background']; #(string)
$border = $palette['border']; #(string)
$text = $palette['text']
?>
        <?php if ($card->usergroups()->isEmpty() || in_array($kirby->auth()->currentUserFromSession()->role()->id(), $card->usergroups()->split())): ?>
        <?=snippet('service/card', ['data' => $card, 'background' => $background, 'border' => $border, 'text' => $text])?>
        <?php endif?>
        <?php endforeach?>
    </div>
</section>
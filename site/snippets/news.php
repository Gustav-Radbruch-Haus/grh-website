<?php foreach (page('news')->children()->listed()->sortBy('date', 'desc') as $article): ?>
<?=snippet('article/card', ['data' => $article])?>
<?php endforeach?>
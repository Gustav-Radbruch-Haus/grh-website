<?php if($image = $data->cover()->toFile()): ?>
  <img src="<?= $image->url() ?>" alt="">
<?php endif ?>
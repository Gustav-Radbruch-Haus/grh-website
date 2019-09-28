<!doctype html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title() ?> | <?= $page->title() ?></title>

  <?= css(['assets/css/screen.css?v='.time(), '@auto']) ?>

</head>
<body>
<div class="cover">
  <?= snippet('cover', ['data' => $page]) ?>
</div>
<main>
  <div>
  <div class="logo">
  <?= asset('assets/images/logo.svg'); ?>
</div>
<form method="post" action="<?= $page->url() ?>" class="form">
  <?php if($error): ?>
  <div class="error-text">
    <?= $page->alert()->html() ?>
  </div>
  <?php endif ?>
  <div>
   <select id="role">
      <option value="tenant">Tenant</option>
      <option value="member">SHC member</option>
    </select>
  </div>
  <div>
    <input type="email" id="email" name="email" value="<?= $page->tenantuser()->toUser()->email() ?>" placeholder="<?= $page->username()->html() ?>" class="hidden email">
  </div>
  <div>
    <input type="password" id="password" name="password" value="<?= esc(get('password')) ?>" placeholder="<?= $page->password()->html() ?>">
  </div>
  <div>
    <input type="submit" name="login" value="<?= $page->button()->html() ?>">
  </div>
  <?php echo csrf_field() ?>
</form>
</div>
</main>
<script>
let select = document.getElementById("role");
let emailfield = document.getElementById("email");
let passwordfield = document.getElementById("password");

select.onchange = function () {
  if (select.value == "member") {
    emailfield.classList.remove("hidden")
    emailfield.value = ""
    passwordfield.value = ""
    
  }
  else {
    emailfield.classList.add("hidden")
    emailfield.value = "<?= $page->tenantuser()->toUser()->email() ?>"
    passwordfield.value = ""
  }
}

</script>

<?php snippet('footer') ?>
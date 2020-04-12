
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="text-center" data-gr-c-s-loaded="true">


<form method="post" class="form-signin" style="width: 100%; max-width: 330px; padding: 15px;margin: auto;"action="<?= $page->url() ?>">

  <h1 class ="h3 mb-3 font-weight-normal"><?= $page->title()->html() ?></h1>
  <?php if($error): ?>
    <div class="alert"><?= $page->alert()->html() ?></div>
  <?php endif ?>
  <div>
    <label for="email"><?= $page->username()->html() ?></label>
    <input type="email" id="email" class="form-control" name="email" value="<?= esc(get('email')) ?>">
  </div>
  <div>
    <label for="password"><?= $page->password()->html() ?></label>
    <input type="password" id="password" class="form-control" name="password" value="<?= esc(get('password')) ?>">
  </div>
  <div style="padding: 15px;">
    <input type="submit" class="btn btn-lg btn-primary btn-block" name="login" value="<?= $page->button()->html() ?>">
  </div>
</form>

</div>
<?php if (!$kirby->user()):
 	go('/login')
 	?>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $site->title() ?></title>
	<?= css('assets/css/index.css') ?>
</head>
<body>



<header>
	<a class="logo" href="<?= $site->url() ?>">
		<?php if($image = $site->image('bemo-logo.png')): ?>
			<img src="<?= $image->url() ?>" alt="Site logo">
		<?php endif ?> 
	 </a>

	<nav class="menu">
		<ul>
			<?php foreach ($site->children()->listed() as $subpage): ?>
				<li><a href="<?= $subpage->url() ?>"> <?= $subpage->title()?> </a></li>
			<?php endforeach ?>

			<?php if ($user = $kirby->user()->isAdmin()): ?>
  			<li>
      			<a href="<?= $site->url() ?>/panel">Panel</a>
    		</li>
    		<?php endif ?>

			<?php if ($user = $kirby->user()): ?>
    		<li>
      			<a href="<?= url('logout') ?>">Logout</a>
    		</li>
  			<?php endif ?>
			
		</ul>
	</nav>

</header>
<!-- <h1><?= $page->title() ?></h1> -->
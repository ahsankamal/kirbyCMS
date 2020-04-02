<?php if (!$kirby->user()):
 	go('/login')
 	?>
<?php endif ?>

<!DOCTYPE html>
<html lang="en">
<head>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?= $site->google_analytics_tid() ?>"  ></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', '<?= $site->google_analytics_tid() ?>');
	</script>


	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $site->title() ?></title>
	<?= css('assets/css/index.css') ?>
</head>
<body>



<header class="navbar navbar-default navbar-inverse navbar-fixed-top mobileb desktopScreenNavbar" role="navigation">
	<a class="logo" href="<?= $site->url() ?>">
		<?php if($image = $site->image('bemo-logo.png')): ?>
			<img src="<?= $image->url() ?>" alt="Site logo">
		<?php endif ?> 
	 </a>

	<nav class="menu" id="mwrap">
		<ul >
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


<?php snippet('header') ?>


<meta name="title" content="<?= $page->meta_title() ?>">
<meta name="description" content="<?= $page->meta_description() ?>">

<?php if ($page->noindex()->isTrue()): ?>
	<meta name="no-index" content="noindex,nofollow">
<?php endif ?>


<div id="feature">
	<?php if($image = $page->image('cda-interview-guide.jpg')): ?>
		<img id="featureImg" src="<?= $image->url() ?>" alt="Feature Image">
	<?php endif ?>
	<div id="featureTxt"><?= $page->banner_text() ?></div>
</div>



<div style="padding: 3.5%;">
<span style="font:17px Arial, Verdana, Helvetica, sans-serif; font-weight:bold; color:#000066;font-weight:bold;">  
<?= $page->heading() ?>
</span><br><br>

<?php 
// using the `toStructure()` method, we create a structure collection
$items = $page->paragraph_structure()->toStructure();


// we can then loop through the entries and render the individual fields
foreach ($items as $item): ?>
  <h3><?= $item->paragraph_title()->html() ?></h3>
	
		<?php if($item->paragraph_body()->isNotEmpty() ): ?>
    		<span class="paragraph" ><?=$item->paragraph_body()->kt()?></a></span><br>
		<?php endif ?>


<?php endforeach ?>
</div>



<?php snippet('footer') ?>



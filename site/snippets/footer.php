
</body>

<div id="footer">
<?php 
$items = $site->footer_menu()->toStructure();
foreach ($items as $item): ?>


		
		<?php if($item->item_link()->isNotEmpty() ): ?>
    		<li><span style="color:red"><a href="<?=$item->item_link()?>"><?=$item->item_text()->html()?></a></span></li><br>	
		<?php else: ?>
			<li><span><?=$item->item_text()->html()?></span></li><br>
		<?php endif ?>
<?php endforeach ?>

		<li>
			<address><a href="mailto:<?=$site->contact_email()?>">Contact Us (Email)</address>
		</li>

		<li>
			<span><a class="fa fa-facebook" href="<?=$site->facebook_icon()?>"></a></span>
		</li>
		<li>
			<span><a class="fa fa-twitter" href="<?=$site->twitter_icon()?>"></a></span>
		</li>

</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</html>

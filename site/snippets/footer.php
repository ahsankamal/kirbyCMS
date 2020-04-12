
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>




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

</body>



</html>

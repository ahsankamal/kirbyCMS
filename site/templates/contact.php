<?php snippet('header') ?>

<meta name="title" content="<?= $page->meta_title() ?>">
<meta name="description" content="<?= $page->meta_description() ?>">

<?php if ($page->noindex()->isTrue()): ?>
	<meta name="no-index" content="noindex,nofollow">
<?php endif ?>

<div id="feature">
	<?php if($image = $page->image('feature_image.png')): ?>
		<img id="featureImg" src="<?= $image->url() ?>" alt="Feature Image">
	<?php endif ?>
</div>

<span class="contact_info" ><?=$page->contact_info()->kt()?></span>
<span class="contact_email">Email: <?=$page->contact_email()?></span><br><br>


 

<main class="main" role="main">	

	<form action="<?php echo $page->url() ?>" method="POST">
		<div class="form-input-field">
			<label for="name">Name: <abbr title="required">*</abbr></label><br>
	   		<input name="name" type="text" value="<?php echo $form->old('name'); ?>">
	   </div>
	   <div class="form-input-field">
			<label for="email">Email Address: <abbr title="required">*</abbr></label><br>
	   		<input name="email" type="email" value="<?php echo $form->old('email'); ?>">
	   </div>
	   <div class="form-input-field">
	   		<label for="text">HOW CAN WE HELP YOU? <abbr title="required">*</abbr></label><br>
	   		<textarea name="message"><?php echo $form->old('message'); ?></textarea>
	   </div>
	   <div >
	   		<input type="hidden" name="contact_email" value="<?=$page->contact_email()?>">
	   </div>

	   	<?php echo csrf_field(); ?>
	   	<?php echo honeypot_field(); ?>
	   	<input type="submit" value="Submit">
	</form>

<?php if ($form->success()): ?>
   Success!
<?php else: ?>

<?php if ($form->hasMessage()): ?>
    <div class="message <?php e($form->successful(), 'success' , 'error')?>">
        <?php $form->echoMessage() ?>
    </div>
<?php endif; ?>


   <?php snippet('uniform/errors', ['form' => $form]); ?>
<?php endif; ?>
</main>

<span class="bottom_notes" ><?=$page->notes()->kt()?></a></span><br>

<?php snippet('footer') ?>
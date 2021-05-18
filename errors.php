<?php $errors = array(); ?>

<?php if (count($errors) > 0): ?>
	<div class="errer">
		<?php foreach ($errors as $errer) :?>
			<p><?php echo $error ?> </p>
		<?php endforeach?>
	</div>

<?php endif?>
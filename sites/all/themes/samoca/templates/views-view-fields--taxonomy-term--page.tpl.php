<?php foreach ($fields as $id => $field): ?>
	<?php if ($field->class != 'field-pris'): ?>
	<div class="<?php print $field->class; ?>">
    
    <?php print $field->content; ?>

	</div>
	<?php else: ?>
	<div class="<?php print $field->class; ?>">
    
    <?php print $field->content; ?>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<?php endif; ?>
<?php endforeach; ?>

	<div class="clear"></div>
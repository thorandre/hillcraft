<ul class="filListe">
<?php $i = 0; ?>
<?php foreach ($rows as $id => $row): ?>
	<?php if($i != 4): ?>
  <li <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
    <div class="clear"></div>
  </li>
  <?php $i++; ?>
  <?php else: ?>	
  <li <?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
    <div class="clear"></div>
  </li>
  <?php $i = 0; ?>	
  <?php endif; ?>
<?php endforeach; ?>
</ul>
	<div class="clear"></div>
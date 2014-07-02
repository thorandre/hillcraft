
<ul class="produktListe">

<?php foreach ($rows as $id => $row): ?>
	<?php
		
	
	?>
  <li id="linr<?php print $id + 1; ?>"<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
    
    <div class="clear"></div>
  </li>
  
<?php endforeach; ?>

</ul>
	<div class="clear"></div>
	

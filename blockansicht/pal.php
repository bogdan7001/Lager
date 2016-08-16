<div class="dropdown">
<a id="<?php echo $paletteID ?>" class="palLink dropdown-toggle" data-id="<?php echo $paletteID;?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
<?php
	$result = mysql_query(" SELECT * FROM $paletteID"); // download all from $palletteID tabele 
	while($row = mysql_fetch_array($result))// in array auslesen		
{ ?>
	<span class="overflow-hidden" id="<?php echo $row['id'] ?>"><b><?php echo $row['id'] ?></b></span>		
<?php } ?>
</a>

<ul class="<?php echo $paletteID;?> dropdown-menu min550"></ul></div>
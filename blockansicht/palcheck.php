<?php
	$id = $_GET['id'];
	include_once("db.php");//Connecting to Datenbase	
	$result = mysql_query(" SELECT * FROM $id"); // download all from $palletteID tabele 
	while($row = mysql_fetch_array($result))// in array auslesen		
{ ?>
	<span class="overflow-hidden" id="<?php echo $row['id'] ?>"><b><?php echo $row['id'] ?></b></span>		
<?php } mysql_close();?>

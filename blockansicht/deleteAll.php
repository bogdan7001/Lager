<?php 
	include_once("db.php");//Connecting to Datenbase	
	$paletteUrl = $_GET['palette'];//Palette nummer aus Url		
	$result = mysql_query("DELETE FROM $paletteUrl");	 //удаление из базы данных
	mysql_close();	
?>

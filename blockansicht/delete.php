<?php 
	include_once("db.php");//Connecting to Datenbase		
	$urlid = $_GET['id'];//ID aus Url
	$paletteUrl = $_GET['palette'];//Palette nummer aus Url		
	$result = mysql_query("DELETE FROM $paletteUrl WHERE id='$urlid'");	 //удаление из базы данных			
	mysql_close();			
?>



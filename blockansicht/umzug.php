<?php
	$palette1 = $_GET['firstid'];//Palette nummer aus Url
	$palette2 = $_GET['secondid'];//Palette nummer aus Url
	include_once("db.php");//Connecting to Datenbase
	$result = mysql_query("DELETE  FROM $palette2 ");	// удалить из базы палету 2
	$result = mysql_query("INSERT INTO $palette2  SELECT *  FROM $palette1 ");	// запись в базу 
	$result = mysql_query("DELETE  FROM $palette1 ");	// удалить из базы палету 1
	mysql_close();	
 ?> 


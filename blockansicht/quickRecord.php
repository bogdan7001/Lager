<?php 
$paletteUrl = $_GET['palette'];//Palette TabelleNummer aus Url (muss immer obern sein)
include_once("db.php");//Connecting to Datenbase				
	$id = strip_tags(trim($_POST['id']));// сохранение данных с формы в переменные onSubmit			
	$result = mysql_query("INSERT INTO $paletteUrl(id)VALUES('$id')");	// запрос в базу и запись	
	mysql_close();		
?>



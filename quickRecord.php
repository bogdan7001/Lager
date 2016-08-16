<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container"><br><br><br><br>
<?php 
$paletteUrl = $_GET['palette'];//Palette TabelleNummer aus Url (muss immer obern sein)
include_once("db.php");//Connecting to Datenbase				
	$id = strip_tags(trim($_POST['id']));// сохранение данных с формы в переменные onSubmit			
	$result = mysql_query("INSERT INTO $paletteUrl(id)VALUES('$id')");	// запрос в базу и запись	
	mysql_close();	
	echo "<div class='alert alert-success text-center'><h3><br><br><span class='glyphicon glyphicon-ok '></span> Modell <b>$id</b> $paletteUrl  ist Hinzugef&uuml;gt<br><br><br></h3></div>";
	echo '<script>setTimeout(function(){window.top.location="index.php"},0);</script>';
?>
</div>


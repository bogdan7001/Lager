<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container"><br><br><br><br>
<?php
	$palette1 = $_GET['firstid'];//Palette nummer aus Url
	$palette2 = $_GET['secondid'];//Palette nummer aus Url
	include_once("db.php");//Connecting to Datenbase
	$result = mysql_query("DELETE  FROM $palette2 ");	// удалить из базы палету 2
	$result = mysql_query("INSERT INTO $palette2  SELECT *  FROM $palette1 ");	// запись в базу 
	$result = mysql_query("DELETE  FROM $palette1 ");	// удалить из базы палету 1
	mysql_close();			
	echo "<div class='alert alert-info text-center'><h2><br>Palette  <span class='label label-default'>$palette1</span>  in <span class='label label-success'>$palette2</span> ist verschoben<br><br></h2></div>";
	echo '<script>setTimeout(function(){window.top.location="index.php"},500);</script>';		
 ?> 
 </div>

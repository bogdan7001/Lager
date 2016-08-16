<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container"><br><br><br><br>
<?php
	$firstid01 = $_GET['firstid01'];//Palette nummer aus Url
	$firstid02 = $_GET['firstid02'];//Palette nummer aus Url
	$secondid01 = $_GET['secondid01'];//Palette nummer aus Url
	$secondid02 = $_GET['secondid02'];//Palette nummer aus Url
	include_once("db.php");//Connecting to Datenbase
	$result = mysql_query("DELETE  FROM a$secondid01 ");	// удалить из базы палету 2
	$result = mysql_query("DELETE  FROM a$secondid02 ");	// удалить из базы палету 2
	$result = mysql_query("INSERT INTO a$secondid01  SELECT *  FROM a$firstid01 ");	// запись в базу 
	$result = mysql_query("INSERT INTO a$secondid02  SELECT *  FROM a$firstid02 ");	// запись в базу
	$result = mysql_query("DELETE  FROM a$firstid01 ");	// удалить из базы палету 1
	$result = mysql_query("DELETE  FROM a$firstid02 ");	// удалить из базы палету 1
	mysql_close();			
	echo "<div class='alert alert-info text-center'><h2><br>Palette  <span class='label label-default'>a$firstid01</span> & <span class='label label-default'>a$firstid02</span>  in <span class='label label-success'>a$secondid01</span> & <span class='label label-success'>a$secondid02</span> ist verschoben<br><br></h2></div>";
	echo '<script>setTimeout(function(){window.top.location="index.php"},500);</script>';		
 ?> 
 </div>
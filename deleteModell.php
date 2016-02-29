<?php include_once("header.php"); //Header ?>
	
	<div class="container text-center">
	<p>&nbsp;</p>
	
	
	<?php 
		include_once("db.php");//Connecting to Datenbase
		
		$urlid = $_GET['id'];//ID aus Url
		
		$result = mysql_query("DELETE FROM modell WHERE modell='$urlid'");	 //удаление из базы данных			
			mysql_close();
			echo "<h4  style='color:green;'>Model ist erfolgreich gelöscht  <span class='glyphicon glyphicon-ok'></span><h4>";		
	
	?>
	
	
	
	<p>&nbsp;</p>
	<a href="http://lager.local/modell.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>Zurück</a>
	
	
	
	
	</div>
<?php include_once("footer.php"); //Footer ?>
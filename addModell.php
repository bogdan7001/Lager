<?php include_once("header.php"); //Header ?>
	
	<div class="container">
	<p>&nbsp;</p>
		<form method="post" action="addModell.php" class="form-inline">
		<div class="form-group">
			<label>Modell:</label><br><input class="form-control"  type="text" name="modell" required>	
			<button class="btn btn-success"  value="add" type="submit" name="add" >	<span class="glyphicon glyphicon-plus"></span> Hinzufügen</button>	
		</div>
		</form>

	
	<?php 
		include_once("db.php");//Connecting to Datenbase
		
		if(isset($_POST['add']))// если нажали кнопку Submit толко тогда
		{
			$modell = strip_tags(trim($_POST['modell']));// сохранение данных с формы в переменные onSubmit
			
			$result = mysql_query("INSERT INTO modell(modell)VALUES('$modell')");	// запрос в базу и запись
			
			mysql_close();

			echo "<p style='color:green;'><span class='glyphicon glyphicon-ok'> </span> Modell <b>$modell</b> ist Hinzugefügt</p>";
		
			
		}	
		
	?>
	<p>&nbsp;</p>
	<a href="http://lager.local/modell.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Zurück zur Modellen </a>	


	</div>
<?php include_once("footer.php"); //Footer ?>



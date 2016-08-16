<?php include_once("header.php"); //Header ?>
<?php 
	if(isset($_POST['rowid'])) {
	echo "<form method='post' action='addModell.php' class='form-inline'>
			<label>Modell:</label><br><input autofocus class='focus form-control' type=text' name='modell' required style='width:100%;'><div>&nbsp;</div>	
			<button class='btn btn-success width100' value='add' type='submit' name='add'>	<span class='glyphicon glyphicon-plus'></span> Hinzuf&uuml;gen</button>	
		</form>";
	};

	include_once("../db.php");//Connecting to Datenbase		
	if(isset($_POST['add']))// если нажали кнопку Submit только тогда
	{
		$modell = strip_tags(trim($_POST['modell']));// сохранение данных с формы в переменные onSubmit			
		$result = mysql_query("INSERT INTO modell(id)VALUES('$modell')");	// запрос в базу и запись			
					
		echo "<br><div class='container'><h3 class='alert alert-success text-center'><br><br>Modell <span class='label label-default'>$modell</span> ist Hinzugef&uuml;gt <span class='glyphicon glyphicon-ok'> </span><br><br><br></h3></div>";
		echo '<script>setTimeout(function(){window.top.location="modell.php"},1000);</script>';			
	}
mysql_close();	
?>

<?php include_once("footer.php"); //Footer ?>



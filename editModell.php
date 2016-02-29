<?php include_once("header.php"); //Header ?>
	
	<div class="container">
	<p>&nbsp;</p>
	
	
	<?php 
		include_once("db.php");//Connecting to Datenbase
		
		$urlid = $_GET['id'];//ID aus Url
		
		$result = mysql_query("SELECT modell FROM modell WHERE modell='$urlid'");	 //запрос в базу о конкретной моделе	
		
		
		$row = mysql_fetch_assoc($result);//поместить выбранные данные в $row
		
		if(isset($_POST['save']))
		{
			$id = strip_tags(trim($_POST['modell']));// сохранение данных с формы в переменную onSubmit
			
			mysql_query("
						UPDATE modell SET modell='$modell' WHERE id='$urlid' 
			");			
			mysql_close();
		}
	
	?>
	

	
		<form method="post" action="editModell.php?id=<?php echo $urlid; ?>" class="form-inline"> 
		<div class="form-group">
			Modell name ändern:<br><input type="text" name="id" value="<?php echo $row['modell'];?>" class="form-control"><!--in Value daten aus $row-->
	
			<button class="btn btn-success"  value="add" type="submit" name="save" ><span class="glyphicon glyphicon-ok"></span> Speichern</button>		
			</div>
		</form>
	
	
	
	<p>&nbsp;</p>
	<a href="http://lager.local/modell.php" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>Zurück</a>
	
	
	
	
	</div>
<?php include_once("footer.php"); //Footer ?>
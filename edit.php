<?php include_once("header.php"); //Header ?>
	
	<div class="container">
	<p>&nbsp;</p>
	
	
	<?php 
		include_once("db.php");//Connecting to Datenbase
		
		$urlid = $_GET['id'];//ID aus Url
		$paletteUrl = $_GET['palette'];//Palette nummer aus Url
		
		$result = mysql_query("SELECT id, cnt, pcs FROM $paletteUrl WHERE id='$urlid'");	 //запрос в базу о конкретной моделе		
		
		
		$row = mysql_fetch_assoc($result);//поместить выбранные данные в $row
		
		if(isset($_POST['save']))
		{
			$id = strip_tags(trim($_POST['id']));// сохранение данных с формы в переменную onSubmit
			$cnt = strip_tags(trim($_POST['cnt']));// сохранение данных с формы в переменную onSubmit
			$pcs = strip_tags(trim($_POST['pcs']));// сохранение данных с формы в переменную onSubmit
			
			mysql_query("
						UPDATE $paletteUrl SET id='$id', cnt='$cnt', pcs='$pcs' WHERE id='$urlid' 
			");			
			mysql_close();
		}
	
	?>	
		<form method="post" action="edit.php?id=<?php echo $urlid."&palette=$paletteUrl" ?>" class="form-group">
			ID:<br><input class="form-control" type="text" name="id" value="<?php echo $row['id'];?>" ><br><!--in Value daten aus $row-->
			Stück:<br><input class="form-control" type="text" name="cnt" value="<?php echo $row['cnt'];?>"><br>
			Packungen:<br><input class="form-control" type="text" name="pcs" value="<?php echo $row['pcs'];?>"><br><br>		
			<button class="btn btn-success"  value="add" type="submit" name="save" ><span class="glyphicon glyphicon-ok"></span> Speichern</button>		
		</form>
	
	
	
	<p>&nbsp;</p>
	<a href="http://lager.local/" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span>Zurück</a>
	
	
	
	
	</div>
<?php include_once("footer.php"); //Footer ?>
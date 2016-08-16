<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container"><br><br><br><br>	
	<?php 
		include_once("db.php");//Connecting to Datenbase		
		$urlid = $_GET['id'];//ID aus Url
		$paletteUrl = $_GET['palette'];//Palette nummer aus Url	
			$id = strip_tags(trim($_POST['id']));// сохранение данных с формы в переменную onSubmit
			$cnt = strip_tags(trim($_POST['cnt']));// сохранение данных с формы в переменную onSubmit
			$pcs = strip_tags(trim($_POST['pcs']));// сохранение данных с формы в переменную onSubmit			
			mysql_query("  UPDATE $paletteUrl SET id='$id', cnt='$cnt', pcs='$pcs' WHERE id='$urlid' 	");			
			mysql_close();
			echo "<div class='alert alert-info text-center'><h3><br><br><span class='glyphicon glyphicon-ok '></span> St&uuml;ckzahl von Modell <strong>$id</strong>  ist erfolgreich ge&auml;ndert<br><br><br></h3></div>";
			echo '<script>setTimeout(function(){window.top.location="index.php"},0);</script>';
	?>	
</div>
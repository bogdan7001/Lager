<link href="css/bootstrap.min.css" rel="stylesheet">
<div class="container"><br><br><br><br>
	<?php 
		include_once("db.php");//Connecting to Datenbase		
		$urlid = $_GET['id'];//ID aus Url
		$paletteUrl = $_GET['palette'];//Palette nummer aus Url		
		$result = mysql_query("DELETE FROM $paletteUrl WHERE id='$urlid'");	 //удаление из базы данных			
			mysql_close();
			echo "<div class='alert alert-warning text-center'><h3><br><br><span class='glyphicon glyphicon-ok '></span> Modell aus Palette <strong>$paletteUrl</strong>  ist erfolgreich gel&ouml;scht<br><br><br></h3></div>";
			echo '<script>setTimeout(function(){window.top.location="index.php"},0);</script>';
			
	?>
</div>	


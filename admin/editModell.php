<?php include_once("header.php"); //Header ?>	
<?php 	
if(isset($_POST['rowid'])) {
	$rowid = $_POST['rowid'];//ID aus Url	
	echo "<form method='post' action='editModell.php?id=$rowid' class='form-inline'>			
			Modell name &auml;ndern:<br><input autofocus type='text' name='id' value='$rowid' class='form-control' style='width:100%;'><div>&nbsp;</div>	
			<button class='btn btn-success width100'  value='add' type='submit' name='save' ><span class='glyphicon glyphicon-ok'></span> Speichern</button>
		</form>";		
}
?>
<?php
if(isset($_GET['id'])){	
	include_once("../db.php");//Connecting to Datenbase		
	$urlid = $_GET['id'];//ID aus Url		
	$result = mysql_query("SELECT id FROM modell WHERE id='$urlid'");	 //?????? ? ???? ? ?????????? ??????	
	$row = mysql_fetch_assoc($result);//????????? ????????? ?????? ? $row	
	$modell = strip_tags(trim($_POST['id']));// ?????????? ?????? ? ????? ? ?????????? onSubmit			
	mysql_query("UPDATE modell SET id='$modell' WHERE id='$urlid'");			
	mysql_close();
	echo "<div class='container'><br><h3 class='line30 alert alert-success text-center'><br><br>Modell <span class='label label-default'>$urlid</span> ist auf <span class='label label-success'>$modell</span> ge&auml;ndert! <span class='glyphicon glyphicon-ok'></span><br><br><br></h3></div>";
	echo "<script>setTimeout(function(){window.top.location='modell.php'},1000);</script>";
}
?>
<?php include_once("footer.php"); //Footer ?>
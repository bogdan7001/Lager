<?php include_once("header.php"); //Header ?>

<?php
if(isset($_POST['rowid'])) {
	$rowid = $_POST['rowid'];//ID aus Url
	echo "<h4 class='text-center'>M&ouml;chten Sie Modell: <span class='label label-default'>".$rowid."</span> wirklich l&ouml;schen ? </h4>";	
	echo "
		<form method='post' class='login'><br><input autofocus id='pass' type='password' placeholder='Passwort eingeben' class='form-control' onchange='passcheck()' onkeyup='passcheck()'><br>
		<button disabled='disabled' id='del' class='btn btn-danger width50 pull-left' type='submit'> <span class='glyphicon glyphicon-remove'></span> Ja Modell l&ouml;schen </button>	
		<button type='button' class='btn btn-default width50 pull-right' data-dismiss='modal'><span class='glyphicon glyphicon-ban-circle red'></span> Nicht L&ouml;schen</button>
		<p>&nbsp;</p>
		</form>";		
}
?>	
<script>
	function passcheck(){
	if ($('#pass').val() =='555555')		
		$('#del').removeAttr('disabled'),$('.login').attr('action','deleteModell.php?deleteID=<?=$rowid?>');								
	else
		$('#del').attr('disabled','disable'),$('.login').removeAttr('action','deleteModell.php?deleteID=<?=$rowid?>');								
	}
</script>

<?php
if(isset($_GET['deleteID'])){
	$deleteID = $_GET['deleteID'];//ID aus Url
	include_once("../db.php");//Connecting to Datenbase	
	$result = mysql_query("DELETE FROM modell WHERE id='$deleteID'");//удаление из базы данных			
	mysql_close();	
	echo "<div class='container'><br><h3 class='line30 alert alert-warning text-center'><br><br>Modell <span class='label label-default'>$deleteID</span> ist gel&ouml;scht! <span class='glyphicon glyphicon-ok green'></span><br><br><br></h3></div>";
	echo "<script>setTimeout(function(){window.top.location='modell.php'},1000);</script>";		
}
?>
<?php include_once("footer.php"); //Footer ?>
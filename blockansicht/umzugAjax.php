<?php
include('db.php');
if(isset($_POST['neuID']))
{
	$altID = $_POST['altID'];// ALTE ID aus Url
	$neuID=mysql_real_escape_string($_POST['neuID']);
	$query=mysql_query("select id from $neuID where id LIKE '%'");
	$row=mysql_num_rows($query);
	//echo $row;
	if($row==0){
	echo "<h3 class='alert alert-info'><br>Palette <span class='label label-default'>$altID</span> in <span class='glyphicon glyphicon-share-alt green valignbot'></span> <span class='label label-success'>$neuID</span> verschieben ? <br><br></h3>";
	}else{
		echo "<h3 class='line30 alert alert-danger'>Palette <span class='label label-danger'>$neuID</span> ist nicht leer! <br><b>Alle daten werden gel&ouml;scht!</b><br> Wollen Sie wirklich <span class='label label-default'>$altID</span> in <span class='label label-danger'>$neuID</span> verschieben?</h3>";
	}
}
//$result = mysql_query($sql) || die(mysql_error()); 
?>
<?php
if(isset($_POST['newid01'])){	
include('db.php');
	/*Daten auf Ajax data:{} in var auslesen*/
	$newid01=mysql_real_escape_string($_POST['newid01']);	
	$newid02=mysql_real_escape_string($_POST['newid02']);
	$id01=mysql_real_escape_string($_POST['id01']);
	$id02=mysql_real_escape_string($_POST['id02']);	
	/*	echo $newid01;	echo "<br>";	echo $newid02;	echo "<br>";	echo $id01;	echo "<br>";	echo $id02;*/			
	/*Request in Datenbank*/	
	$query=mysql_query("select id from a$newid01 where id LIKE '%'");
	$row=mysql_num_rows($query);	
	$query2=mysql_query("select id from a$newid02 where id LIKE '%'");
	$row2=mysql_num_rows($query2);	
	// echo $row;	echo "<br>";	echo $row2;		//echo $row;	
	if($row>0 || $row2>0 ){		// If 2 Neue Palette haben etwas schow Warning
		echo "<h3 class='line30 alert alert-danger'>Paletten <span class='label label-danger'>$newid01</span> oder <span class='label label-danger'>$newid02</span> sind nicht leer! <br><b>Alle daten werden gel&ouml;scht!</b><br> Wollen Sie wirklich <span class='label label-default'>$id01</span> & <span class='label label-default'>$id02</span><br>in <span class='label label-danger'>$newid01</span> & <span class='label label-danger'>$newid02</span> verschieben?</h3>";
	}else{
		echo "<h3 class='alert alert-info'><br>Palette <span class='label label-default'>$id01</span> & <span class='label label-default'>$id02</span><br> <br>in <span class='glyphicon glyphicon-share-alt green valignbot'></span> <span class='label label-success'>$newid01</span> & <span class='label label-success'>$newid02</span> verschieben ? <br><br></h3>";		
	}
}
?>
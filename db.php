<?php 
$connection = mysql_connect("localhost","lager","1234"); // Connect to Datenbase  HOST > USER > PASSWORD
$db = mysql_select_db("lager"); //Connect to certain DB 
mysql_set_charset("utf8"); // для нормального отображения символов
/*
if(!connection || !$db){ // if not connected to db show Error 
	exit(mysql_error());
	
}//test for connecting
*/

?>
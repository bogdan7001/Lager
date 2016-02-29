<?php 
$connection = mysql_connect("localhost","lager","1234"); // Connect to Datenbase
$db = mysql_select_db("lager");
mysql_set_charset("utf8");
if(!connection || !$db){
	exit(mysql_error());
	
}//test for connecting
?>
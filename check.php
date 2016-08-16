<?php 
	
$name = $_POST['name'];
$pass = $_POST['pass'];

if ($name==("admin") & $pass==("123") ){
	session_start();
	$_SESSION['name'];
	$_SESSION['pass'];

	header("location:admin.php");
	
}else echo "<h4>Passwort ist Falsch!</h4>";


?>

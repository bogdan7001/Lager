<?php
	session_start();
if(isset($_SESSION['pass'])){
	header("location:index.php");
}
?>

<html>

<head><title>Admin page</title></head>
<body>
<center>Welcome in Admin Page </center>
</body>
</html>
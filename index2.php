<?php
session_start();
	if(isset($_POST['enter'])){		
		$name = $_POST['name'];
		$pass = $_POST['pass'];		
		if ($name==("admin") & $pass==("123") ){		
			$_SESSION['name'] = strip_tags(trim($_POST['name']));
			$_SESSION['pass'] = strip_tags(trim($_POST['name']));
			echo $_SESSION['name'];
			echo $_SESSION['pass'];
		}else{
			echo "Login :  $name  or Password is wrong";
		}	
	}// END if Button "eneter"  
?>

<?php if(!isset($_SESSION['name'])){ // If session don't have Name show Form ?>	

	<form action="index2.php" method="post">
		<input name="name" type="text" placeholder="Login" class="form-control">
		<input name="pass" type="password" placeholder="Passwort" class="form-control">
		<button type="submit" name="enter" class="btn btn-primary">Login</button>
	</form>

<?php
}else{
	echo "Hello ,".$_SESSION['name'];
	echo "<form action='logout.php' method='post'><button type='submit' name='sesDelete'>Delete</button></form>";
}
?>

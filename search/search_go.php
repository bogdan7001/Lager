<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Search Contacts</title>
</head>

<body>
<h3>Search Contacts Details</h3>
<p>You may search either by first or last name</p>
<form method="post" action="search_go.php" id="searchform">
<input type="text" name="name">
<input type="submit" name="submit" value="Search">
</form>
<?aspx
if(isset($_POST['submit'])){
if(isset($_GET['go'])){

else{
echo "<p>Please enter a search query</p>";
}
}
}
?>
</body>
</html>

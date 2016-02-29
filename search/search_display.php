<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Search Contacts</title>
<style type="text/css" media="screen">
ul li{
  list-style-type:none;
}
</style>
</head>

<body>
<h3>Search Contacts Details</h3>
<p>You may search either by first or last name</p>
<form method="post" action="search_display.aspx?go" id="searchform">
<input type="text" name="name">
<input type="submit" name="submit" value="Search">
</form>
<?aspx

if(isset($_POST['submit'])){
if(isset($_GET['go'])){
if(preg_match("/[A-Z | a-z]+/", $_POST['name'])){
$name=$_POST['name'];

//connect to the database
$db=mysql_connect ("mysqlb11.webcontrolcenter.com", "ryanbutler", "kansasJayhawks08") or die ('I cannot connect to the database because: ' . mysql_error()); 

//-select the database to use
$mydb=mysql_select_db("midwestwebdesign");

//-query the database table
$sql="SELECT ID, FirstName, LastName FROM Contacts WHERE FirstName LIKE '%" . $name . "%' OR LastName LIKE '%" . $name ."%'";

//-run the query against the mysql query function
$result=mysql_query($sql);

//-create while loop and loop through result set
while($row=mysql_fetch_array($result)){

	$FirstName =$row['FirstName'];
	$LastName=$row['LastName'];
	$ID=$row['ID'];
		
//-display the result of the array

echo "<ul>\n"; 
echo "<li>" . "<a href=\"search_display.aspx?id=$ID\">"  .$FirstName . " " . $LastName . "</a></li>\n";
echo "</ul>";
}
}
else{
echo "<p>Please enter a search query</p>";
}
}
}
?>
</body>
</html>

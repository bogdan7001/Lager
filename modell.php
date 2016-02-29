<?php include_once("header.php"); //Header ?>
<div class="container">
<br><br>

<div class="col-lg-8">

<div class="panel panel-primary">
  <div class="panel-heading text-center"><b>Modelle</b></div>
  <div class="panel-body">



<?php 
include_once("db.php");//Connecting to Datenbase

$result = mysql_query(" SELECT * FROM modell"); // download all from a111 tabele 

mysql_close(); //Close connecting with Datenbank
while($row = mysql_fetch_array($result))// in array auslesen
{ ?>

<div class="col-lg-12">
	<b><?php echo $row['modell'] ?></b>
	<a class="btn btn-default pull-right" href="deleteModell.php?id=<?php echo $row['modell']?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>&nbsp;&nbsp;
	<a class="btn btn-default pull-right" href="editModell.php?id=<?php echo $row['modell']?>"><span class="glyphicon glyphicon-pencil"></span></a>	
	<hr>
</div>
<?php } ?>


  </div>
</div>
</div>

<a class="btn btn-success"href="addModell.php">Neue Modell hinzufügen <span class="glyphicon glyphicon-plus"></span></a>
<a class="btn btn-primary"href="index.php"><span class="glyphicon glyphicon-home"></span>  Zur Lager</a>
<?php include_once("footer.php"); //Footer ?>

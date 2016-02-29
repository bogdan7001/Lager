<div class="container">
<br><br>

<div class="col-lg-1">
	<div class="panel panel-default">
	  <div class="panel-heading text-center"><b>A111</b></div>
	  <div class="panel-body">

	  
	  
	  <div class="dropdown">
	  <button class="btn btn-default btn-group-justified dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		1
		<span class="caret"></span>
	  </button> 
	  
	  
	<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width:500px;">
	  <?php 
	include_once("db.php");//Connecting to Datenbase

	$result = mysql_query(" SELECT * FROM a111"); // download all from a111 tabele 

	//mysql_close(); //Close connecting with Datenbank
	while($row = mysql_fetch_array($result))// in array auslesen
	{ ?>  

		<p style="display:inline-block; padding:10px;border-bottom:1px solid #ccc; ">
			<b><?php echo $row['id'] ?></b> |
			Stückzahl:<b><?php echo $row['cnt'] ?></b> |
			Packungen:<b><?php echo $row['pcs'] ?></b>
			<a class="btn btn-default pull-right" href="delete.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>&nbsp;&nbsp;
			<a class="btn btn-default pull-right" href="edit.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-pencil"></span></a>		
		</p>
	<?php } ?>	
		<li role="separator" class="divider"></li>
		<li><a class="btn btn-success"href="add.php"><span class="glyphicon glyphicon-plus"></span>Hinzufügen</a></li>
	  </ul>
	</div>
	<!--	
	<div class="col-lg-12">
	<b><?php echo $row['id'] ?></b> |
		Stückzahl:<b><?php echo $row['cnt'] ?></b> |
		Packungen:<b><?php echo $row['pcs'] ?></b>
		<a class="btn btn-default pull-right" href="delete.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>&nbsp;&nbsp;
		<a class="btn btn-default pull-right" href="edit.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-pencil"></span></a>	
		<hr>
	</div>

	<p>&nbsp;</p>
	<a class="btn btn-success"href="add.php"><span class="glyphicon glyphicon-plus"></span>Hinzufügen</a>
	-->
	  </div>
	</div>
</div>

<div class="col-lg-1">
	<div class="panel panel-default">
	  <div class="panel-heading text-center"><b>A112</b></div>
	  <div class="panel-body">

	  
	  
	  <div class="dropdown">
	  <button class="btn btn-default btn-group-justified dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		1
		<span class="caret"></span>
	  </button> 
	  
	  
	<ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width:500px;">
	  <?php 
	include_once("db.php");//Connecting to Datenbase

	$result = mysql_query(" SELECT * FROM a112"); // download all from a111 tabele 

	mysql_close(); //Close connecting with Datenbank
	while($row = mysql_fetch_array($result))// in array auslesen
	{ ?>  

		<p style="display:inline-block; padding:10px;border-bottom:1px solid #ccc; ">
			<b><?php echo $row['id'] ?></b> |
			Stückzahl:<b><?php echo $row['cnt'] ?></b> |
			Packungen:<b><?php echo $row['pcs'] ?></b>
			<a class="btn btn-default pull-right" href="delete.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>&nbsp;&nbsp;
			<a class="btn btn-default pull-right" href="edit.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-pencil"></span></a>		
		</p>
	<?php } ?>	
		<li role="separator" class="divider"></li>
		<li><a class="btn btn-success"href="add.php"><span class="glyphicon glyphicon-plus"></span>Hinzufügen</a></li>
	  </ul>
	</div>
	<!--	
	<div class="col-lg-12">
	<b><?php echo $row['id'] ?></b> |
		Stückzahl:<b><?php echo $row['cnt'] ?></b> |
		Packungen:<b><?php echo $row['pcs'] ?></b>
		<a class="btn btn-default pull-right" href="delete.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>&nbsp;&nbsp;
		<a class="btn btn-default pull-right" href="edit.php?id=<?php echo $row['id']?>"><span class="glyphicon glyphicon-pencil"></span></a>	
		<hr>
	</div>

	<p>&nbsp;</p>
	<a class="btn btn-success"href="add.php"><span class="glyphicon glyphicon-plus"></span>Hinzufügen</a>
	-->
	  </div>
	</div>
</div>



<a class="btn btn-warning"href="modell.php">Modell Liste <span class="glyphicon glyphicon-th-list"></span></a>


</div>



<p class="clearfix">&nbsp;</p>
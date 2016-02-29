
<div class="dropdown">
	<a class="PaletteLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><?php  echo $paletteID; ?><span class="caret"></span></a> 	
	<ul class="dropdown-menu"  style="min-width:550px;">


	<div  class="col-lg-9 border-right">
	 <?php 				
				include_once("db.php");//Connecting to Datenbase
				$result = mysql_query(" SELECT * FROM $paletteID"); // download all from $palletteID tabele 
			//	mysql_close(); //Close connecting with Datenbank
				while($row = mysql_fetch_array($result))// in array auslesen
				
			{ ?>  

				<p style="padding:10px 10px 20px 10px;border-bottom:1px solid #ccc; ">
					<b><?php echo $row['id'] ?></b> |
					Stck.:<b><?php echo $row['cnt'] ?></b> |
					Pack.:<b><?php echo $row['pcs'] ?></b>
					<a class="btn btn-default pull-right" href="delete.php?id=<?php echo $row['id']."&palette=$paletteID"?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>&nbsp;&nbsp;
					<a class="btn btn-default pull-right" href="edit.php?id=<?php echo $row['id']."&palette=$paletteID"?>"><span class="glyphicon glyphicon-pencil"></span></a>			
				</p>
			<?php } ?>	
		</div>		
		
		<div class="col-lg-3">
			<a class="btn btn-success padding20px" href="add.php?<?php echo"palette=$paletteID"?>"><span class="glyphicon glyphicon-plus"></span>Hinzufügen</a>
		</div>
		
	  </ul>
</div>






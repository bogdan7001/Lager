<div class="col-lg-8">
<?php
	$paletteID = $_GET['id'];//Palette TabelleNummer aus Url (muss immer obern sein)	
	echo "<h4 class='text-center'><span class='label label-default'>Paletten ID: ". $paletteID."</span></h4>";
	echo "<ul class='list-group'>";
	include_once("db.php");//Connecting to Datenbase		
	$result = mysql_query(" SELECT * FROM $paletteID"); // download all from $palletteID tabele 
	mysql_close(); //Close connecting with Datenbank		
	while($row = mysql_fetch_array($result))// in array auslesen				
	{
	$arrayempty = "visib"; // If array is Empty don't show Button "Alles löschen" & "Palette Verschieben" 	
?>	
	
	<li class="list-group-item overflow-hidden">
		<b><?php echo $row['id'] ?></b> | Stck.:<b><?php echo $row['cnt'] ?></b> | Pack.:<b><?php echo $row['pcs'] ?></b>
		<a href="#deleteModal" class="btn btn-default pull-right" data-toggle="modal" data-id="<?php echo $row['id'] ?>" data-palette="<?php echo $paletteID ?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>&nbsp;&nbsp;			
		<a href="#editModal" class="btn btn-default pull-right" data-toggle="modal" data-cnt="<?php echo $row['cnt'] ?>" data-pcs="<?php echo $row['pcs'] ?>" data-id="<?php echo $row['id'] ?>" data-pal="<?php echo $paletteID ?>"><span class="glyphicon glyphicon-pencil"></span></a>				
	</li>		
<?php }	?>		
	</ul>	


	<a href="#deleteAllModal" class="btn btn-default pull-left hinzufPadding2 hidd <?php echo 'b'.$paletteID;?> <?php echo $arrayempty;?>" data-toggle="modal" data-noempty="<?php echo $arrayempty;?>" data-id="<?php echo $paletteID; ?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span> Alles L&ouml;schen</a>			

	<a onclick="umzugFunction('<?=$paletteID?>')" class="btn btn-default pull-right hinzufPadding2 hidd <?php echo $arrayempty;?>"><span class="glyphicon glyphicon-share-alt green" ></span> Palette Verschieben</a><br>
	<div>&nbsp;</div>
	
	<a onclick="umzugFunction2('<?=$paletteID?>')" class="btn btn-default hinzufPadding2 hidd <?php echo $arrayempty;?>" style="width:100%;margin-top:5px;"><span class="glyphicon glyphicon-share-alt blue"></span><span class="glyphicon glyphicon-share-alt blue"></span> 2 Paletten Verschieben</a>
</div>		

<div class="col-lg-4"><br><br>
	<a href="#quickRecordModal" class="btn btn-success" data-toggle="modal" data-id="<?php echo $paletteID ?>" ><span class="glyphicon glyphicon-plus"> </span><br> Modell ohne Menge</a><br><br>
	<a href="#recordModal" class="btn btn-info" data-toggle="modal" data-id="<?php echo $paletteID ?>"  ><span class="glyphicon glyphicon-plus-sign"></span><br> Modell mit Menge &nbsp;</a><br><br>	
</div>




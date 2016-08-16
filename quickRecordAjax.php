<?php
if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
	echo $id;
 }
?>
		
<form method="post" action="" class="form-group add">			
	<label>Model:</label><br>  
	<select name="id" id="modelSelect" class="form-control" required autofocus>	
		<option value="" disabled selected>Modell ausw&auml;len</option>
		<?php 
		include_once("db.php");//Connecting to Datenbase					
		$result = mysql_query(" SELECT * FROM modell"); // download all from Modell tabele 				
		while($row = mysql_fetch_array($result))// in array auslesen
		{ ?>
		<option  value="<?=$row[0]?>"><?=$row[0]?></option> 
		<?php } ?>	
	</select><br>	
	<button class="btn btn-success width100" value="add" type="submit" name="add" >	<span class="glyphicon glyphicon-plus"></span> Hinzuf&uuml;gen</button>		
</form>
	
<script>
$(document).ready(function(){
$(".add").submit(function(event) {
	var valOption = $("#modelSelect").val();
	var urlGanz = "?palette=<?=$id?>&id="+valOption+"";
	console.log(urlGanz);
	$.ajax({
	type: "POST",
	url: "quickRecord.php?palette=<?=$id?>&id="+valOption+"",
	data: "palette=<?=$id?>&id="+valOption+"",
	success: function(msg)
	{
	 console.log(msg);
	 $('#quickRecordModal').html(msg)
	}	
	}); 	
	return false;
	});	
});
</script>
<?php
if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
	echo $id;
 }
?>
		
<form method="post" class="form-group add">			
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
//$(document).ready(function(){
$(".add").submit(function(event) {
	
	/* Info sameln */
		var valOption = $("#modelSelect").val();
		var urlGanz = "?palette=<?=$id?>&id="+valOption+"";	
	/* Info sameln END*/
	
	/* AJAX  REQUEST */
	$.ajax({
		type: "POST",
		url: "quickRecord.php?palette=<?=$id?>&id="+valOption+"",
		data: "palette=<?=$id?>&id="+valOption+"",
		success: function(msg)
		{
		 $('.ajax-data1').html("<?=$id?><center><h4 class='alert alert-success'><br>Modell <b>"+valOption+" </b>ist Hinzugefügt<br><br></h4></center>");			
			/* Palette Check und Reload */	
			$.ajax({
				type: "POST",
				url: "",
				data: "",
				success: function(){
					$('#<?=$id?>').load("palcheck.php?id=<?=$id?>");
					$('#<?=$id?>').css("background-color","#65C1BB");					
					setTimeout(function(){ $('#<?=$id?>').css("background-color",""); },3000);					
				}	
			});
			/* End Palette Check und Reload */		
			/* modal close */setTimeout(function(){ $('.quickRecordModal').modal('hide'); },800);/* end modal close */			
		
		}//Success Ajax 1 END	
	}); 
	/* AJAX  REQUEST */	
	return false;
	});	
//});
</script>
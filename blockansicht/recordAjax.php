<?php
if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
	echo $id;
 }
?>
		
<form method="post" action="" class="form-group record">			
	<label>Modell:</label><br>  
	<select name="id" id="modelSelect2" class="form-control" required autofocus>	
		<option value="" disabled selected>Modell ausw&auml;len</option>
		<?php 
		include_once("db.php");//Connecting to Datenbase					
		$result = mysql_query(" SELECT * FROM modell"); // download all from Modell tabele 				
		while($row = mysql_fetch_array($result))// in array auslesen
		{ ?>
		<option  value="<?=$row[0]?>"><?=$row[0]?></option> 
		<?php } ?>	
	</select><br>	
	<label>Stück (PCS):</label><br><input id="cnt" type="text"  name="cnt" required class="form-control"><br>
	<label>Kartons (CTN):</label><br><input id="pcs" type="text"  name="pcs" required class="form-control"> <br><br>		
	<button class="btn btn-info width100" value="add" type="submit" name="add" >	<span class="glyphicon glyphicon-plus-sign"></span> Hinzuf&uuml;gen</button>		
</form>
	
<script>
//$(document).ready(function(){
$(".record").submit(function(event) {
	var valOption = $("#modelSelect2").val();
	var valSt = $("#cnt").val();
	var valPc = $("#pcs").val();
	var urlGanz = "?palette=<?=$id?>&id="+valOption+'&pcs='+valPc+'&cnt='+ valSt;
	console.log(urlGanz);
	$.ajax({
	type: "POST",
	url: "record.php?palette=<?=$id?>&id="+valOption+'&pcs='+valPc+'&cnt='+ valSt,
	data: "?palette=<?=$id?>&id="+valOption+'&pcs='+valPc+'&cnt='+ valSt,
	success: function(msg)
	{
		$('.ajax-data2').html("<?=$id?><center><h4 class='alert alert-success'><br>Modell <b>"+valOption+" </b>ist Hinzugefügt<br><br></h4></center>");			
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
			/* modal close */setTimeout(function(){ $('#recordModal').modal('hide'); },800);/* end modal close */		
	}	
	}); 
	return false;
	});	
//});
</script>
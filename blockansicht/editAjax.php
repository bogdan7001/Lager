<?php
if($_POST['pal']) {
    $pal = $_POST['pal']; //escape string
	$id = $_POST['id'];//ID aus Url		
	$cnt = $_POST['cnt'];//ID aus Url
	$pcs = $_POST['pcs'];//ID aus Url		
 }
?>

<form method="post" action="" class="form-group edit">
	ID:<br><input readonly class="form-control" type="text" name="id" value="<?php echo $id;?>" id="id" ><br><!--in Value daten aus $row-->
	St&uuml;ck (PCS):<br><input class="form-control" type="text" name="cnt" value="<?php echo $cnt;?>" id="cnt"><br>
	Kartons (CTN):<br><input class="form-control" type="text" name="pcs" value="<?php echo $pcs;?>" id="pcs"><br><br>		
	<button class="btn btn-success"  value="add" type="submit" name="save" ><span class="glyphicon glyphicon-ok"></span> Speichern</button>		
</form>

<script>
$(document).ready(function(){
$(".edit").submit(function(event) {
	var id = $("#id").val();
	var cnt = $("#cnt").val();
	var pcs = $("#pcs").val();
	var urlGanz = "?palette=<?=$pal?>&id=<?=$id?>&pcs="+pcs+'&cnt='+ cnt;
$.ajax({
	type: "POST",
	url: "edit.php?palette=<?=$pal?>&id=<?=$id?>&pcs="+pcs+'&cnt='+ cnt,
	data : "?palette=<?=$pal?>&id=<?=$id?>&pcs="+pcs+'&cnt='+ cnt, //Pass $id
	success: function(msg)
	{
		
	 $('.ajax-data3').html("<?=$id?><center><h4 class='alert alert-success'><br><span class='glyphicon glyphicon-ok '></span> St&uuml;ckzahl von Modell <strong><?=$id?></strong>  ist erfolgreich ge&auml;ndert<br><br></h4></center>");			
		/* Palette Check und Reload */	
		$.ajax({
			type: "POST",
			url: "",
			data: "",
			success: function(){
				$('#<?=$pal?>').load("palcheck.php?id=<?=$pal?>");
				$('#<?=$pal?>').css("background-color","#79B879");					
				setTimeout(function(){ $('#<?=$pal?>').css("background-color",""); },3000);					
			}	
		});
		/* End Palette Check und Reload */		
		/* modal close */setTimeout(function(){ $('#editModal').modal('hide'); },800);/* end modal close */	
	
	}	
	}); 
	return false;
	});	
});
</script>
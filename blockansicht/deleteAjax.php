<?php
if($_POST['rowid']) {
    $palette = $_POST['palid']; //escape string
	$rowid = $_POST['rowid'];//ID aus Url
	echo "<h4 class='text-center'>Modell<strong> " .$rowid."</strong> aus der Palette <strong>".$palette."</strong> l&ouml;schen ? </h4>";
 }
?>
<form method="post" action="" class="form-group delete">
<p>&nbsp;</p>	
<button class="btn btn-danger width50 pull-left" value="add" type="submit" name="add" >	<span class="glyphicon glyphicon-remove"></span> Ja l&ouml;schen </button>	
<button type="button" class="btn btn-default width50 pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-ban-circle red"></span> Abbrechen</button>	
<p>&nbsp;</p>
</form>
	
<script>
$(document).ready(function(){
$(".delete").submit(function(event) {
	var urlGanz = "?palette=<?=$palette?>&id=<?=$rowid?>";
	console.log(urlGanz);
	$.ajax({
	type: "POST",
	url: "delete.php?palette=<?=$palette?>&id=<?=$rowid?>",
	data: "?palette=<?=$palette?>&id=<?=$rowid?>",
	success: function(msg)
	{
		$('.ajax-data4').html("<center><h4 class='alert alert-warning'><br>Modell <b><?=$rowid?></b> aus Palette <strong><?=$palette?></strong>  ist erfolgreich gel&ouml;scht<br><br></h4></center>");			
			/* Palette Check und Reload */	
			$.ajax({
				type: "POST",
				url: "",
				data: "",
				success: function(){
					$('#<?=$palette?>').load("palcheck.php?id=<?=$palette?>");
					$('#<?=$palette?>').css("background-color","#DE3E4B");					
					setTimeout(function(){ $('#<?=$palette?>').css("background-color",""); },3000);					
				}	
			});
			/* End Palette Check und Reload */		
			/* modal close */setTimeout(function(){ $('#deleteModal').modal('hide'); },800);/* end modal close */	
	}
	});
	return false;
	});	
});
</script>
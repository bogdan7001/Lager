<?php
if($_POST['rowid']) {
    $id = $_POST['rowid']; //escape string
	echo "<h4 class='text-center'>Alles aus der Palette <strong> ".$id."</strong> l&ouml;schen ? </h4>";
 }
?>		
<form method="post" action="" class="form-group deleteAll">	
<p>&nbsp;</p>	
<button class="btn btn-danger width50 pull-left" value="add" type="submit" name="add" >	<span class="glyphicon glyphicon-remove"></span> Ja Alles l&ouml;schen </button>	
<button type="button" class="btn btn-default width50 pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-ban-circle red"></span> Abbrechen</button>	
<p>&nbsp;</p>
</form>
	
<script>
$(document).ready(function(){
$(".deleteAll").submit(function(event) {
	var urlGanz = "?palette=<?=$id?>";
	console.log(urlGanz);
	$.ajax({
	type: "POST",
	url: "deleteAll.php?palette=<?=$id?>",
	data: "?palette=<?=$id?>",
	success: function(msg){
		
		$('.ajax-data5').html("<center><h4 class='alert alert-warning'><br>Palette <strong><?=$id?></strong>  ist erfolgreich gel&ouml;scht<br><br></h4></center>");			
			/* Palette Check und Reload */	
			$.ajax({
				type: "POST",
				url: "",
				data: "",
				success: function(){
					$('#<?=$id?>').load("palcheck.php?id=<?=$id?>");
					$('#<?=$id?>').css("background-color","#DE3E4B");					
					setTimeout(function(){ $('#<?=$id?>').css("background-color",""); },3000);					
				}	
			});
			/* End Palette Check und Reload */		
			/* modal close */setTimeout(function(){ $('#deleteAllModal').modal('hide'); },800);/* end modal close */ 
	}
	});
	return false;
	});	
});
</script>
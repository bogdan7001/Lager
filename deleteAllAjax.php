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
	success: function(msg)
	{
	 console.log(msg);
	 $('#deleteAllModal').html(msg)
	}
	});
	return false;
	});	
});
</script>
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
	 console.log(msg);
	 $('#deleteModal').html(msg)
	}
	});
	return false;
	});	
});
</script>
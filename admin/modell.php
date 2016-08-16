<?php include_once("header.php"); //Header ?>
<div class="container">
<br><br>

<div class="col-lg-8">
<div class="panel panel-primary">
	<div class="panel-heading text-center"><b>Modelle</b></div>
	<div class="panel-body">

	<?php 
	include_once("../db.php");//Connecting to Datenbase
	$result = mysql_query(" SELECT * FROM modell"); // download all from a111 tabele 
	mysql_close(); //Close connecting with Datenbank
	while($row = mysql_fetch_array($result))// in array auslesen
	{ ?>

	<div class="col-lg-12">
		<b><?php echo $row['id'] ?></b>
		<a  href="#delModal" class="btn btn-default pull-right" data-toggle="modal" data-id="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-remove" style="color:red;"></span></a>&nbsp;&nbsp;
		<a href="#editModal" class="btn btn-default pull-right" data-toggle="modal" data-id="<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-pencil"></span></a>	
		<hr>
	</div>
	<?php } ?>

	</div>
</div>
</div>
<a class="btn btn-success hinzufPadding" href="#addModal" data-toggle="modal" data-id="<?php echo $row['id'] ?>">Neue Modell hinzuf&uuml;gen <span class="glyphicon glyphicon-plus"></span></a>
<a class="btn btn-primary hinzufPadding" href="../index.php"><span class="glyphicon glyphicon-home"></span>  Zur Lager</a>

<!-- ADD MODAL -->
<div class="modal fade" id="addModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modell hinzuf&uuml;gen</h4>
            </div>
            <div class="modal-body">
                <div class="ajax-dataAdd"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#addModal').on('show.bs.modal', function (e) {
        var rowid = 1;
		console.log("ROWID:"+rowid);
        $.ajax({
            type : 'post',
            url : 'addModell.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.ajax-dataAdd').html(data);//Show fetched data from database
            }
        });	
     });
});
</script>
<!-- ADD MODAL END -->

<!-- EDIT MODAL -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title red">Modellname &auml;ndern</h4>
            </div>
            <div class="modal-body">
                <div class="ajax-dataEdit"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#editModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
		console.log("ROWID:"+rowid);
        $.ajax({
            type : 'post',
            url : 'editModell.php', //Here you will fetch records 
            data : {'rowid':rowid}, //Pass $id
            success : function(data){
            $('.ajax-dataEdit').html(data);//Show fetched data from database
            }
        });		
     });	
});
</script>
<!-- EDIT MODAL END -->

<!-- DELETE MODAL -->
<div class="modal fade" id="delModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title red">Modell l&ouml;schen</h4>
            </div>
            <div class="modal-body">
                <div class="ajax-dataDelete"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#delModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'post',
            url : 'deleteModell.php', //Here you will fetch records 
            data : {'rowid':rowid}, //Pass $id
            success : function(data){
            $('.ajax-dataDelete').html(data);//Show fetched data from database
            }
        });			
     });		 
});
</script>
<!-- DELETE MODAL END -->

<?php include_once("footer.php"); //Footer ?>
<?php session_start();//Session start for Login and Password ?>
<?php include_once("header.php"); //Header ?>
<?php
	if(isset($_POST['enter'])){	//if Login Button start 	
		$name = $_POST['name']; // get input value 
		$pass = $_POST['pass'];	// get input value	
		if ($name==("admin") & $pass==("123") ){	// if password is right write in session login and password 	
			$_SESSION['name'] = strip_tags(trim($_POST['name']));
			$_SESSION['pass'] = strip_tags(trim($_POST['name']));
		}else{
			echo "<h2 class='red'>Login oder Passwort ist Falsch! </h2>"; // Password is Wrong 
		}	
	}// END if Button "enter"  
?>
<?php if(!isset($_SESSION['name'])){ // If session don't have Name show Form ?>	
<div id="my-modal" class="modal fade in" style="display:block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"><h4 class="modal-title">Einlogen</h4></div>
            <div class="modal-body">
				<form action="index.php" method="post">
					<input autofocus required name="name" type="text" placeholder="Login" class="form-control"><br>
					<input name="pass" required type="password" placeholder="Passwort" class="form-control"><br>
					<button type="submit" name="enter" class="btn btn-primary width100">Login</button>
				</form>	
            </div>
        </div>
    </div> 
</div>
<div class="modal-backdrop fade in"></div>
<?php
}else{ // Login and Password is Right ! 
?>
<script src="js/dragscroll.js"></script>
<div class="container" id="masages">	
		<div class="col-lg-2"><br><a class="btn btn-success" href="blockansicht/index.php"><span class="glyphicon glyphicon-th"></span> Modelle Ansicht</a></div>
		<div class="col-lg-6">					
			<script type="text/javascript">
			$(function() {
				$(".search_button").click(function() {					
					var searchString    = $("#search_box").val(); // получаем то, что написал пользователь				
					var data            = 'search='+ searchString;// формируем строку запроса					
					if(searchString) { // если searchString не пустая						
						$.ajax({ // делаем ajax запрос
							type: "POST",
							url: "do_search.php",
							data: data,
							beforeSend: function(html) { // запустится до вызова запроса
								$("#results").html('');
								$("#searchresults").show();
								$(".word").html(searchString);
						   },
						   success: function(html){ // запустится после получения результатов
								$("#results").show();
								$("#results").append(html);
						  }
						});
					}
					return false;
				});
			});
			</script>			
			<div id="container">
				<div style="margin:20px auto; text-align: center;">
					<form method="post" action="do_search.php">
						<input style="width:83%; float:left;" placeholder="Modell eingeben" type="text" name="search" id="search_box" class='search_box form-control'/>
						<input type="submit" value="Suchen" class="search_button btn btn-primary" /><br />
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-3"><br> <select id="results"  class="form-control"><option disabled selected >Gefundene Modelle</option></select></div>
		<div class="col-lg-1" style="padding:0;"><br>				
			<div class="dropdown">
				<a class="btn btn-warning" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
				
				<a href="logout.php" class="btn btn-default"><span class="glyphicon glyphicon-log-out"></span></a>
				
				<div class="dropdown-menu" aria-labelledby="dropdownMenu1" style="padding:5px 14px;">
					<form class="login">
					<input id="pass" type="password" class="form-control " onchange="passcheck()" onkeyup="passcheck()" >
					<button disabled="disabled"  type="submit" class="btn btn-success login" style="margin-top:5px;">Administrator &nbsp;<span class="glyphicon glyphicon-user"></span></button>	
					</form>
					<script>
						function passcheck(){
						if ($('#pass').val() =='555555')
							$('.login').removeAttr('disabled').attr('action','admin/modell.php');							
						else
							$('.login').attr('disabled','disable').removeAttr('action','admin/modell.php');								
						}		
					</script>							
				</div>			
			</div>			
		</div>		
</div><!-- Conrainer END-->	
<div class="free dragscroll" style="width:100%;height:950px;overflow:scroll;cursor:grab;cursor:-o-grab;cursor:-moz-grab; cursor:-webkit-grab;">
<div class="allwidth">

<?php  // Request if  palette included  Item (if yes with color)
    include('db_search.php');
    $db = new db();
	$style ="{background:#FE7435;}";
	$style2 ="{background:#AE6C4D;}";
	$number = 1;
	while ($number < 1050):	
	$sql = "(SELECT id FROM a$number WHERE id IS NOT NULL )";$row=$db->select_list($sql);if(count($row)){foreach($row as $r){$result=$r['id'];}echo"<style>.one #a$number $style .two #a$number $style2</style>";}		
	$number++;		
	endwhile;		
?>




<?php $Num =1;
$paletteID = "a".$Num ;
echo "<h1>$paletteID</h1>";	
$pal ="<div class='pal'><div class='one'>".$paletteID++;"</div> <div class='two'>".$paletteID++;"</div></div>";
?>





<!-- Block 1 --><!--[a1 - a32]-->
<div class="block"><div class="buchstaben">1</div>
	<div class="line">	
	

<?php echo $pal++; ?><?php echo $pal++; ?><?php echo $pal++; ?><?php echo $pal++; ?><?php echo $pal++; ?>
		
		
		<div class="seule"></div>
	</div>
	<div class="line">	
	<div class="pal"><div>&nbsp;</div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line">
		<div class="pal"><div>&nbsp;</div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
</div>
<!-- Block 1 End --><!--[a1 - a32]-->

<!-- Block 2--><!--[a33 - a32]-->
<div class="block"><div class="buchstaben">2</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>	
		<div class="seule pull-right"></div>		
	</div>
	<div class="line"><!--Linie-->			
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
</div>
<!-- Block 2 End-->

<!-- Block 3 -->
<div class="block"><div class="buchstaben">3</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right"></div>
	</div>
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num";$Num++;include("pal.php");?></div><div class="two"><?php $paletteID = "a$Num";$Num++;include("pal.php");?></div></div>	
	</div>	
</div>
<!-- Block 3 End-->

<!-- Block 4 -->
<div class="block"><div class="buchstaben">4</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="seule pull-right"></div>		
	</div>
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
</div>
<!-- Block 4 End-->

<!-- Block 5 -->
<div class="block"><div class="buchstaben">5</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="seule pull-right"></div>		
	</div>
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
</div>
<!-- Block 5 End-->

<!-- Block 6 -->
<div class="block"><div class="buchstaben">6</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="seule pull-right"></div>
	</div>
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
</div>
<!-- Block 6 End-->

<!-- Block 7 -->
<div class="block"><div class="buchstaben">7</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="seule pull-right"></div>
	</div>
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal minus40"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 7 End-->

<!-- Block 8 -->
<div class="block pull-right"><div class="buchstaben">8</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>	
	</div>
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 8 End--> <!-- bis 320 --->

<div class="flur"></div>
																								<!-- Untere Teil -->
<!-- Block 9 -->
<div class="block marginLeft54"><div class="buchstaben">9</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule"></div>		
	</div>	
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule minus50"></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
	</div>
</div>
<!-- Block 9 End-->

<!-- Block 10 -->
<div class="block"><div class="buchstaben">10</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right"></div>		
	</div>	
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule minus50 pull-right"></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 10 End-->

<!-- Block 11 -->
<div class="block"><div class="buchstaben">11</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right"></div>
	</div>	
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule minus50 pull-right"></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 11 End-->

<!-- Block 12 -->
<div class="block"><div class="buchstaben">12</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right"></div>		
	</div>	
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right minus50"></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 12 End-->

<!-- Block 13 -->
<div class="block"><div class="buchstaben">13</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right"></div>		
	</div>	
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right minus50"></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 13 End-->

<!-- Block 14 -->
<div class="block"><div class="buchstaben">4</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right"></div>
	</div>	
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="seule pull-right minus50"></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal plus10"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 14 End-->

<!-- Block 15 -->
<div class="block"><div class="buchstaben">15</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>	
	</div>	
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 15 End-->

<div class="flur1"></div>

<!-- Block 16 -->
<div class="block"><div class="buchstaben"style="left:-7px;">16</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>	
	</div>	
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>	
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 16 End-->
<div class="flur3"></div>
<div class="blocklager">
	<div class="block2" style="float:right;margin-right:400px;">
		<div class="line2">
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		</div>
		<div class="line2">
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		</div>
		<div class="line2">
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
			<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		</div>	
	</div>
	<span>BLOCKLAGER</span>
</div>

<!-- Block 17 -->
<div class="block paddingUnten"><div class="buchstaben" style="left:114px;">17</div>
	<div class="line"><!--Linie-->		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->	
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
	<div class="line"><!--Linie-->
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
	</div>
</div>
<!-- Block 17 End-->

<div class="sperrlager"><span>SPERRLAGER</span></div>

</div>
</div><!-- Dragscroll-->

<!-- RECORD MODAL END -->
<div class="modal fade" id="quickRecordModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Nur Modell hinzuf&uuml;gen</h4>
            </div>
            <div class="modal-body">
                <div class="ajax-data1"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#quickRecordModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
		console.log(rowid);
        $.ajax({
            type : 'post',
            url : 'quickRecordAjax.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.ajax-data1').html(data);//Show fetched data from database
            }
        });		
     });	 
});
</script>
<!-- QUICK RECORD MODAL END -->

<!-- RECORD MODAL -->
<div class="modal fade" id="recordModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modell hinzuf&uuml;gen</h4>
            </div>
            <div class="modal-body">
                <div class="ajax-data2"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#recordModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
		console.log(rowid);
        $.ajax({
            type : 'post',
            url : 'RecordAjax.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.ajax-data2').html(data);//Show fetched data from database
            }
        });		
     });	 
});
</script>
<!-- RECORD MODAL END -->

<!-- EDIT MODAL -->
<div class="modal fade" id="editModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">St&uuml;ckzahl &auml;ndern</h4>
            </div>
            <div class="modal-body">
                <div class="ajax-data3"></div>
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
        var pal = $(e.relatedTarget).data('pal');
        var id = $(e.relatedTarget).data('id');
        var pcs = $(e.relatedTarget).data('pcs');
        var cnt = $(e.relatedTarget).data('cnt');
		console.log(id);
        $.ajax({
            type : 'post',
            url : 'editAjax.php', //Here you will fetch records 
            data : {'pal':pal, 'id':id, 'pcs':pcs, 'cnt':cnt}, //Pass $id
            success : function(data){
            $('.ajax-data3').html(data);//Show fetched data from database
				console.log("Functioniert");
            }
        });		
     });	 
});
</script>
<!-- EDIT MODAL END -->

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title red">Modell l&ouml;schen</h4>
            </div>
            <div class="modal-body">
                <div class="ajax-data4"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#deleteModal').on('show.bs.modal', function (e) {
        var palid = $(e.relatedTarget).data('palette');
        var rowid = $(e.relatedTarget).data('id');
		console.log(palid);
        $.ajax({
            type : 'post',
            url : 'deleteAjax.php', //Here you will fetch records 
            data : {'palid':palid, 'rowid':rowid}, //Pass $id
            success : function(data){
            $('.ajax-data4').html(data);//Show fetched data from database
				console.log("Functioniert");
            }
        });		
     });	 
});
</script>
<!-- DELETE MODAL END -->

<!-- DELETE ALL MODAL -->
<div class="modal fade" id="deleteAllModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title red">Alles l&ouml;schen</h4>
            </div>
            <div class="modal-body">
                <div class="ajax-data5"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function(){
    $('#deleteAllModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
		console.log(rowid);
        $.ajax({
            type : 'post',
            url : 'deleteAllAjax.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.ajax-data5').html(data);//Show fetched data from database
				console.log("Functioniert");
            }
        });		
     });	 
});
</script>
<!-- DELETE ALL MODAL END -->

<!-- PALETTEN UMZUG -->
 <script>
function umzugFunction(name) {  // Palette verschieben Function
	var ids = name;   //get Id onclick	
	$("#masages").html("<div class='alert alert-info' style='padding:10px 20px 22px;margin:10px 0 9px;'><h3 class='PalAusw pull-left'>Bitte neuen Platz f&uuml;r Palette <span class='label label-default'>" +ids+ "</span>  ausw&auml;hlen! <span class='glyphicon glyphicon-arrow-down'></span></h3><a class='btn btn-danger pull-right' href='index.php'><span class='glyphicon glyphicon-ban-circle'></span> Verschieben Abbrechen</a><div>&nbsp;</div></div>");
	$("#"+ids ).addClass("activePalette");
	$(".PaletteLink").addClass("animationColor");
	
	// If Firs Function Active Start this Function  
	if (typeof ids  === 'undefined' || ids  === null){			
	}else{	
		$(".PaletteLink").on("click", function(){	// 2 Palette SELECT
			var neuID = $(this).attr('id');	// 2 ID Variable  		
			//var neuID = event.target.id;	// 2 ID Variable  		
			console.log("2 -ID:" +neuID);
			$(".PaletteLink").removeAttr("data-toggle"); // Dropdown OFF							
			if(ids == neuID){}else{	// function + Modal nur wenn andere Palette ausgew&auml;hlt	
				$.ajax({ // Ajax request in DB
					type: "POST",
					url: "umzugAjax.php",
					data : {'neuID':neuID, 'altID':ids},
					success: function(html){										
						$('.data-ajax6').html(html);					
					}
				});// Ajax request end		
				$('#changePalette').modal(); // Run Modal 		
				$('#changePalette form').attr("action","umzug.php?firstid="+ids+"&secondid="+neuID); // Run Modal 	
			} // END function + Modal nur wenn andere Palette ausgew&auml;hlt			
		});		
	}	
};
</script>
<div class="modal fade" id="changePalette" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Palette verschieben</h4>
            </div>
            <div class="modal-body">
                <div class="">
				<div class="data-ajax6 text-center"></div>
				<form method="post" action="" class="form-group">	
					<p>&nbsp;</p>	
					<button class="btn btn-success width50 pull-left" value="add" type="submit" name="add"><span class="glyphicon glyphicon-ok"></span> Ja Palette verschieben </button>	
					<a type="button" class="btn btn-default width50 pull-right" href="index.php"><span class="glyphicon glyphicon-ban-circle red"></span> Verschieben Abbrechen</a>	
					<p>&nbsp;</p>
				</form>
				
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"> <span class="glyphicon glyphicon-cog"></span> Andere Palette ausw&auml;hlen</button>
            </div>
        </div>
    </div>
</div>
<!-- PALETTEN UMZUG END -->

<!-- Script for Dropdown Automatic floating  Right or Left -->
<script>
$(document).ready(function(){	
	$('.dropdown-toggle').click(function() {
        var dropdownList = $('.dropdown-menu');
        var dropdownOffset = $(this).offset();
        var offsetLeft = dropdownOffset.left;
        var dropdownWidth = dropdownList.width();
        var docWidth = $(window).width();                
        var subDropdown = $('.dropdown-menu').eq(1);
        var subDropdownWidth = subDropdown.width();        
        var isDropdownVisible = (offsetLeft + dropdownWidth <= docWidth);
        var isSubDropdownVisible = (offsetLeft + dropdownWidth + subDropdownWidth <= docWidth);        
        if (!isDropdownVisible || !isSubDropdownVisible) {
            $('.dropdown-menu').addClass('pull-right');
        } else {
            $('.dropdown-menu').removeClass('pull-right');
        }
	});	
});
</script>
<!-- END Script for Dropdown Automatic floating  Right or Left -->

<?php include_once("footer.php"); //Footer ?>





<?php } ?> <!-- If Eingelogt -->
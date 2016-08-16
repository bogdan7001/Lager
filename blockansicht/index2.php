<?php include_once("header.php"); //Header ?>
<script src="../js/dragscroll.js"></script>

<style>
.block .pal{overflow:visible; height:70px;}
.block .pal>div>div>a{height:35px;display:block;overflow:hidden;cursor:pointer;}
.block .pal>div>{overflow:hidden;}


.block2 .pal>div>div>a{height:35px;display:block;overflow:hidden;cursor:pointer;}
.block2 .pal>div>{overflow:hidden;}
</style>

<div class="container" id="masages">	
		<div class="col-lg-2"><br><a class="btn btn-success" href="../index.php"><span class="glyphicon glyphicon-home"></span>  Normale Ansicht</a></div>
		<div class="col-lg-6">		
			<script type="text/javascript">
			$(function() {
				$(".search_button").click(function() {
					// получаем то, что написал пользователь
					var searchString    = $("#search_box").val();
					// формируем строку запроса
					var data            = 'search='+ searchString;
					// если searchString не пустая
					if(searchString) {
						// делаем ajax запрос
						$.ajax({
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
						<input style="width:83%; float:left;"placeholder="Modell eingeben" type="text" name="search" id="search_box" class='search_box form-control'/>
						<input type="submit" value="Suchen" class="search_button btn btn-primary" /><br />
					</form>
				</div>
			</div>
		</div>
		<div class="col-lg-3"><br> <select id="results"  class="form-control"><option disabled selected >Gefundene Modelle</option></select></div>			
</div><!-- Conrainer END-->	
<div class="free dragscroll" style="width:100%;height:950px;overflow:scroll;cursor:grab;cursor:-o-grab;cursor:-moz-grab; cursor:-webkit-grab;">
<div class="allwidth">



<?php include_once("db.php");//Connecting to Datenbank ?>


<?php $Num =1;?>
<!-- block grau grau 1 --><!--[a1 - a32]-->
<div class="block grau"><div class="buchstaben">1</div>
	<div class="line">
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>		
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
		<div class="pal"><div class="one"><?php $paletteID = "a$Num"; $Num++; include("pal.php"); ?></div><div class="two"><?php $paletteID = "a$Num"; $Num++; include("pal.php");?></div></div>
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
<div class="block grau"><div class="buchstaben">2</div>
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
<div class="block grau"><div class="buchstaben">3</div>
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
<div class="block grau"><div class="buchstaben">4</div>
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
<div class="block grau"><div class="buchstaben">5</div>
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
<div class="block grau"><div class="buchstaben">6</div>
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
<div class="block grau"><div class="buchstaben">7</div>
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
<div class="block grau pull-right"><div class="buchstaben">8</div>
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

<!-- ************************ Untere Teil *****************************-->
<!-- Block 9 -->
<div class="block grau marginLeft54"><div class="buchstaben">9</div>
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
<div class="block grau"><div class="buchstaben">10</div>
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
<div class="block grau"><div class="buchstaben">11</div>
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
<div class="block grau"><div class="buchstaben">12</div>
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
<div class="block grau"><div class="buchstaben">13</div>
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
<div class="block grau"><div class="buchstaben">14</div>
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
<div class="block grau"><div class="buchstaben" style="left:55px;">15</div>
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
<div class="block grau"><div class="buchstaben"style="left:-7px;">16</div>
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
	<div class="block2 grau" style="float:right;margin-right:300px;">
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
<div class="block paddingUnten"><div class="buchstaben" style="left:114px;bottom:-110px;">17</div>
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

<?php mysql_close(); //Close connecting with Datenbank ?>

<script>// Onclick get data-id  from  a.PaletteLink  in Variable and load Palette content
$('.palLink').on('click', function () {
    var $el = $(this);
    var clickID = $el.data('id');
	$("ul."+clickID).load("datenbank.php?id="+clickID);
});
</script>





<!-- QUICK RECORD MODAL  -->
<div class="modal fade quickRecordModal" id="quickRecordModal" role="dialog">
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
    $('.quickRecordModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
		console.log("RowID:"+rowid);
        $.ajax({
            type : 'post',
            url : 'quickRecordAjax.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){				
            $('.ajax-data1').html(data);//Show fetched data from database
			console.log("ajax-data OK")
            }
        });			
     });	
	 return false; 
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
            url : 'recordAjax.php', //Here you will fetch records 
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
		console.log("Palid:" +palid);
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
	 return false;  
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
//--------------------------------------------------------------- 1 ---------------------------------------------------------------------//   
function umzugFunction(name) {  // Palette verschieben Function
	var ids = name;   //get Id onclick	
	console.log(" ID 1 :"+ ids);
	$("#masages").html("<div class='alert alert-info' style='padding:10px 20px 22px;margin:10px 0 9px;'><h3 class='PalAusw pull-left'>Bitte neuen Platz f&uuml;r Palette <span class='label label-default'>" +ids+ "</span>  ausw&auml;hlen! <span class='glyphicon glyphicon-arrow-down'></span></h3><a class='btn btn-danger pull-right' href='index.php'><span class='glyphicon glyphicon-ban-circle'></span> Verschieben Abbrechen</a><div>&nbsp;</div></div>");	
	$("#"+ids ).addClass("activePalette");
	$(".palLink").addClass("animationColor");
		
//----------------------------------------------------------------------------------------------------------------------------------//



// ------------------------------------------------------------- 2 ----------------------------------------------------------------//
		if (typeof ids  === 'undefined' || ids  === null){			
	}else{	
	

		$(".palLink").bind("click.myEvents", function (){	// 2 Palette SELECT		
			var neuID = $(this).attr('id');	// 2 ID Variable  		 		
			console.log("ID 1: "+ids+"ID 2:" +neuID);		
			$(".palLink").removeAttr("data-toggle"); // Dropdown OFF				
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
				//$('#changePalette form').attr("action","umzug.php?firstid="+ids+"&secondid="+neuID); // Run Modal 					
						
						var neuID2 = neuID;	// 2 ID Variable  
					
					
					
					
					$(".change").bind("click.myEvents2", function() {
						
						console.log("SUBMIT : "+ids+","+neuID2);
						$.ajax({
						type: "POST",
						url: "umzug.php?firstid="+ids+"&secondid="+neuID,
						data: "?firstid="+ids+"&secondid="+neuID,
						success: function(msg){ 
							$('.data-ajax6').html("<?=$id?><center><h3 class='alert alert-success'><br>Palette  <span class='label label-default'>"+ids+"</span>  in <span class='label label-success'>"+neuID+"</span> ist verschoben<br><br></h3></center>");			
								/* Palette Check und Reload */	
								$.ajax({
									type: "POST",
									success: function(){
										$("#"+ids ).removeClass("activePalette");
										$(".palLink").removeClass("animationColor");
										$('#'+ids).load("palcheck.php?id="+ids);
										$('#'+neuID).load("palcheck.php?id="+neuID);
									 	$('#'+ids).css("background-color","#D9534F");					
										$('#'+neuID).css("background-color","#5CB85C");					
										setTimeout(function(){ $('#'+ids).css("background-color",""); },3000);					
										setTimeout(function(){ $('#'+neuID).css("background-color",""); },3000);
																			
										$(".palLink").addClass("data-toggle");											
										$(".palLink").attr("data-toggle" , "dropdown");											
										$('.palLink').unbind("click.myEvents");	
										$('.change').unbind("click.myEvents2");	
									}	
								});/* End Palette Check und Reload */										
								/* modal close */setTimeout(function(){ $('#changePalette').modal('hide'); },800);/* end modal close */	
								
					    	}// Success END	
						
						
						}); // $ajax END
						
						return false; 
						});	
			} // END function + Modal nur wenn andere Palette ausgew&auml;hlt			
		});	
	

	
	
	
	
	
	
	

	}//else END	
	return false;
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
				<div class="data-ajax6 text-center"></div>
				<form method="post" action="" class="form-group change">	
					<p>&nbsp;</p>	
					<button class="btn btn-success width50 pull-left" value="add" type="submit" name="add"><span class="glyphicon glyphicon-ok"></span> Ja Palette verschieben </button>	
					<a type="button" class="btn btn-default width50 pull-right" href="index.php"><span class="glyphicon glyphicon-ban-circle red"></span> Verschieben Abbrechen</a>	
					<p>&nbsp;</p>
				</form>			
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
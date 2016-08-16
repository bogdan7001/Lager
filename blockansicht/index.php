<?php include_once("header.php"); //Header ?>
<script src="../js/dragscroll.js"></script>

<div class="container">	
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
<div style="width:3202px;">


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

<?php 

mysql_close(); //Close connecting with Datenbank
?>


<script>// Onclick get data-id  from  a.PaletteLink  in Variable and load Palette content
$('.palLink').on('click', function () {
    var $el = $(this);
    var clickID = $el.data('id');
	$("ul."+clickID).load("datenbank.php?id="+clickID);
});
</script>



<?php include_once("footer.php"); //Footer ?>
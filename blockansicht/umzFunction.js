	var ids = name;   //get Id onclick	
	console.log(" id Nr.1 :"+ ids);
	$("#masages").html("<div class='alert alert-info' style='padding:10px 20px 22px;margin:10px 0 9px;'><h3 class='PalAusw pull-left'>Bitte neuen Platz f&uuml;r Palette <span class='label label-default'>" +ids+ "</span>  ausw&auml;hlen! <span class='glyphicon glyphicon-arrow-down'></span></h3><a class='btn btn-danger pull-right' href='index.php'><span class='glyphicon glyphicon-ban-circle'></span> Verschieben Abbrechen</a><div>&nbsp;</div></div>");	
	$("#"+ids ).addClass("activePalette");
	$(".palLink").addClass("animationColor");
	
	
	// If Firs Function Active Start this Function  
	if (typeof ids  === 'undefined' || ids  === null){			
	}else{	
		console.log("Teil 2");
		//$(".palLink").addClass("umz");
		$(".palLink").bind("click.myEvents", function (){	// 2 Palette SELECT
		
			var neuID = $(this).attr('id');	// 2 ID Variable  		 		
			console.log("2 -ID:" +neuID);
			$(".palLink").removeAttr("data-toggle"); // Dropdown OFF							
			
			if(ids == neuID){}else{	// function + Modal nur wenn andere Palette ausgew&auml;hlt	
				$.ajax({ // Ajax request in DB
					type: "POST",
					url: "umzugAjax.php",
					data : {'neuID':neuID, 'altID':ids},
					success: function(html){										
						$('.data-ajax6').html(html);	
							return false;
					}
				});// Ajax request end		
				
				$('#changePalette').modal(); // Run Modal 		
				//$('#changePalette form').attr("action","umzug.php?firstid="+ids+"&secondid="+neuID); // Run Modal 
					
					$(".change").submit(function(event) {
						console.log("Teil 3 Submit"+ids+","+neuID);
						$.ajax({
						type: "POST",
						url: "umzug.php?firstid="+ids+"&secondid="+neuID,
						data: "?firstid="+ids+"&secondid="+neuID,
						success: function(msg)
						{ 
							$('.data-ajax6').html("<?=$id?><center><h3 class='alert alert-success'><br>Palette  <span class='label label-default'>"+ids+"</span>  in <span class='label label-success'>"+neuID+"</span> ist verschoben<br><br></h3></center>");			
								/* Palette Check und Reload */	
								$.ajax({
									type: "POST",
									url: "",
									data: "",
									success: function(){
										$("#"+ids ).removeClass("activePalette");
										$(".palLink").removeClass("animationColor");
										$('#'+ids).load("palcheck.php?id="+ids);
										$('#'+neuID).load("palcheck.php?id="+neuID);
										$('#'+ids).css("background-color","#65C1BB");					
										$('#'+neuID).css("background-color","#65C1BB");					
										setTimeout(function(){ $('#'+ids).css("background-color",""); },3000);					
										setTimeout(function(){ $('#'+neuID).css("background-color",""); },3000);
																			
										$(".palLink").addClass("data-toggle");											
										$(".palLink").attr("data-toggle" , "dropdown");											
										$('.palLink').unbind("click.myEvents");
										
										
									}	
								});/* End Palette Check und Reload */										
								/* modal close */setTimeout(function(){ $('#changePalette').modal('hide'); },800);/* end modal close */	
								return false;
						}	
						});
						return false; 
						});	



				
			} // END function + Modal nur wenn andere Palette ausgew&auml;hlt			
		
		});	
	

	

	}//else END	
	return false;
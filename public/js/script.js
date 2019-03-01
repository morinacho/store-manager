$(document).ready(function(){
	// Init Isotope
	var $grid = $('.grid').isotope({ filter: '.grid-view' }); 
 
	// Filter items on button click
	$('.filter-button-group').click(function() {
		var filterValue = $(this).attr('data-filter'); 
		$grid.isotope({ filter: filterValue });
	});
	 
	// Image control
	$("#user-img").change('input[type=file]', function(e){

		image = this.files[0];
		
		// Obtenemos la ruta temporal mediante el evento
		var TmpPath = URL.createObjectURL(e.target.files[0]);
		// Mostramos la ruta temporal 
		$('#user-pic').css('background-image', 'url(' + TmpPath + ')');  

		// Image size control
		if (Number(image.size) < 2000000){
			// Image type control
			if (image.type == "image/jpeg" || image.type == "image/png"){
				 

			}
			else{
				alert("Tipo de archivo no valido");
			}
		}
		else{
			alert("Imagen demasiado grande");
		}
	});

	// Buttons style
	$('.view-button a').click(function(){
		if($(this).attr('id') == 'list-view'){
			$('#list-view').removeClass('text-reset');
			$('#grid-view').addClass('text-reset');
		}
		else{
			$('#list-view').addClass('text-reset');
			$('#grid-view').removeClass('text-reset');
		} 
	});

});
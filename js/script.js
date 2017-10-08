function cambiarMunicipios(){
	$('#municipio').html('<option selected>Cargando</option>');
	var idProvincia= $('#provincia').val();
	$.ajax({
    // aqui va la ubicación de la página PHP
      url: 'functions/controller_territorios.php?provincia='+idProvincia+'&action=actualizarselect',
      type: 'POST',
      dataType: 'html',
      success:function(response){
      	$('#municipio').html(response);
      }
  	});
}
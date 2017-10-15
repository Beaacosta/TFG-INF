<?php 
$accion = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
if($accion=="actualizarselect"){
	$provincia= filter_input(INPUT_GET, 'provincia', FILTER_SANITIZE_SPECIAL_CHARS);
	$provincia = (int) $provincia;
	$data_municipios = do_get_municipios_by_provincia($provincia);
	if(!$data_municipios):?>
	<option value="<?=$provincia ?>">bea</option> 
	<?php endif; 
	if($data_municipios): ?>
		<option value="12">jeje</option>
	<?php endif; 
	
}
function do_get_municipio_by_id($id){
	// En front controller nos conectamos automáticamente. Solo tenemos que usar la variable global
	global $link;

	// Recogida y saneamiento de una id
	$id = (int) $id;
	$provincia = (int) $provincia;

	// Creamos la sentencia y ejecutamos
	$sql = "SELECT municipio FROM municipios
			WHERE id = $id";
	$result = mysqli_query($link,$sql);

	$num_rows = mysqli_num_rows($result);

	// Si la tabla que me ha devuelto no tiene filas, devuelve falso
	if( $num_rows < 1 ){
		return false;
	}
	return mysqli_fetch_assoc($result);
}

function do_get_provincia_by_id($id){
	// En front controller nos conectamos automáticamente. Solo tenemos que usar la variable global
	global $link;

	// Recogida y saneamiento de una id
	$id = (int) $id;

	// Creamos la sentencia y ejecutamos
	$sql = "SELECT provincia FROM provincias
			WHERE id = $id";
	$result = mysqli_query($link,$sql);

	$num_rows = mysqli_num_rows($result);

	// Si la tabla que me ha devuelto no tiene filas, devuelve falso
	if( $num_rows < 1 ){
		return false;
	}
	return mysqli_fetch_assoc($result);
}

function do_get_provincia_by_municipio($id){
	// En front controller nos conectamos automáticamente. Solo tenemos que usar la variable global
	global $link;

	// Recogida y saneamiento de una id
	$id = (int) $id;
	// Creamos la sentencia y ejecutamos
	$sql = "SELECT provincia FROM municipios
			WHERE id = '$id'";
	$result = mysqli_query($link,$sql);

	$num_rows = mysqli_num_rows($result);

	return mysqli_fetch_assoc($result);
}

function do_obtener_provincias(){
	global $link;
	$sql = "SELECT * FROM provincias 
			ORDER BY provincia";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;	
}

function do_get_municipios_by_provincia($provincia){
	global $link;
	// Creamos la sentencia y ejecutamos
	$sql = "SELECT * FROM municipios
			WHERE provincia = '$provincia' ORDER BY municipio";
	$result = mysqli_query($link,$sql);
	$num_rows = mysqli_num_rows($result);
	if( $num_rows < 1 ){
		return false;
	}
	return $result;
}

 ?>
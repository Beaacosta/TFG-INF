<?php 

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
			WHERE id = $id";
	$result = mysqli_query($link,$sql);

	$num_rows = mysqli_num_rows($result);

	return mysqli_fetch_assoc($result);
}
 ?>


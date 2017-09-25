<?php 
function do_anyadir_finca(){
	//controlar nulos
	global $link;
	$nombre = filter_input(INPUT_POST, 'nombre');
	$direccion = filter_input(INPUT_POST, 'direccion');
	$provincia = filter_input(INPUT_POST, 'provincia');
	$municipio = filter_input(INPUT_POST, 'numicipio');
	$agregado = filter_input(INPUT_POST, 'agregado');
	$zona = filter_input(INPUT_POST, 'zona');
	if( !$nombre || !$provincia || !$municipio){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_FINCA_VOID');
		exit;
	}
	$sql = "SELECT * FROM fincas WHERE nombre = '$nombre'";
	$result = mysqli_query($link,$sql);
	if(  mysqli_num_rows($result) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_FINCA_EXISTS' );
		exit;
	}
	$sql = "INSERT INTO fincas(nombre,direccion,provincia,municipio,agregado,zona) VALUES('$nombre','$direccion','$provincia','$municipio', '$agregado', '$zona')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_FINCA_FALSE' );
		exit;
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_FINCA_REG');
}

function do_anyadir_parcela(){
	//controlar existe finca
	global $link;
	$finca = filter_input(INPUT_POST, 'finca');
	$poligono = filter_input(INPUT_POST, 'poligono');
	$parcela = filter_input(INPUT_POST, 'parcela');
	$superficie = filter_input(INPUT_POST, 'superficie');
	if( !$finca || !$poligono || !$parcela || !$superficie){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_PARCELA_VOID');
		exit;
	}
	// ????
	$sql = "SELECT * FROM parcelas WHERE finca = '$finca'";
	$result = mysqli_query($link,$sql);
	if(  mysqli_num_rows($result) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_PARCELA_EXISTS' );
		exit;
	}
	$sql = "INSERT INTO parcelas(finca,poligono,parcela,superficie) VALUES('$finca','$poligono','$parcela','$superficie')";
	$result = mysqli_query($link,$sql);
	$id = mysqli_insert_id($link);
	if( !$id ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_PARCELA_FALSE' );
		exit;
	}
	header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_PARCELA_REG');
}

function do_eliminar_finca(){
	global $link;
	$id = filter_input(INPUT_GET, 'fid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_FINCA_VOID');
		exit;
	}
	$sql = "DELETE FROM fincas WHERE id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_FINCA_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_FINCA_DELETE');
	}
	exit;
}
function do_eliminar_parcela(){
	global $link;
	$id = filter_input(INPUT_GET, 'pid');
	$id = (int) $id;
	if(!$id){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_PARCELA_VOID');
		exit;
	}
	$sql = "DELETE FROM parcelas WHERE id = $id";
	$return = mysqli_query($link,$sql);
	if( mysqli_affected_rows($link) > 0 ){
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=OK_PARCELA_DELETE');
	}else{
		header('Location:' . $_SERVER['PHP_SELF'] . '?e=ERR_PARCELA_DELETE');
	}
	exit;
}
 ?>
<?php
$link = connect_db();
$accion = filter_input(INPUT_GET, 'accion', FILTER_SANITIZE_SPECIAL_CHARS);

switch ($accion) {
	case 'iniciar_sesion': do_iniciar_sesion(); break;
	case 'registrarse': do_registrarse(); break;
	case 'cerrar_sesion': do_cerrar_sesion(); break;
}
?>
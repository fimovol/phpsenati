<?php 

	include_once("controlador-cliente.php");
	$ctrProd = new ControladorCliente();

	$accion = $_POST['txtSolicitud'];
	$ctrProd->Procesar($accion);

?>
<?php 

	include_once("modelo.php");

	/**
	 * 
	 */

	// Se crea para controlar las solictudes del Cliente
	class ControladorProducto
	{
		
		function __construct()
		{
			
		}

		public function Procesar($solicitud){

			$Producto = new Producto();

			if ($solicitud=="Vista") {
				#Ejejcutar el metodo Vista
				echo $Producto->Vista();
			}elseif ($solicitud=="Crear") {
				$Producto->Nombre = $_POST['txtNom'];
				$Producto->Categoria = $_POST['txtCat'];
				$Producto->Proveedor = $_POST['txtPrv'];
				$Producto->Precio = $_POST['txtPre'];
				$Producto->Stock = $_POST['txtStk'];
				$Producto->Crear();
			}


		}
	}




?>
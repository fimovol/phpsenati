<?php 

	include_once("../modelo.php");

	/**
	 * 
	 */

	// Se crea para controlar las solictudes del Cliente
	class ControladorCliente
	{
		
		function __construct()
		{
			
		}

		public function Procesar($solicitud){

			$Cliente = new Cliente();

			if ($solicitud=="Vista") {
				#Ejejcutar el metodo Vista
				echo $Cliente->Vista();
			}elseif ($solicitud=="Crear") {
				$Cliente->ContactName = $_POST['ContactName'];
				$Cliente->Addres = $_POST['Addres'];
				$Cliente->City = $_POST['City'];
				$Cliente->Country = $_POST['Country'];
				$Cliente->Phone = $_POST['Phone'];
                $Cliente->CompanyName = $_POST['CompanyName'];
				$Cliente->Crear();
			}


		}
	}




?>
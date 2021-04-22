<?php 
	
	// Clase para establecer la conexion a la Base de datos Northwind

	/**
	 * 
	 */
	class Pdoconexion
	{	
		private $Bdatos; # Nombre de la Base de datos
		private $User; # Nombre de Usuario
		private $Pass; # Password de acceso
		
		function __construct($bdatos, $user, $pass)
		{
			$this->Bdatos=$bdatos;
			$this->User=$user;
			$this->Pass=$pass;	
		}

		// Metodo para conectarse a la Base de Datos
		public function Conectar(){
			$cn = new PDO('mysql:host=127.0.0.1:3306; dbname='.$this->Bdatos, $this->User, $this->Pass);
			return $cn;
		}
	}

?>
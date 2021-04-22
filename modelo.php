<?php 

// Representacion de la BD northwind


#Clase Producto (Tabla Products)
#Nota: Debe crear los sp a la Tabla Products

/**
 * 
 */

// Importar las librerias (Componentes de mi aplicacion) a utilzar
include_once("conexion.php");

class Producto
{
	
	function __construct()
	{
		$objcn = new Pdoconexion("northwind", "root", "");
		$this->Pdo = $objcn->Conectar();
	}

	// Los Atributos (Los campos utilizados en los sp)
	public $Codigo;
	public $Nombre;
	public $Categoria;
	public $Proveedor;
	public $Precio;
	public $Stock;

	// Añadir el Atributo Pdo
	private $Pdo;

	// Los Metodos CRUD y Vista
	public function Crear(){
		#Debe ejecutar sp_CrearProducto
		$stm = $this->Pdo->prepare("call cp_crearproducto(:dato1, :dato2, :dato3, :dato4, :dato5)");
		$stm->bindParam(":dato1", $this->Nombre);
		$stm->bindParam(":dato2", $this->Categoria);
		$stm->bindParam(":dato3", $this->Proveedor);
		$stm->bindParam(":dato4", $this->Precio);
		$stm->bindParam(":dato5", $this->Stock);
		$resultado = $stm->execute();
		if ($resultado) {
			echo "<p>Registro Guardado</p>";
			echo "<p><a href='vista-producto.php'>Regresar</a>";
		}else{
			echo "<p> Error</p>";
		}
	}
	
	public function Actualizar(){
		#Debe ejecutar sp_ActualizarProducto
	}
	public function Buscar(){
		#Debe ejecutar sp_BuscarProducto
	}
	public function Eliminar(){
		#Debe ejecutar sp_EliminarProducto
	}
	public function Vista(){
		#Debe ejecutar sp_VistaProducto
		$stm = $this->Pdo->prepare("call cp_vistaproducto");
		$stm->execute();
		#Obtener los registros devueltos por el sp
		$reg = $stm->FetchAll(PDO::FETCH_OBJ);

		#Estos reg deben ser enviados a la vista-productos como una tabla html
		#Para esto se crea una variable de texto llamada $tabla
		$tabla="";

		if ($stm) { #Si stm es True (Si hay registros devueltos)
			#Recorrer el objeto $reg para imprimir los registros devueltos en formato html
			foreach ($reg as $Prod) {
				$tabla = $tabla."<tr>".
					"<td>".$Prod->ProductID."</td>".
					"<td>".$Prod->ProductName."</td>".
					"<td>".$Prod->CategoryID."</td>".
					"<td>".$Prod->SupplierID."</td>".
					"<td>".$Prod->UnitPrice."</td>".
					"<td>".$Prod->UnitsInStock."</td>".
					"</tr>";
			}
		}else{
			$tabla = "<tr><td colspan='8'>No existen registros</td></tr>";
		}
		return $tabla;

	}	

}
class Cliente{
	function __construct()
	{
		$objcn = new Pdoconexion("northwind", "root", "");
		$this->Pdo = $objcn->Conectar();
	}
	public $ContactName;
	public $Addres;
	public $City;
	public $Country;
	public $Phone;
	public $CompanyName;

	public function crear(){
		
		
		$stm = $this->Pdo->prepare("call cp_crearcliente(:dato1, :dato2, :dato3, :dato4, :dato5, :dato6, :dato7)");
		$stm->bindParam(":dato1", $id);
		$stm->bindParam(":dato2", $this->ContactName);
		$stm->bindParam(":dato3", $this->Addres);
		$stm->bindParam(":dato4", $this->City);
		$stm->bindParam(":dato5", $this->Country);
		$stm->bindParam(":dato6", $this->Phone);
		$stm->bindParam(":dato7", $this->CompanyName);
		$resultado = $stm->execute();
		if ($resultado) {
			echo "<p>Registro Guardado</p>";
			echo "<p><a href='vista-cliente.php'>Regresar</a>";
		}else{
			echo "<p> Error</p>";
		}
	}
	public function read(){
		
	}
	public function update(){
		
	}
	public function delete(){
		
	}
	public function vista(){
		$stm = $this->Pdo->prepare("call cp_vistacliente");
		$stm->execute();
		#Obtener los registros devueltos por el sp
		$reg = $stm->FetchAll(PDO::FETCH_OBJ);

		#Estos reg deben ser enviados a la vista-productos como una tabla html
		#Para esto se crea una variable de texto llamada $tabla
		$tabla="";

		if ($stm) { #Si stm es True (Si hay registros devueltos)
			#Recorrer el objeto $reg para imprimir los registros devueltos en formato html
			foreach ($reg as $Cli) {
				$tabla = $tabla."<tr>".
					"<td>".$Cli->ContactName."</td>".
					"<td>".$Cli->Address."</td>".
					"<td>".$Cli->City."</td>".
					"<td>".$Cli->Country."</td>".
					"<td>".$Cli->Phone."</td>".
					"<td>".$Cli->CompanyName."</td>".
					"</tr>";
			}
		}else{
			$tabla = "<tr><td colspan='8'>No existen registros</td></tr>";
		}
		return $tabla;
	}
}

#Clase Cliente (Tabla Customers)
#Nota: Debe crear los sp a la Tabla Customers

?>
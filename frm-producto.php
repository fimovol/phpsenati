<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<title>Producto</title>
</head>
<body>
	<header>
		<?php 

			$accion = $_GET['solicitud'];

			if ($accion == "Nuevo") {
				$accion = "Crear";
			}

		?>
		
	</header>
	<body>
		<form method="POST" action="procesos-post.php">
			<input type="hidden" name="txtSolicitud" value=<?php echo $accion; ?>>
			<input type="hidden" name="txtCod">
			<p class="form-group w-25 p-3 m-auto">	
				<label>Nombre</label>
				<input type="text" class="form-control" name="txtNom">
			
				<label>Categoria</label>
				<input type="number" class="form-control" name="txtCat">
			
				<label>Proveedor</label>
				<input type="number" class="form-control" name="txtPrv">
			
				<label>Precio</label>
				<input type="number" class="form-control" name="txtPre">
			
				<label>Stock</label>
				<input type="number" class="form-control" name="txtStk">
			
				<input type="submit" class="btn btn-primary m-1 px-5" name="" value="Guardar">
			</p>
		</form>
	</body>
	<footer>
		
	</footer>

</body>
</html>
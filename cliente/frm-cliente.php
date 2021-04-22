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
				<input type="text" class="form-control" name="ContactName">
			
				<label>direccion</label>
				<input type="text" class="form-control" name="Addres">
			
				<label>ciudad</label>
				<input type="text" class="form-control" name="City">
			
				<label>pais</label>
				<input type="text" class="form-control" name="Country">
			
				<label>telefono</label>
				<input type="text" class="form-control" name="Phone">

                <label>nombre de compañia</label>
				<input type="text" class="form-control" name="CompanyName">
			
				<input type="submit" class="btn btn-primary m-1 px-5" name="" value="Guardar">
			</p>
		</form>
	</body>
	<footer>
		
	</footer>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Vista Producto</title>
	<link rel="stylesheet" href="style.css">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
	<header class="card-body">
		<div class="d-flex justify-content-between">
			<h1>Lista de PRODUCTOS</h1>
			<p><a class="btn btn-success" href="cliente/vista-cliente.php">clientes</a></p>
		</div>
		<p><a class="btn btn-primary" href="frm-producto.php?solicitud=Nuevo">Crear Nuevo Registro</a></p>
	</header>
	<main>	
		<table class="table table-dark table-hover table-borderless ">
			<thead>
				<tr>
					<th scope="col">Codigo</th>
					<th scope="col">Nombre</th>
					<th scope="col">Categoria</th>
					<th scope="col">Proveedor</th>
					<th scope="col">Precio</th>
					<th scope="col">Stock</th>
					
				</tr>
			</thead>
			<tbody>
				<?php 
					include_once("controlador-producto.php");
					$solicitud = "Vista";
					$ctrProd = new ControladorProducto();
					$ctrProd->Procesar($solicitud);
				?>
			</tbody>
			<tfoot></tfoot>
		</table>
	</main>
</body>
</html>
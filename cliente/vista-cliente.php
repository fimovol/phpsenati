<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>clientes</title>
</head>
<body>
    <header class="card-body">
		<div class="d-flex justify-content-between">
			<h1>Lista de CLIENTES</h1>
			<p><a class="btn btn-danger" href="../vista-producto.php">productos</a></p>
		</div>
		<p><a class="btn btn-primary" href="frm-cliente.php?solicitud=Nuevo">Crear Nuevo Cliente</a></p>
	</header>
    <main>	
		<table class="table table-dark table-hover table-borderless ">
			<thead>
				<tr>
					<th scope="col">nombre</th>
					<th scope="col">direccion</th>
					<th scope="col">ciudad</th>
					<th scope="col">pais</th>
					<th scope="col">telefono</th>
					<th scope="col">company name</th>
					
				</tr>
			</thead>
			<tbody>
				<?php 
					include_once("controlador-cliente.php");
					$solicitud = "Vista";
					$ctrProd = new ControladorCliente();
					$ctrProd->Procesar($solicitud);
				?>
			</tbody>
			<tfoot></tfoot>
		</table>
	</main>
</body>
</html>
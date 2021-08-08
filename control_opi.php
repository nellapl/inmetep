<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "includes/scripts.php"; ?>
	<title>Manuales | INMETEP</title>
</head>
<body>
	<!-- Modal -->
	<?php include "includes/modal.php"; ?>
	<!-- NAVEGACION -->
	<?php include "includes/nav.php"; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<?php include "includes/sidebar.php"; ?>
			</div>
			<div class="col-md-9">
				<?php include "includes/menu.php"; ?>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-header text-center">
								<h5 class="card-title">SOLICITUD DE ORDEN DE PRODUCCION INTERNA (OPI)</h5>
							</div>
							<div class="card-body">
								<form class="row g-3">
									<div class="col-md-2">
										<label for="opi" class="form-label">OPI Nº</label>
										<input type="text" class="form-control" id="opi" disabled placeholder="0001-21">
									</div>
									<div class="col-md-2">
										<label for="cantidad" class="form-label">Cantidad</label>
										<input type="number" class="form-control" id="cantidad">
									</div>
									<div class="col-md-6">
										<label for="producto" class="form-label">Piezas y Accesorios</label>
										<select id="producto" class="form-select">
											<option value="1">Bisagras</option>
											<option value="2">Orejas</option>
											<option value="3">Varillajes</option>
											<option value="4">Porta-candado</option>
											<option value="5">Porta-varillajes</option>
											<option value="6">Porta-planos</option>
											<option value="7">Omegas</option>
										</select>
									</div>
									<div class="col-md-2">
										<label for="fecha" class="form-label">Agregar</label>
										<input type="submit" class="form-control btn btn-success" id="fecha" value="Agregar">
									</div>
									<div class="col-md-12 text-center">
										<button class="btn btn-primary">PROCESAR</button>
										<button class="btn btn-danger">ANULAR <i class="fas fa-trash"></i></button>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card mt-3">
							<div class="card-header">
								<h5 class="card-title">LISTA DE PIEZAS</h5>
							</div>
							<div class="card-body">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">Nro.</th>
											<th scope="col">Cantidad</th>
											<th scope="col">Descripcion</th>
											<th scope="col">Fecha</th>
											<th class="text-center" scope="col">Acciones</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">001</th>
											<td>2</td>
											<td>Varillajes</td>
											<td>15-01-2021</td>
											<td class="text-center">
												<a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<th scope="row">002</th>
											<td>10</td>
											<td>Porta-planos</td>
											<td>15-01-2021</td>
											<td class="text-center">
												<a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<th scope="row">003</th>
											<td>10</td>
											<td>Omegas</td>
											<td>15-01-2021</td>
											<td class="text-center">
												<a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<th scope="row">004</th>
											<td>100</td>
											<td>Bisagras</td>
											<td>15-01-2021</td>
											<td class="text-center">
												<a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
									</tbody>
								</table>
								<nav aria-label="Page navigation example">
									<ul class="pagination justify-content-center">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
										</li>
										<li class="page-item"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item">
											<a class="page-link" href="#">Next</a>
										</li>
									</ul>
								</nav>
							</div>							
						</div>						
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>
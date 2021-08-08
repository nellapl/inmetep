
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "includes/scripts.php"; ?>
	<title>Proyectos | INMETEP</title>
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
								<h5 class="card-title">LISTA ORDENES DE PRODUCCION INTERNA</h5>
							</div>
							<div class="card-body">
								<table class="table table-striped">
									<thead>
										<tr>
											<th scope="col">OPI Nro.</th>
											<th scope="col">Cliente</th>
											<th scope="col">Descripcion</th>
											<th scope="col">Fecha</th>
											<th scope="col">Acciones</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">001-21</th>
											<td>PLANTA</td>
											<td>Partes Estandar</td>
											<td>15-01-2021</td>
											<td>
												<a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
												<a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<th scope="row">002-21</th>
											<td>MYZ Ingenieria</td>
											<td>Cajas de paso</td>
											<td>19-07-2021</td>
											<td>
												<a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
												<a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
											</td>
										</tr>
										<tr>
											<th scope="row">003-21</th>
											<td>Ing. Wilfredo Sanchez</td>
											<td>Tablero Beta (800x400x100)</td>
											<td>21-07-2021</td>
											<td>
												<a href="#" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
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
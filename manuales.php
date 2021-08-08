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
					<div class="col-md-4">
						<div class="card text-center mb-3">
							<img src="img/amada.JPG" class="card-img-top" alt="">
							<div class="card-body">
							<h5 class="card-title">AMADA</h5>
							<a href="amada.php" class="btn btn-danger">Ver manual PDF</a>
							</div>							
						</div>
						
					</div>
					<div class="col-md-4">
						<div class="card text-center mb-3">
							<img src="img/ensamble.jpg" class="card-img-top" alt="">	
							<div class="card-body">
								<h5 class="card-title">ENSAMBLE</h5>
								<a href="#" class="btn btn-danger">Ver manual PDF</a>
							</div>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="card text-center mb-3">
							<img src="img/soldadura.jpg" class="card-img-top" alt="">
							<div class="card-body">
								<h5 class="card-title">SOLDADURA</h5>
								<a href="#" class="btn btn-danger">Ver manual PDF</a>
							</div>
						</div>	
					</div>
					<div class="col-md-4">
						<div class="card text-center mb-3">
							<img src="img/doblado.jpg" class="card-img-top" alt="">
							<div class="card-body">
								<h5 class="card-title">DOBLADO</h5>
								<a href="#" class="btn btn-danger">Ver manual PDF</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card text-center mb-3">
							<img src="img/calidad.jpg" class="card-img-top" alt="">
							<div class="card-body">
								<h5 class="card-title">CALIDAD</h5>
								<a href="#" class="btn btn-danger">Ver manual PDF</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card">
							<div class="card-body">
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
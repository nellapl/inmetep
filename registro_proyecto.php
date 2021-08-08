<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "includes/scripts.php"; ?>
	<title>Proyecto | INMETEP</title>
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
								<h5 class="card-title">REGISTRO DE NUEVO PROYECTO</h5>
							</div>
							<div class="card-body">
								<form class="row g-3">
									<div class="col-md-2">
										<label for="cot" class="form-label">Nº Cotizacion</label>
										<input type="text" class="form-control" id="cot" placeholder="0000-00-0000">
									</div>
									<div class="col-md-1">
										<label for="op" class="form-label">OP</label>
										<input type="text" class="form-control" id="op">
									</div>
									<div class="col-md-1">
										<label for="ot" class="form-label">OT</label>
										<input type="text" class="form-control" id="ot">
									</div>
									<div class="col-md-4">
										<label for="cliente" class="form-label">Cliente</label>
										<input type="text" class="form-control" id="cliente">
									</div>
									<div class="col-md-4">
										<label for="descripcion" class="form-label">Descripcion</label>
										<input type="text" class="form-control" id="descripcion">
									</div>
									<div class="col-md-3">
										<label for="obra" class="form-label">Obra</label>
										<input type="text" class="form-control" id="obra">
									</div>
									<div class="col-md-3">
										<label for="recibido" class="form-label">Recibido</label>
										<input type="date" class="form-control" id="recibido">
									</div>
									<div class="col-md-3">
										<label for="entrega" class="form-label">Requerido</label>
										<input type="date" class="form-control" id="entrega">
									</div>
									<div class="col-md-3">
										<label for="producto" class="form-label">Tipo de producto</label>
										<select id="producto" class="form-select">
											<option value="1">Caja Industrial</option>
											<option value="2">Gabinete</option>
											<option value="3">Tablero de Medidor</option>
											<option value="4">Cajas de paso</option>
										</select>
									</div>
									<div class="col-md-1">
										<label for="cantidad" class="form-label">Cantidad</label>
										<input type="number" class="form-control" id="cantidad">
									</div>
									<div class="col-md-4">
										<label for="dimensiones" class="form-label">Dimensiones</label>
										<input type="text" class="form-control" id="dimensiones" placeholder="Alto x ancho x profundidad">
									</div>
									<div class="col-md-2">
										<label for="aprobacion" class="form-label">Aprobacion?</label>
										<select id="aprobacion" class="form-select">
											<option value="1">SI</option>
											<option value="2">NO</option>
										</select>
									</div>
									<div class="col-md-3">
										<label for="f-aprob" class="form-label">Fecha de aprobacion</label>
										<input type="date" class="form-control" id="f-aprob">
									</div>
									<div class="col-md-2">
										<label for="registro" class="form-label">Registrar</label>
										<input type="submit" class="form-control btn btn-success" id="registro" value="Registrar">
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>
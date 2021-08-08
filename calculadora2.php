<?php

	$alto = 0;
	$ancho = 0;
	$tipocaja = '';
	$image = '';

	if (!empty($_POST))
	{
		$alert = '';
		if (empty($_POST['producto']) || empty($_POST['alto']) || empty($_POST['ancho']) || empty($_POST['profundidad']))
		{
			$alert = '<p class="text-center">Todos los campos son obligatorios!</p>';
			$codigo = '';

		}else{

			if ($_POST['producto'] == 1)
			{
				$tipocaja = 'INDUSTRIAL';
				$image = '<img class="img-fluid" src="img/test1.JPG" alt="tablerin">';
				$codigo = '
							<div class="card my-3">
								<div class="card-body">
									<h6>CODIGO CAJA INDUSTRIAL</h6>
									<p>
										O0150 ;<br>
										(LAMINA DE: 950 X 450 MM) <br>
										(T150 REC 20 X 10 90º)<br>
										(T315 CUA 20 X 20)<br>
										G92 X1000. Y1000. ;<br>
										X500. Y400. T150 ;<br>
										G37 I50. P2 J150. K15 ;<br>
										G72 X450. Y250. ;<br>
										G66 I250. J0. P20. T315 ;<br>
										G50 ;
									</p>
									<button class="btn btn-primary my-3" type="submit">Descargar</button>
								</div>
							</div>';

			}elseif ($_POST['producto'] == 2){

				$tipocaja = 'REMACHADA';
				$image = '<img class="img-fluid" src="img/test1.JPG" alt="tablerin">';
				$codigo = '
							<div class="card my-3">
								<div class="card-body">
									<h6>CODIGO CAJA REMACHADA</h6>
									<p>
										O0150 ;<br>
										(LAMINA DE: 950 X 450 MM) <br>
										(T150 REC 20 X 10 90º)<br>
										(T315 CUA 20 X 20)<br>
										G92 X1000. Y1000. ;<br>
										X500. Y400. T150 ;<br>
										G37 I50. P2 J150. K15 ;<br>
										G72 X450. Y250. ;<br>
										G66 I250. J0. P20. T315 ;<br>
										G50 ;
									</p>
									<button class="btn btn-primary my-3" type="submit">Descargar</button>
								</div>
							</div>';

			}else{

				$tipocaja = 'SOLDADA';
				$image = '<img class="img-fluid" src="img/test1.JPG" alt="tablerin">';
				$codigo = '
							<div class="card my-3">
								<div class="card-body">
									<h6>CODIGO CAJA SOLDADA</h6>
									<p>
										O0150 ;<br>
										(LAMINA DE: 950 X 450 MM) <br>
										(T150 REC 20 X 10 90º)<br>
										(T315 CUA 20 X 20)<br>
										G92 X1000. Y1000. ;<br>
										X500. Y400. T150 ;<br>
										G37 I50. P2 J150. K15 ;<br>
										G72 X450. Y250. ;<br>
										G66 I250. J0. P20. T315 ;<br>
										G50 ;
									</p>
									<button class="btn btn-primary my-3" type="submit">Descargar</button>
								</div>
							</div>';
			}

			$alto = $_POST['alto'];
			$ancho = $_POST['ancho'];
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "includes/scripts.php"; ?>
	<title>Calculadora | INMETEP</title>
</head>
<body>
	<!-- Modal -->
	<?php include "includes/modal.php"; ?>
	<!-- NAVEGACION -->
	<?php include "includes/nav.php"; ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<div class="card my-3">
					<div class="card-body">
						<h5 class="card-title text-center">Calculadora virtual <br>TROQUELADOS</h5>
						<div><?php echo isset($alert) ? $alert : ''; ?></div>
						<form class="form form-control" action="" method="POST">
							<label class="form-label" for="producto">Elija un producto</label>
							<select class="form-select" name="producto" id="producto">
								<option value="">SELECCIONE</option>
								<option value="1">CAJA INDUSTRIAL</option>
								<option value="2">CAJA REMACHADA</option>
								<option value="3">CAJA SOLDADA</option>
							</select>
							<label class="form-label" for="alto">Indique la altura</label>
							<input class="form-control" type="number" name="alto" id="alto" placeholder="alto">
							<label class="form-label" for="ancho">Indique el ancho</label>
							<input class="form-control" type="number" name="ancho" id="ancho" placeholder="ancho">
							<label class="form-label" for="profundidad">Indique profundidad</label>
							<input class="form-control" type="number" name="profundidad" id="profundidad" placeholder="profundidad">
							<button class="btn btn-primary my-3" type="submit">Procesar</button>
						</form>
					</div>							
				</div>
			</div>
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-8">
						<div class="card my-3">
							<div class="card-body">
								<h5 class="card-title text-center">Ahora la caja <?php echo $tipocaja ?> es de <?php echo $alto; ?> de alto x <?php echo $ancho; ?> de ancho</h5>
								<div>
									<?php echo $image; ?>				
								</div>								
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card my-3">
							<div class="card-body">
								<h4 class="card-title text-center">Generador <br>VIRTUAL</h4>
								<?php echo isset($codigo) ? $codigo : ''; ?>
							</div>							
						</div>						
					</div>
					
				</div>
			</div>
		</div>

	</div>
</body>
</html>
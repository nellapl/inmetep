<?php

	$alto = 0;
	$ancho = 0;
	$tipocaja = '';
	$image = '';
	$cuerpo = '';
	$tapa = '';
	$puerta = '';

	if (!empty($_POST))
	{
		$alert = '';
		if (empty($_POST['producto']) || empty($_POST['alto']) || empty($_POST['ancho']) || empty($_POST['profundidad']))
		{
			$alert = '<p class="text-center">Todos los campos son obligatorios!</p>';
			
			$display = '';

		}else{

			$altura = $_POST['alto'];
			$anchura = $_POST['ancho'];
			$prof = $_POST['profundidad'];
			$ancho_lam = $anchura+($prof*2)+117;
			$alto_lam = $altura - 3;
			$alto_puerta = $altura+20;
			$ancho_puerta = $anchura+30;
			$alto_df = $altura-80;
			$ancho_df = $anchura-30;

			if ($ancho_lam >= 1000)
			{
				$alert = '<p class="text-center">El ancho de la lamina supera<br>el area de trabajo, use troquelado especial</p>';
			}else{
				if ($_POST['producto'] == 1)
				{
					
					$tipocaja = 'INDUSTRIAL';
					$image = '';
					$cuerpo = '	<div class="card">
								  	<button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#example1" aria-expanded="false" aria-controls="example1">O0001 PARAL TIPO CUERPO</button>
									<div class="collapse multi-collapse" id="example1">
										<img class="img-fluid" src="img/cuerpo.JPG" alt="tablerin">
										<div class="card-body">
											<p><b>LATERAL TIPO CUERPO</b><br>
												O0001 ;<br>
												G92 X1000. Y1000.<br>
												(LAMINA DE '.$ancho_lam.' MM X '.$alto_lam.' MM) ;<br> 
												X63.5 Y'.(($ancho_lam-$anchura)/2+40).' T313 (RD 4MM) ;<br>
												A1 G36 I'.($altura-130).'. P1 J'.($anchura-80).'. K1 ;<br>
												X63.5 Y'.(($ancho_lam-$anchura)/2+40).' T105 (PP) ;<br>
												B1 ;<br>
												X91. Y'.($ancho_lam-47).'. T336 (RD 7MM) ;<br>
												X116. ;<br>
												X'.($alto_lam-116).'. ;<br>
												X'.($alto_lam-91).'. ;<br>
												<b class="text-success">G72 X3. Y'.($prof+68.5).' ;</b><br>
												A2 G66 I42. J90. P6. T304 (6X6) ;<br>
												G72 X3. Y'.($ancho_lam-$prof-110.5).' ;<br>
												B2 ;<br>
												G72 X'.($alto_lam+3).'. Y'.($prof+68.5).' ;<br>
												B2 ;<br>
												G72 X'.($alto_lam+3).'. Y'.($ancho_lam-$prof-110.5).' ;<br>
												B2 ;<br>
												X2.5 Y20. T255 (55X50) ;<br>
												Y38. ;<br>
												Y'.($ancho_lam-38).'. ;<br>
												Y'.($ancho_lam-20).'. ;<br>
												X'.($alto_lam-2.5).' ;<br>
												Y'.($ancho_lam-38).'. ;<br>
												Y38. ;<br>
												Y20. ;<br>
												G50 ;
											</p>
										</div>
									</div>
								</div>';
					$tapa = '<div class="card">
								<button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#example2" aria-expanded="false" aria-controls="example2">O0002 TAPA SUPERIOR E INFERIOR</button>
									<div class="collapse multi-collapse" id="example2">
								<img class="img-fluid" src="img/tapa.JPG" alt="tablerin">
									<div class="card-body">
										<p><b>TAPA SUP. E INFERIOR</b><br>
											O0002 ;<br>
											G92 X1000. Y1000.<br>
											(LAMINA DE '.$anchura.' MM X '.($prof+60).' MM) ;<br> 
											X9. Y7 T315 (20X20) ;<br>
											G37 I'.($anchura-18).'. P1 J15. K1 ;<br>
											X22. Y21. ;<br>
											G37 I'.($anchura-44).'. P1 J1. K1 ;<br>
											X20. Y'.($prof+68).'. ;<br>
											A1 G28 I11. J0. K2 ;<br>
											X'.($anchura-42).'. Y'.($prof+68).'. ;<br>
											B1 ;<br>
											G50 ;
										</p>
									</div>
									</div>
								</div>';
					$puerta = '<div class="card">
								<button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#example3" aria-expanded="false" aria-controls="example2">O0003 PUERTA FRONTAL</button>
									<div class="collapse multi-collapse" id="example3">
								<img class="img-fluid" src="img/puerta.JPG" alt="tablerin">
									<div class="card-body">
										<p><b>PUERTA FRONTAL</b><br>
											O0003 ;<br>
											G92 X1000. Y1000.<br>
											(LAMINA DE '.$alto_puerta.' MM X '.$ancho_puerta.' MM) ;<br> 
											G92 X1000. Y1000. ;<br>
											G72 X'.($alto_puerta/2).'. Y95. ;<br>
											G26 I18.5 J0. K4 T313 ;<br>
											X'.($alto_puerta/2).'. Y95. T306 ;<br>
											X12. Y7. T315 ;<br>
											Y12. ;<br>
											X7. ;<br>
											Y'.($ancho_puerta-12).'. ;<br>
											X12. ;<br>
											Y'.($ancho_puerta-7).'. ;<br>
											G72 X89. Y'.($ancho_puerta-3).'. ;<br>
											A1 G66 I52. J0. P20. ;<br>
											G72 X'.($alto_puerta-141).'. Y'.($ancho_puerta-3).'. ;<br>
											B1 ;<br>
											X'.($alto_puerta-12).'. Y'.($ancho_puerta-7).'. ;<br>
											Y'.($ancho_puerta-12).'. ;<br>
											X'.($alto_puerta-7).'. ;<br>
											Y12. ;<br>
											X'.($alto_puerta-12).'. ;<br>
											Y7. ;<br>
											X91. Y'.($ancho_puerta+7).'. T369 ;<br>
											X139. ;<br>
											X'.($alto_puerta-139).'. ;<br>
											X'.($alto_puerta-91).'. ;<br>
											G50 ;<br>
										</p>
									</div>
									</div>
								</div>';
					$dobleFondo = '<div class="card">
								<button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#example4" aria-expanded="false" aria-controls="example2">O0004 DOBLE FONDO</button>
									<div class="collapse multi-collapse" id="example4">
								<img class="img-fluid" src="img/doblefondo.JPG" alt="tablerin">
									<div class="card-body">
										<p><b>DOBLE FONDO</b><br>
											O0003 ;<br>
											G92 X1000. Y1000.<br>
											(LAMINA DE '.$alto_df.' MM X '.$ancho_df.' MM) ;<br> 
											X25. Y25. T217 (RD 9MM) ;<br>
											Y'.($ancho_df-25).'. ;<br>
											X'.($alto_df-25).'. ;<br>
											Y25. ;<br>
											X3. Y3. T315 (SQ 20) ;<br>
											Y'.($ancho_df-3).'. ;<br>
											X'.($alto_df-3).'. ;<br>
											Y3. ;<br>
											G50 ;
										</p>
									</div>
									</div>
								</div>';

				}elseif ($_POST['producto'] == 2){

					$tipocaja = 'REMACHADA';
					$image = '';
					$cuerpo = '
								<div class="card">
								<div class="card-header text-center">
									<h6>PARAL TIPO CUERPO</h6>
								</div>
								<img class="img-fluid" src="img/test1.JPG" alt="tablerin">
									<div class="card-body">
										<p>
											G92 X1000. Y<?php echo $alto; ?>. ;
											<br>
											X500. Y<?php echo ($ancho/2); ?>. T150;
										</p>
									</div>
								</div>';

				}else{


					$tipocaja = 'SOLDADA';
					$image = '';
					$cuerpo = '
								<div class="card">
								<div class="card-header text-center">
									<h6>PARAL TIPO CUERPO</h6>
								</div>
								<img class="img-fluid" src="img/test1.JPG" alt="tablerin">
									<div class="card-body">
										<p>
											G92 X1000. Y<?php echo $alto; ?>. ;
											<br>
											X500. Y<?php echo ($ancho/2); ?>. T150;
										</p>
									</div>
								</div>';
				}
				$display = 'd-none';
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
				<?php include "includes/sidebar.php"; ?>
			</div>
			<div class="col-md-9">
				<?php include "includes/menu.php"; ?>
				<div class="row <?php echo isset($display) ? $display : ''; ?>">
					<div class="col-12">
						<div class="card">
							<div class="card-header text-center bg-warning">
								<h5 class="card-title">GENERADOR DE CODIGO G</h5>
							</div>
							<div class="card-body">
								<div><?php echo isset($alert) ? $alert : ''; ?></div>
								<form class="row g-3" action="" method="POST">
									<div class="col-md-4">
										<label for="producto" class="form-label">Tipo de producto</label>
										<select id="producto" class="form-select" name="producto">
											<option value="" selected>Seleccione</option>
											<option value="1">Caja Industrial</option>
											<option value="2">Caja remachada</option>
											<option value="3">Caja Soldada</option>
										</select>
									</div>
									<div class="col-md-2">
										<label for="lamina" class="form-label">Calibre</label>
										<select id="lamina" class="form-select">
											<option value="1">HNP-12</option>
											<option value="2">HNP-14</option>
											<option value="3">HNP-16</option>
											<option value="4">HNP-18</option>
										</select>
									</div>
									<div class="col-md-2">
										<label for="alto" class="form-label">Alto</label>
										<input type="number" class="form-control" id="alto" name="alto" placeholder="alto">
									</div>
									<div class="col-md-2">
										<label for="ancho" class="form-label">Ancho</label>
										<input type="number" class="form-control" id="ancho" name="ancho" placeholder="ancho">
									</div>
									<div class="col-md-2">
										<label for="profundidad" class="form-label">Profundidad</label>
										<input type="number" class="form-control" id="profundidad" name="profundidad" placeholder="profundidad">
									</div>
																	
									<div class="col-md-12">
										<button type="submit" class="btn btn-danger float-end"><i class="fas fa-list"></i> Generar Codigo</button>
									</div>
								</form>
							</div>
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="card my-3">
							<div class="card-body">
								<h5 class="card-title text-center">Ahora la caja <?php echo $tipocaja ?> es de <?php echo $alto; ?> de alto x <?php echo $ancho; ?> de ancho</h5>								
							</div>
						</div>
					</div>
						<div class="col-md-4 mb-3">
							<?php echo isset($cuerpo) ? $cuerpo : ''; ?>
						</div>
						<div class="col-md-4 mb-3">
							<?php echo isset($tapa) ? $tapa : ''; ?>
						</div>
						<div class="col-md-4 mb-3">
							<?php echo isset($puerta) ? $puerta : ''; ?>
						</div>
						<div class="col-md-4 mb-3">
							<?php echo isset($dobleFondo) ? $dobleFondo : ''; ?>
						</div>							
					</div>
				</div>
			</div>
		</div>

	</div>
</body>
</html>
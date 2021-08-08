<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "includes/scripts.php"; ?>
	<title>Manual | AMADA</title>
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
							<div class="card-body">
								<iframe class='pdfembed' src='pdfjs/web/viewer.html?file=../../archives/VENEFEM-CAD.pdf' width='100%' height='750px'></iframe>
							</div>
						</div>
					</div>	
				</div>							
			</div>
		</div>
	</div>
</body>
</html>
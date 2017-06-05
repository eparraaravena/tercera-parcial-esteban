<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo($title);?></title>
	<!-- Metadatos para Search Engine -->
	<meta name="description" content="<?php echo($description);?>">
	<meta name="image" content="<?php echo($image);?>">
	<!-- Metadatos en Schema.org para Google -->
	<meta itemprop="name" content="<?php echo($title);?>">
	<meta itemprop="description" content="<?php echo($description);?>">
	<meta itemprop="image" content="">
	<!-- Metadatos para Facebook, Pinterest & Google+ -->
	<meta name="og:title" content="<?php echo($title);?>">
	<meta name="og:description" content="<?php echo($description);?>">
	<meta name="og:image" content="<?php echo($image);?>">
	<meta name="og:site_name" content="<?php echo($title);?>">
	<meta name="og:locale" content="es_CL">
	<meta name="og:type" content="website">
	<!--acá metemos los estilos-->
	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

	<link href="libs/css/bootstrap.min.css" rel="stylesheet">
	<link href="libs/css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

	<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?><script src="libs/sketch-index.js"></script><?php };?>
	<?php if((basename($_SERVER['PHP_SELF']))=='titulos.php'){?><script src="libs/sketch-profesores.js"></script><?php };?>
	<?php if((basename($_SERVER['PHP_SELF']))=='ubicaciones.php'){?><script src="libs/sketch-asignaturas.js"></script><?php };?>
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Estudiar Diseño en Chile</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/tabla.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$(".tablesorter").tablesorter({sortList:[[0,0]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	});
	</script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<?php include("cabeza.php"); ?>

<body>

<?php
$csv = array_map('str_getcsv', file('data/datos-esteban.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">




	<h3>Ingreso y Permanencia</h3>

	<h5>En esta sección podemos ver cuantas personas se matriculan en la carrera de Diseño, cuántos de ellos provienen de establecimiento secundarios subencionados (%), y cuál es el porcentaje de ellos permanecen en la carrera.</h5>
</br>
	<table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>Carrera</th>
				<th>Institución</th>
				<th>Numero Matriculados</th>
				<th>Retención Primer Año (%)</th>
				<th>Procedencia Subencionado (%)</th>
			</tr>
		</thead>
		<tbody>

			<?php for($a = 0; $a < $total = count($csv); $a++){?>

			<tr>
				<td><?php echo($csv[$a]["carrera"])?></td>
				<td><?php echo($csv[$a]["institucion"])?></td>
				<td><?php echo($csv[$a]["numero_matriculados"])?></td>
				<td><?php echo($csv[$a]["procentaje_retencion_primero"])?></td>
				<td><?php echo($csv[$a]["porcentaje_procedencia_subvencionado"])?></td>

			</tr>

			<?php };?>

		</tbody>
	</table>



</div>
</div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>

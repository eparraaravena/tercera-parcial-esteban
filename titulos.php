<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Títulos y Grados de diseño </title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/tabla.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#tablesorter").tablesorter({sortList:[[0,0]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	});
	</script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<?php include("cabeza.php"); ?>
<?php
$csv = array_map('str_getcsv', file('data/rocio.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
	<h3>Títulos y Grados en Diseño</h3>
	<h5>En esta sección podemos ver cuáles son los grados académicos, y titulos con los que el estudiante sale de la universidad.</h5>
	</br>
	<table id="tablesorter" class="tablesorter" border="0" cellpadding="0" cellspacing="1">
		<thead>
			<tr>
				<th>Carrera</th>
				<th>Institución</th>
				<th>Duración Formal</th>
				<th>Título Profesional</th>
				<th>Salida Intermedia</th>
				<th>Grado Académico</th>
			</tr>
		</thead>
		<tbody>

			<?php for($a = 0; $a < $total = count($csv); $a++){?>

			<tr>
				<td><?php echo($csv[$a]["carrera"])?></td>
				<td><?php echo($csv[$a]["institucion"])?></td>
				<td><?php echo($csv[$a]["duracion_formal"])?></td>
				<td><?php echo($csv[$a]["titulo_profesional"])?></td>
				<td><?php echo($csv[$a]["salida_intermedia"])?></td>
				<td><?php echo($csv[$a]["grado_academico"])?></td>
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

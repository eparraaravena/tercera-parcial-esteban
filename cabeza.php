<!DOCTYPE html>
<html lang="es">
<?php
//Cambien el contenido de $title por el que corresponda a su sitio
$title = "Diseño en Chile";
//Cambien el contenido de $description por el que corresponda a su sitio
$description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque eu quam ac magna feugiat sollicitudin.";
//Cambien la url en $image por la que corresponda a su sitio
//Primero suban la imagen a la carpeta en github, y vincúlenla con la URL que tenga allá como RAW.
$image = "https://raw.githubusercontent.com/profesorfaco/visualizaciones/master/images/homers-web-page.gif";
?>
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
<?php if((basename($_SERVER['PHP_SELF']))=='empleabilidad.php'){?><script src="libs/sketch-index.js"></script><?php };?>
<?php if((basename($_SERVER['PHP_SELF']))=='acreditacion.php'){?><script src="libs/sketch-index.js"></script><?php };?>
<?php if((basename($_SERVER['PHP_SELF']))=='costo.php'){?><script src="libs/sketch-index.js"></script><?php };?>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-10 col-sm-offset-1">
<header>
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo($title);?></h1>
<nav>
<ul class="nav nav-tabs masthead-nav">



<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Ingreso y Permanencia</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='titulos.php'){?> class="active" <?php };?>><a href="titulos.php">Titulos</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='ubicaciones.php'){?> class="active" <?php };?>><a href="ubicaciones.php">Ubicaciones</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='empleabilidad.php'){?> class="active" <?php };?>><a href="empleabilidad.php">Empleabilidad</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='acreditacion.php'){?> class="active" <?php };?>><a href="acreditacion.php">Acreditacion</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='costo.php'){?> class="active" <?php };?>><a href="costo.php">Costo Real de la Carrera</a></li>
</ul>
</nav>
</div>
</div>
</header>

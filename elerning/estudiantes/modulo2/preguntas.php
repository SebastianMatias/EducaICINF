<?php require_once 'BDconect.php'; ?>
<?php
	
	$numero = (int) $_GET['n'];
	//$numero = 32;
	//header("Location: preguntas.php?n=".$numero);
    $query = "SELECT
				pregunta.nombre_pregunta,
				pregunta.id_cuestionario
			FROM
				pregunta
			INNER JOIN cuestionario ON pregunta.id_cuestionario = cuestionario.id_cuestionario
			WHERE
				pregunta.id_pregunta = $numero";
	$cuestionario1 = $mysqli->query($query) or die($mysqli->error._LINE_);
	$cuestionario2 = $cuestionario1->fetch_assoc();
	$id_cuestionario = $cuestionario2['id_cuestionario'];

	$query = "SELECT * FROM pregunta WHERE pregunta.id_cuestionario = $id_cuestionario";
	$numrow = $mysqli->query($query) or die($mysqli->error._LINE_);

	$cantrow = $numrow->fetch_assoc();
	$cantidad = $cantrow['id_pregunta'];

	$titulo_total = $numrow->num_rows;
	$total = $numrow->num_rows + $cantidad - 1;//34
//determinar si cantidad o numero es menor	
//echo $total;
//echo $cantidad;

	$query = "SELECT * FROM pregunta WHERE pregunta.id_pregunta = $numero";
	$resultado = $mysqli->query($query) or die($mysqli->error._LINE_);
	$pregunta = $resultado->fetch_assoc();

	
	$query = "SELECT * FROM eleccion INNER JOIN pregunta ON eleccion.id_pregunta = pregunta.id_pregunta INNER JOIN cuestionario ON pregunta.id_cuestionario = cuestionario.id_cuestionario WHERE eleccion.id_pregunta = $numero";
	$elecciones = $mysqli->query($query) or die($mysqli->error._LINE_);



?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Eleccion Multiple</title>
</head>

<body>
	<header>
		<div class="container">
			<h1>Responda las preguntas</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="current">Preguntas totales: <?php echo $titulo_total; ?></div>
			<p class="pregunta">
				<?php echo $pregunta['nombre_pregunta']; ?>
			</p>
			<form method="post" action="proceso.php">
				<ul class="eleciones">
					<?php while($row = $elecciones->fetch_assoc()): ?>
					<li><input name="eleccion" type="radio" value="<?php echo $row['id_eleccion'];?>" /><?php echo $row['nombre_eleccion']; ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="Siguiente"/>
				<input type="hidden" name="numero" value="<?php echo $numero; ?>" />
				<input type="hidden" name="total" value="<?php echo $total; ?>" />
			</form>
		</div>
	</main>
</body>
</html>
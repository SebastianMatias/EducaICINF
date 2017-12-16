<?php require_once 'BDconect.php'; ?>
<?php

	//$numero = (int) $_GET['n'];

	$query = "SELECT DISTINCT pregunta.nombre_pregunta FROM cuestionario INNER JOIN pregunta ON pregunta.id_cuestionario = cuestionario.id_cuestionario INNER JOIN eleccion ON eleccion.id_pregunta = pregunta.id_pregunta WHERE cuestionario.id_cuestionario = 19";
	$resultado = $mysqli->query($query) or die($mysqli->error._LINE_);
	$pregunta = $resultado->fetch_assoc();
	$total = $resultado->num_rows;

	
	$query = "SELECT * FROM eleccion INNER JOIN pregunta ON eleccion.id_pregunta = pregunta.id_pregunta INNER JOIN cuestionario ON pregunta.id_cuestionario = cuestionario.id_cuestionario WHERE eleccion.id_pregunta = 32";
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
			<div class="current">Pregunta 1 de <?php echo $total; ?></div>
			<p class="pregunta">
				q <?php echo $pregunta['nombre_pregunta']; ?>
			</p>
			<form method="post" action="proceso.php">
				<ul class="eleciones">
					<?php while($row = $elecciones->fetch_assoc()): ?>
					<li><input name="eleccion" type="radio" value="<?php echo $row['id_eleccion']; ?>" /><?php echo $row['nombre_eleccion']; ?></li>
					<?php endwhile; ?>
				</ul>
				<input type="submit" value="Siguiente"/>
			</form>
		</div>
	</main>
</body>
</html>
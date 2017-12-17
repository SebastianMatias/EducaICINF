<?php  session_start(); ?>
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
			<h2>Cuestionario Terminado!</h2>
			<p>Felicitaciones! haz completado el cuestionario</p>
			<p>Puntuacion Final: <?php echo $_SESSION['score']; ?></p>
			<a href="../es_principal.php" class="Listo">Terminar</a>
		</div>
	</main>
</body>
</html>
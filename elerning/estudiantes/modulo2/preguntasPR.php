<?php require_once 'BDconect.php'; ?>
<?php
	
	$numero = (int) $_GET['n'];
	//$numero = 32;
	//header("Location: preguntas.php?n=".$numero);
    $query = "SELECT
			cuestionario_pr.nombre_cuestionario,
			Count(pregunta_pr.id_pregunta) AS numero_preguntas
			FROM
			cuestionario_pr
			INNER JOIN pregunta_pr ON pregunta_pr.id_cuestionario = cuestionario_pr.id_cuestionario
			WHERE
			pregunta_pr.id_cuestionario = $numero";
	$preguntas = $mysqli->query($query) or die($mysqli->error._LINE_);
	$recorre_preguntas = $preguntas->fetch_assoc();

	$nombre_cuestionario = $recorre_preguntas['nombre_cuestionario'];
	$numero_preguntas = $recorre_preguntas['numero_preguntas'];

	
	$query = "SELECT
			pregunta_pr.id_pregunta,
			pregunta_pr.nombre_pregunta
			FROM
			cuestionario_pr
			INNER JOIN pregunta_pr ON pregunta_pr.id_cuestionario = cuestionario_pr.id_cuestionario
			WHERE
			pregunta_pr.id_cuestionario = $numero";
	$preguntas2 = $mysqli->query($query) or die($mysqli->error._LINE_);

	$query = "SELECT
			pregunta_pr.id_pregunta,
			pregunta_pr.nombre_pregunta
			FROM
			cuestionario_pr
			INNER JOIN pregunta_pr ON pregunta_pr.id_cuestionario = cuestionario_pr.id_cuestionario
			WHERE
			pregunta_pr.id_cuestionario = $numero";
	$preguntas3 = $mysqli->query($query) or die($mysqli->error._LINE_);
	$recorre_preguntas3 = $preguntas3->fetch_assoc();
	$primer_id = $recorre_preguntas3['id_pregunta'];

	/*$query = "SELECT * FROM pregunta WHERE pregunta.id_cuestionario = $id_cuestionario";
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
	$elecciones = $mysqli->query($query) or die($mysqli->error._LINE_);*/



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Educa-ICINF - Docente</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/principal.css">

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <div class="navbar-header">
    <img src="../../img/logo_ulagos.png" width="150" height="50" alt=""/> </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <li><a href="#">Gestión de actividades</a> </li>
          <li><a href="datos_personales.php">Datos Personales</a> </li>
          <li><a href="../index.php">Cerrar sesión</a> </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--  NOTICIAS DESTACADAS -->
<section>
  <div class="container">
  <form action="insertarRespuestasPR.php" method="post">
	  <span class="label label-primary"><?php echo $nombre_cuestionario; ?></span>
	  <br>
	  <br>
	  <table>

		
		
		
		<?php while($nombre_pregunta = $preguntas2->fetch_assoc()): ?>
		<tr>
			<td><?php echo $nombre_pregunta['nombre_pregunta'];?>
			<textarea class="form-control" rows="2" cols="100" name="resp<?php echo $nombre_pregunta['id_pregunta'];?>"></textarea>
			<td><input name="id<?php echo $nombre_pregunta['id_pregunta'];?>" type="hidden" value="<?php echo $nombre_pregunta['id_pregunta']; ?>"></td>
			</td>
		</tr>
		<?php endwhile; ?>
		
	  </table><br>
		  <input type="submit" value="Insertar"></input>
		  <input name="primer_id" type="hidden" value="<?php echo $primer_id; ?>">
		  <input name="nombre_cuestionario" type="hidden" value="<?php echo $nombre_cuestionario; ?>">
		  <input name="numero_preguntas" type="hidden" value="<?php echo $numero_preguntas; ?>">
  </form>
</section>
	  
<!-- FOOTER
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyWebsite. Todos los derechos reservados.</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 

<script src="../../js/jquery-1.11.3.min.js"></script>  
<script src="../../js/bootstrap.js"></script>

</body>
</html>
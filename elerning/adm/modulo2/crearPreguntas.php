<?php
$nombre_cuestionario = $_POST["nombre_cuestionario"];
$numero_preguntas = $_POST["numero_preguntas"];
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
  <form action="insertarPreguntas.php" method="post">
	  <span class="label label-primary"><?php echo $nombre_cuestionario; ?></span>
	  <br>
	  <br>
	  <table>
		<?php
		  for ($i=1; $i <= $numero_preguntas; $i++){
		?>
		<tr>
			<td>Preg. <?php echo $i; ?></td>
			<td><input name="p<?php echo $i; ?>" type="text" size="20"></td>
			<td>Elec. 1<input name="e1<?php echo $i; ?>" type="text" size="10"></td>
			<td>Elec. 2<input name="e2<?php echo $i; ?>" type="text" size="10"></td>
			<td>Elec. 3<input name="e3<?php echo $i; ?>" type="text" size="10"></td>
			<td>Elec. 4<input name="e4<?php echo $i; ?>" type="text" size="10"></td>
			<td>Elec. Correcta<input name="c<?php echo $i; ?>" type="text" size="10"></td>
			<!--<td>Elec. Correcta<input name="c<?php// echo $i; ?>" type="number" size="10" min="1" max="4"></td>-->
		</tr>
		<?php }?>
	  </table><br>
		  <input type="submit" value="Insertar"></input>
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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Educa-ICINF - Estudiantes</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/estudiantes/datos_personales.css">

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <div class="navbar-header">
    <img src="../img/logo_ulagos.png" width="150" height="50" alt=""/> </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown"> 
          <li><a href="es_principal.php">Actividades</a> </li>
          <li><a href="datos_personales.php">Datos Personales</a> </li>
          <li><a href="../index.php">Cerrar sesión</a> </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- PANEL DE INFORMACION -->
<div class="container">
<div class="panel panel-info">
      <div class="panel-heading">Datos Personales</div>
      <div class="panel-body">Para modificar datos personales o contraseña presionar "Actualizar"</div>
</div>
</div>
<!-- / PANEL DE INFORMACION -->

<!-- DATOS PERSONALES Y CONTRASEÑA -->
<section class="section-form">
  <div class="container-fluid-input">
  	<form action="#">  
	  <span class="label label-default">Nombre</span>
	  <input type="text" class="form-control" id="nombre">
	  <br>
	  <span class="label label-default">Apellido</span>
	  <input type="text" class="form-control" id="apellido">
	  <br>
	  <span class="label label-default">Correo</span>
	  <input type="text" class="form-control" id="correo">
	  <br>
	  <span class="label label-default">Edad</span>
	  <input type="text" class="form-control" id="edad">
	  <br>
	  <span class="label label-default">Teléfono</span>
	  <input type="text" class="form-control" id="telefono">
	  <br>
	  <!--<input type="submit" value="Actualizar">-->
	  <button type="submit" class="btn btn-primary" id="adp">Actualizar</button>
    </form>
  </div>

   <div class="container-fluid-input2">
  	<form action="#">  
	  <span class="label label-default">Contraseña actual</span>
	  <input type="text" class="form-control" id="cta">
	  <br>
	  <span class="label label-default">Contraseña nueva</span>
	  <input type="text" class="form-control" id="ctn">
	  <br>
	  <span class="label label-default">Repetir contraseña</span>
	  <input type="text" class="form-control" id="rct">
	  <br>
	  <button type="submit" class="btn btn-primary" id="act">Actualizar</button>
    </form>
  </div>
  
</section>

<!-- / DATOS PERSONALES Y CONTRASEÑA -->

<!-- FOOTER --> 
<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyWebsite. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- / FOOTER --> 

<script src="../js/jquery-1.11.3.min.js"></script> 
<script src="../js/bootstrap.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Universidad de los lagos - Estudiantes</title>

<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/principal.css">

</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <div class="navbar-header">
    <img src="../img/logo_ulagos.png" width="150" height="50" alt=""/> </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <li><a href="#">Actividades</a> </li>
          <li><a href="datos_personales.php">Datos Personales</a> </li>
          <li><a href="../index.php">Cerrar sesión</a> </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">

<!-- PANEL DE INFORMACION -->
<div class="panel panel-info">
      <div class="panel-heading">Solicitudes enviadas</div>
      <div class="panel-body">Para modificar, eliminar o responder solicitud presionar en "DETALLE"</div>
</div>
<!-- / PANEL DE INFORMACION -->


<!-- TABLA SOLICITUDES -->
<table class="table table-hover">
    <thead>
      <tr>
        <th>Usuario / Rut</th>
        <th>Tipo Solicitud</th>
        <th>Descripción</th>
        <th>Respuesta</th>
        <th>Acción</th>
       <!-- <th>Selecionar</th>-->
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Resumen 1</td>
        <td>Consulta</td>
        <td>Descripción</td>
        <td>Resuelta</td>
        <td class="dropdown"><a class="btn btn-default actionButton"
          data-toggle="dropdown" href="#"> Detalle </a></td>
        <!--<td><input type="checkbox" value=""></td>-->
      </tr>
      <tr>
        <td>Resumen 2</td>
        <td>Queja</td>
        <td>Descripción</td>
        <td>Resuelta</td>
        <td class="dropdown"><a class="btn btn-default actionButton"
          data-toggle="dropdown" href="#"> Detalle </a></td>
        <!--<td><input type="checkbox" value=""></td>-->
      </tr>
      <tr>
        <td>Resumen n</td>
        <td>Sugerencia</td>
        <td>Descripción</td>
        <td>Resuelta</td>
        <td class="dropdown"><a class="btn btn-default actionButton"
          data-toggle="dropdown" href="#"> Detalle </a></td>
        <!--<td><input type="checkbox" value=""></td>-->
      </tr>
    </tbody>
  </table>
<!-- / TABLA SOLICITUDES -->
 
 <!--  LISTA BOTON -->
   <ul id="contextMenu" class="dropdown-menu" role="menu">
    <li><a tabindex="-1" href="#" class="responder">Responder</a></li>
    <li><a tabindex="-1" href="#" class="modificar" >Modificar</a></li>
    <li><a tabindex="-1" href="#" class="eliminar" >Eliminar</a></li>
  </ul>
<!-- / LISTA BOTON -->
  
</div>


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

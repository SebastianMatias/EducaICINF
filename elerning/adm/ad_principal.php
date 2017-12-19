<?php  
require_once 'modulo1/modal_mauro.php';
require_once 'modulo2/modal_seba.php';
require_once 'modulo2/modal_tablaPR.php';
//require_once 'modulo2/crearPreguntas.php';
require_once 'modulo3/modal_roxana.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Educa-ICINF - Docente</title>

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
  <div class="container ">
   <div class="container-fluid-noticias">
  <span class="label label-primary">Tipos de actividades</span> </div>
    <div class="row">
      <div class="col-lg-4 col-sm-12 text-center"> <img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="../img/iconos/vyf.png" data-holder-rendered="true">
        <h3>Verdadero y falso</h3>
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_VF">Crear</button>
      </div>
      <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="../img/iconos/sinonimos.png" data-holder-rendered="true">
        <h3>Sinónimos</h3>
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_sinonimos">Crear</button>
      </div>
      <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="../img/iconos/p_r.png" data-holder-rendered="true">
        <h3>Pregunta - Respuesta</h3>
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_PR">Crear</button>
     <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_tablaPR">Respuestas</button>
      </div>
      <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="../img/iconos/s_m.jpg" data-holder-rendered="true">
        <h3>Elección multiple</h3>
    <button id="Crear" type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_SM">Crear</button>
      </div>
      <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="../img/iconos/t_p.jpg" data-holder-rendered="true">
        <h3>Seleccion en términos pareados</h3>
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_terminos">Crear</button>
      </div>
      <div class="col-lg-4 col-sm-12 text-center"><img class="img-circle" alt="140x140" style="width: 140px; height: 140px;" src="../img/iconos/crucigrama.png" data-holder-rendered="true">
        <h3>Crucigrama</h3>
    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal_crucigrama">Crear</button>
      </div>
    </div>
   <!-- / NOTICIAS DESTACADAS -->
</section>
	  
<!-- FOOTER --> 
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

<script src="../js/jquery-1.11.3.min.js"></script>  
<script src="../js/bootstrap.js"></script>

<!--<script>  
       $(document).on('click', '#Crear', function() {
        $('#myModal_SM').modal('show');
    });

    $(document).on('click', '#Crear2', function() {
        $('#myModal_SM2').modal('show');
    });
</script>-->

</body>
</html>

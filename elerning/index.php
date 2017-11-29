<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Universidad de los lagos</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/inicio_sesion.css" rel="stylesheet" type="text/css">
	<!-- PARA EL ESTILO DEL MODAL -->
	<link rel="stylesheet" href="css/estudiantes/solicitudes.css">
	<!-- / PARA EL ESTILO DEL MODAL -->
  </head>
  <body>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
  
  <!-- FORMULARIO DE ACCESO -->
  <div class="container-fluid">
	  <img src="img/logo_ulagos.png" alt="" width="226" height="98" class="logo_ulagos"/> 
	  <img src="img/iconos/usuario.png" width="30" height="30" alt="" class="logo_usuario"/>
	  <img src="img/iconos/contrasena.png" width="30" height="30" alt="" class="logo_contrasena"/>
	  <input type="text" class="form-control usuario" id="usuario" placeholder="Correo Electrónico">
	  <input type="text" class="form-control contrasena" id="contrasena" placeholder="********">
	  <button type="submit" class="btn btn-success">Ingresar</button>
	  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Registrarse</button>
	  <!--<form action="estudiantes/es_principal.php">
	  	<button type="submit" class="btn btn-success">Ingresar</button>
	  </form>
	  <form action="estudiantes/es_principal.php">
	  	<button type="submit" class="btn btn-primary">Registrarse</button>
	  </form>-->
  </div>
    <!-- / FORMULARIO DE ACCESO -->
    
    <!-- MODAL -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- MODAL CONTENIDO-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Formulario Solicitud</h4>
        </div>
        
        <div class="modal-body">
       	  <form action="#">
            	  <div class="well">1.- Rellene Formulario</div>
				  <span class="label label-default">RUT</span>
				  <input type="text" class="form-control" id="rut">
				  <br>
				  <span class="label label-default">Nombre</span>
				  <input type="text" class="form-control" id="nombre">
				  <br>
				  <span class="label label-default">Apellido</span>
				  <input type="text" class="form-control" id="apellido">
				  <br>
				  <span class="label label-default">Correo Electrónico</span>
				  <input type="text" class="form-control" id="correo_e">
				  <br>
				  <span class="label label-default">Edad</span>
				  <input type="text" class="form-control" id="edad">
				  <br>
				  <span class="label label-default">Teléfono</span>
				  <input type="text" class="form-control" id="telefono">
				  <br>
				  <span class="label label-default">Usuario</span>
				  <input type="text" class="form-control" id="usuario">
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
        </div>
      </div>
      <!-- / MODAL CONTENIDO -->
      
    </div>
</div>
<!-- / MODAL -->
    
</body>
</html>
    <!-- MODAL -->
<div class="modal fade" id="myModal_PR" role="dialog" style="overflow-y: scroll;">
    <div class="modal-dialog">
    
      <!-- MODAL CONTENIDO-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pregunta - Respuestas</h4>
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

<!-- MODAL -->
<div class="modal fade" id="myModal_SM" role="dialog">
    <div class="modal-dialog">
    
      <!-- MODAL CONTENIDO-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Eleccion Multiple</h4>
        </div>
        
        <div class="modal-body">
       	  <form action="modulo2/crearPreguntas.php" method="post">
            	  <div class="well">Rellene dato solicitados</div>
				  <span class="label label-default">Nombre de cuestionario</span>
				  <input type="text" class="form-control" name="nombre_cuestionario">
				  <br>
				  <span class="label label-default">Nº preguntas</span>
				 <!-- <input type="text" class="form-control" id="nombre">-->
				 <input type="number" max="10" min="0" name="numero_preguntas">
				 <input type="submit" value="Crear"/>
		  </form>
        </div>
        <div class="modal-footer">
          <!--<button type="submit" id="Crear2" class="btn btn-primary" data-dismiss="modal">Enviar</button>-->
          <!--<button type="submit" id="Crear2" class="btn btn-primary" data-dismiss="modal" data-target="#myModal_SM2">Enviar</button>-->
        </div>
      </div>
      <!-- / MODAL CONTENIDO -->
      
    </div>
</div>
<!-- / MODAL -->

<section>
<!-- MODAL -->
<div class="modal fade" id="myModal_SM2" role="dialog">
    <div class="modal-dialog">
    
      <!-- MODAL CONTENIDO-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pregunta - Respuestas</h4>
        </div>
        
        <div class="modal-body">
       	  <form action="#">
            	  <div class="well"><?php echo $nombre; ?></div>
				  <span class="label label-default">Preguntas</span>
				  <input type="text" class="form-control" id="rut">
				        <div class="col-xs-2">
					<label for="ex1">Elec. 1</label>
					<input class="form-control" id="el1" type="text">
				  </div>
				  <div class="col-xs-2">
					<label for="ex2">Elec. 2</label>
					<input class="form-control" id="el2" type="text">
				  </div>
				  <div class="col-xs-2">
					<label for="ex3">Elec. 3</label>
					<input class="form-control" id="el3" type="text">
				  </div>
						<div class="col-xs-2">
					<label for="ex3">Elec. 4</label>
					<input class="form-control" id="el4" type="text">
				  </div>
						<div class="col-xs-2">
					<label for="ex3">¿Correcta?</label>
					<input type="number" max="4" min="1" id="correcta">	
				  </div>
				  <br>
				  <br>
				  <br>
				  <br>
				 <!-- <span class="label label-default">Preguntas</span>
				  <input type="text" class="form-control" id="rut">
				        <div class="col-xs-2">
					<label for="ex1">col-xs-2</label>
					<input class="form-control" id="ex1" type="text">
				  </div>
				  <div class="col-xs-2">
					<label for="ex2">col-xs-3</label>
					<input class="form-control" id="ex2" type="text">
				  </div>
				  <div class="col-xs-2">
					<label for="ex3">col-xs-4</label>
					<input class="form-control" id="ex3" type="text">
				  </div>
						<div class="col-xs-2">
					<label for="ex3">col-xs-4</label>
					<input class="form-control" id="ex3" type="text">
				  </div>
						<div class="col-xs-2">
					<label for="ex3">col-xs-4</label>
					<input class="form-control" id="ex3" type="text">
				  </div>
				  <br>
				  <br>
				  <br>
				  <br>-->
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button"  class="btn btn-default" data-dismiss="modal">Enviar</button>
        </div>
      </div>
      <!-- / MODAL CONTENIDO -->
      
    </div>
</div>
<!-- / MODAL -->
<section>


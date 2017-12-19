
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

<!-- MODAL -->
<div class="modal fade" id="myModal_PR" role="dialog">
    <div class="modal-dialog">
    
      <!-- MODAL CONTENIDO-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Eleccion Multiple</h4>
        </div>
        
        <div class="modal-body">
       	  <form action="modulo2/crearPreguntasPR.php" method="post">
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




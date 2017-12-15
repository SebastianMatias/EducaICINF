    <!-- MODAL -->
<script src="../js/dinamic.js" language="Javascript" type="text/javascript"></script>
<div class="modal fade" id="myModal_VF" role="dialog">
    <div class="modal-dialog  ">
      <!-- MODAL CONTENIDO-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Verdadero y falso</h4>
        </div>
        <div class="modal-body">
       	  <form action="#">
            	  <div class="well" id="vf">1.- Rellene el juego</div>
                <div class="wel2">Afirmación / Respuesta</div>
          <br>
            <div class="form-inline">
            <div class="form-group" id="dynamicInput">
              <input type="text" size="35" class="form-control-input-sm text-center" name="myInputs[]" id="pregunta1">
              <input type="text" size="35" class="form-control-input-sm text-center" name="myInputs[]" id="respuesta1">
            </div>
          </div>
          <br>
		  </form>
        </div>
        <div class="modal-footer">
            <input type="button" value="Agregar" onClick="addInput('dynamicInput');">
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:cargar();">Enviar</button>
        </div>
      </div>
      <!-- / MODAL CONTENIDO -->

    </div>
</div>

<script>
function cargar(){

   var url = "modulo1/insertBDVF.php";
   $.ajax({
      type: "POST",
      url: url,
      data: $("#formulario").serialize(),
      success: function(data) {

          }

  });
}
</script>
<!-- / MODAL -->

    <!-- MODAL -->
<div class="modal fade" id="myModal_sinonimos" role="dialog">
    <div class="modal-dialog">

      <!-- MODAL CONTENIDO-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Verdadero y falso</h4>
        </div>
        <div class="modal-body">
       	  <form action="#">
            	  <div class="well">1.- Rellene el juego</div>
                <div class="wel2">Palabra / Sinonimo</div>
          <br>
            <div class="form-inline">
            <div class="form-group" id="dynamicInput2">
              <input type="text" size="35" class="form-control-input-sm text-center" name="myInputs[]" id="palabra">
              <input type="text" size="35" class="form-control-input-sm text-center" name="myInputs[]" id="sinonimo">
            </div>
          </div>
          <br>
		  </form>
        </div>
        <div class="modal-footer">
            <input type="button" value="Agregar" onClick="addInput2('dynamicInput2');">
          <button type="button" class="btn btn-default" data-dismiss="modal">Enviar</button>
        </div>
      </div>
      <!-- / MODAL CONTENIDO -->

    </div>
</div>
<!-- / MODAL -->

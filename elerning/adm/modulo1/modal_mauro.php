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
       	    <form method="post" id="formulario2">
            	  <div class="well" id="idwel">1.- Inicie nuevo juego</div>
                <div class="wel2">Afirmación / Respuesta</div>
                <br>
              <div class="form-inline">
                <div class="form-group" id="dynamicInput">
                </div>
              </div>
          <br>
		      </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default"  onclick="javascript:addInput(dynamicInput);">Agregar</button>
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
      data: $("#formulario2").serialize(),
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
          <h4 class="modal-title">Sinonimos</h4>
        </div>
        <div class="modal-body">
       	  <form method="post" id="formulario3">
            	  <div class="well">1.- Inicie Nuevo juego </div>
                <div class="wel2">Palabra / Sinonimos / Respuesta</div>
          <br>
            <div class="form-inline">
            <div class="form-group" id="dynamicInput2">

            </div>
          </div>
          <br>
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default"  onclick="javascript:addInput2(dynamicInput);">Agregar</button>
          <button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:cargar2();">Enviar</button>
        </div>
      </div>
      <!-- / MODAL CONTENIDO -->

    </div>
</div>
<script>

function cargar2(){

   var url = "modulo1/insertSin.php";
   $.ajax({
      type: "POST",
      url: url,
      data: $("#formulario3").serialize(),
      success: function(data) {

          }

  });
}

</script>
<!-- / MODAL -->

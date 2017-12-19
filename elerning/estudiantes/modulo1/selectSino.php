<?php
include '../../dbconfig.php';

  $result = $db->query("SELECT id,sinonimos,palabra FROM sinonimo");
  $result->execute();
  $resultado = $result->fetchAll();

echo '
<div class="modal-dialog  ">
  <!-- MODAL CONTENIDO-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Sinonimos</h4>
    </div>
    <div class="modal-body">
  <form method="post" id="formulario3">
  <div class="well">1.- Complete el juego</div>
  <div class="wel2">Palabra/ Sinonimos /Respuesta</div>
  <br>
      <div class="form-inline">
          <div class="form-group" id="dynamicInput3">
              ';for ($i=0; $i < count($resultado) ; $i++) :
              echo'<p> '; print_r($resultado[$i]['palabra']); echo '</p>
              '; echo'<p> '; print_r($resultado[$i]['sinonimos']); echo '</p>

              <input type="text" id="respuestaqlaX" size="35" class="form-control-input-sm text-center">
              <button type="button" class="btn btn-default"  onclick="javascript:comprobar2(';echo $resultado[$i]['id']; echo ')"> Comprobar</button>
              ';endfor;echo '</div>
      </div>
<br>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal" >Terminar</button>
</div>
</div>
<!-- / MODAL CONTENIDO -->

</div>
';


?>
<script type="text/javascript">

  function comprobar2(id){
      var respues = $("#respuestaqlaX").val();
      var url = "modulo1/juegoSino.php?id=" + id+"&respues="+  respues;
      console.log(url);

      $.ajax({
  		    type: "GET",
  		    url: url,
  		    success: function(data) {
                $(".modal-body").html(data);


  		         }
  	     });


    }
</script>

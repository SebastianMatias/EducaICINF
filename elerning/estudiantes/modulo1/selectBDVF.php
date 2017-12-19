<?php
include '../../dbconfig.php';

  $result = $db->query("SELECT id,afirmacion FROM verdadero");
  $result->execute();
  $resultado = $result->fetchAll();

echo '
<div class="modal-dialog  ">
  <!-- MODAL CONTENIDO-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Verdadero y falso</h4>
    </div>
    <div class="modal-body">
  <form method="post" id="formulario2">
  <div class="well">1.- Rellene el juego</div>
  <div class="wel2">Afirmación / Respuesta</div>
  <br>
      <div class="form-inline">
          <div class="form-group" id="dynamicInput">
              ';for ($i=0; $i < count($resultado) ; $i++) :
              echo'<p> '; print_r($resultado[$i]['afirmacion']); echo '</p>
              <p id=return></p>
              <input type="text" id="respuesta" size="35" class="form-control-input-sm text-center">
              <button type="button" class="btn btn-default"  onclick="javascript:comprobar(';echo $resultado[$i]['id']; echo ')"> Comprobar</button>
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

  function comprobar(id){
      var res = $("#respuesta").val();
      var url = "modulo1/juegoVF.php?id=" + id+"&res="+  res;
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

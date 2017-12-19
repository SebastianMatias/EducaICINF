<?php

include 'BDconect.php';
$sql = "SELECT DISTINCT
cuestionario_pr.id_cuestionario,
cuestionario_pr.nombre_cuestionario,
cuestionario_pr.fecha
FROM
cuestionario_pr
INNER JOIN pregunta_pr ON pregunta_pr.id_cuestionario = cuestionario_pr.id_cuestionario";

$stmt = $db->prepare($sql);
$stmt->execute();
// $stmtImage->execute();
// $resultImage = $stmtImage->fetch();
$result = $stmt->fetchAll();

?>

<?php
/*$sql = "SELECT DISTINCT
cuestionario.id_cuestionario,
cuestionario.nombre_cuestionario,
cuestionario.fecha,
pregunta.id_pregunta
FROM
cuestionario
INNER JOIN pregunta ON pregunta.id_cuestionario = cuestionario.id_cuestionario
INNER JOIN eleccion ON eleccion.id_pregunta = pregunta.id_pregunta
WHERE
cuestionario.id_cuestionario = 19
ORDER BY
pregunta.id_pregunta DESC";

$stmt = $db->prepare($sql);
$stmt->execute();
// $stmtImage->execute();
// $resultImage = $stmtImage->fetch();
$result2 = $stmt->fetchAll();
*/
?>


<!-- MODAL -->
<div class="modal fade" id="myModal_tablaPR" role="dialog">
    <div class="modal-dialog">
    
      <!-- MODAL CONTENIDO-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pregunta Respuesta</h4>
        </div>
        
        <div class="modal-body">
       	  <form action="preguntas.php" method="post">
            	  <div class="well">Selecione cuestionario</div>
				  <!--<span class="label label-default">Nombre de cuestionario</span>
				  <input type="text" class="form-control" name="nombre_cuestionario">
				  <br>
				  <span class="label label-default">Nº preguntas</span>
				 <!-- <input type="text" class="form-control" id="nombre">
				 <input type="number" max="10" min="0" name="numero_preguntas">
				 <input type="submit" value="Crear"/>-->
				 <!-- TABLA SOLICITUDES -->
				<table class="table table-hover">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Nombre Cuestionario</th>
						<th>Fecha</th>
						<th>Acción</th>
					  </tr>
					</thead>
					<?php if(count($result) > 0):?> 
					<tbody>
				  	<?php for($i=0; $i < count($result); $i++):?>
					  <tr>
						<td><?php echo $result[$i]['id_cuestionario']; ?></td>
						<td><?php echo $result[$i]['nombre_cuestionario']; ?></td>
						<td><?php echo $result[$i]['fecha']; ?></td>
						<td><a class="btn btn-default actionButton" data-id=<?php echo $result[$i]['id_cuestionario']; ?> onclick="javascript:respuesta($(this).data('id'));"> Ver </a></td>
					  </tr>
					  <?php  endfor; ?>
					</tbody>
				  </table>
				<!-- / TABLA SOLICITUDES -->
				<?php  endif; ?>
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


<script>
function respuesta(id){

	var url = "modulo2/preguntasPR.php?n=" + id;
    $.ajax({
		type: "GET",
		url: url,
		success: function(data) {
			console.log(data);
			 //alert(data);
			 location.href='modulo2/preguntasPR.php?n=' + id;
			/*$(".modal-body2").html(data);
			$('#myModal2').modal({
				keyboard: true
				
			});*/
		}
	});

}

</script>
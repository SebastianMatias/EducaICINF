<?php
include '../../dbconfig.php';
$res = $_GET['respues'];
$id = $_GET['id'];
$sql = "SELECT id FROM `sinonimo` where `id` =  ".$id." AND `respuesta`= '".$res."'";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
if ( isset($result[0])) {
  $sql2="DELETE FROM `sinonimo` where `id` =  ".$id."";
  $stmt = $db->prepare($sql2);
  $stmt->execute();
   echo '<div class="form-inline">
      <div class="form-group" id="dynamicInput3">
        <p id="">"Bien Hecho"</p>
      </div>
      ';
    echo'  <script>

        setTimeout(function(){
              $(".close").click();
        },400);
        setTimeout(function(){
              $("#jugarSino").click();
        },800);

      </script>';
  #
}else {
  $sql2="DELETE FROM `sinonimo` where `id` =  ".$id."";
  $stmt = $db->prepare($sql2);
  $stmt->execute();
  echo '<div class="form-inline">
    <div class="form-group" id="dynamicInput3">
      <p id="">"Mal Hecho"</p>
    </div>
    ';
    echo'  <script>
    setTimeout(function(){
          $(".close").click();
    },400);
    setTimeout(function(){
          $("#jugarSino").click();
    },800);


      </script>';
}
?>

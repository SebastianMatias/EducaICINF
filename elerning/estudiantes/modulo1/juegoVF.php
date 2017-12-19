<?php
include '../../dbconfig.php';
$res = $_GET['res'];
$id = $_GET['id'];
$sql = "SELECT id FROM `verdadero` where `id` =  ".$id." AND `respuesta`= '".$res."'";

$stmt = $db->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
if ( isset($result[0])) {
  $sql2="DELETE FROM `verdadero` where `id` =  ".$id."";
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
              $("#jugarVF").click();
        },800);

      </script>';
  #
}else {
  $sql2="DELETE FROM `verdadero` where `id` =  ".$id."";
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
          $("#jugarVF").click();
    },800);


      </script>';
}
?>

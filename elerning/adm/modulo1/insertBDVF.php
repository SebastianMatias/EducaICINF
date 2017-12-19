<?php
include '../../dbconfig.php';

  for ($i = 1; $i < (count($_POST) +1)/2  ; $i++) {
    $afir[$i] = $_POST['pregunta'.$i];
    $res[$i] = $_POST['respuesta'.$i];
    $result[$i] = $db->query("INSERT INTO verdadero (afirmacion, respuesta) VALUES ('$afir[$i]', '$res[$i]')");
  //  echo $result[$i];
  }


?>

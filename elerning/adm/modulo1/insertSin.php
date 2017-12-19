<?php
include '../../dbconfig.php';

  for ($i = 1; $i < (count($_POST) +1)/3  ; $i++) {
    $afir[$i] = $_POST['sinonimo'.$i];
    $res[$i] = $_POST['respuesta'.$i];
    $palabra[$i] = $_POST['palabra'.$i];
    $result[$i] = $db->query("INSERT INTO sinonimo (sinonimos, respuesta, palabra) VALUES ('$afir[$i]', '$res[$i]', '$palabra[$i]')");
  //  echo $result[$i];
  }


?>

<?php
include '../../dbconfig.php';
for ($i=1; $i<=10; $i++) {
  $afir[$i] = $_POST['pregunta'+$i+];
  $res[$i] = $_POST['respuesta'+$i+];
  $result[$i] = $mysqli->query("INSERT INTO verdadero (afirmacion, respuesta) VALUES ('$afir[$i]', '$res[$i]')");
}

?>

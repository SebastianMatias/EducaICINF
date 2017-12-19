<?php
error_reporting(0);
$nombre_cuestionario = $_POST["nombre_cuestionario"];
$numero_preguntas = $_POST["numero_preguntas"];
$primer_id = $_POST["primer_id"];
$total = $numero_preguntas + $primer_id;
require_once 'BDconect.php';

//$fecha = date("Y-m-d");

//$result = $mysqli->query("INSERT INTO cuestionario_pr(nombre_cuestionario, fecha) VALUES('$nombre_cuestionario', '$fecha')");
//$lastid = mysqli_insert_id($mysqli);
//Recorre preguntas
for($i=$primer_id; $i <= $total; $i++){
	//obtenemos texto de la pregunta
	$respuesta = resp.$i;
	$pas = $_POST[$respuesta];
	$texto_respuesta = $pas;
	
	$id = id.$i;
	$pasid = $_POST[$id];
	$id_pregunta = $pasid;
	//echo $texto_respuesta;
	//echo $id_pregunta;
	//die();
	$result = $mysqli->query("INSERT INTO respuesta_pr(respuesta, id_pregunta) VALUES('$texto_respuesta', '$id_pregunta')");
	//$lastid_preg = mysqli_insert_id($mysqli);
	
}
echo "Cuestionario guardado";
header("Location: ../es_principal.php");
exit;
?>
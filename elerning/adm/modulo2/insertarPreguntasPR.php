<?php
error_reporting(0);
$nombre_cuestionario = $_POST["nombre_cuestionario"];
$numero_preguntas = $_POST["numero_preguntas"];
require_once 'BDconect.php';

$fecha = date("Y-m-d");

$result = $mysqli->query("INSERT INTO cuestionario_pr(nombre_cuestionario, fecha) VALUES('$nombre_cuestionario', '$fecha')");
$lastid = mysqli_insert_id($mysqli);


//Recorre preguntas
for($i=1; $i <= $numero_preguntas; $i++){
	//obtenemos texto de la pregunta
	$preg = p.$i;
	$pas = $_POST[$preg];
	$nombre_pregunta = $pas;
	$result = $mysqli->query("INSERT INTO pregunta_pr(nombre_pregunta, id_cuestionario) VALUES('$nombre_pregunta', '$lastid')");
	$lastid_preg = mysqli_insert_id($mysqli);
	
}
echo "Cuestionario guardado";
header("Location: ../ad_principal.php");
exit;
?>
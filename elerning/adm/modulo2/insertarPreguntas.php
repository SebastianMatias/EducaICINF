<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$nombre_cuestionario = $_POST["nombre_cuestionario"];
$numero_preguntas = $_POST["numero_preguntas"];
require_once 'BDconect.php';

$fecha = date("Y-m-d");

//echo $nombre_cuestionario;
//echo $fecha;

$result = $mysqli->query("INSERT INTO cuestionario(nombre_cuestionario, fecha) VALUES('$nombre_cuestionario', '$fecha')");
$lastid = mysqli_insert_id($mysqli);

//echo $lastid;
/*//Insertamos cuestionario
$sql = "INSERT INTO cuestionario(nombre_cuestionario, fecha) VALUES('$nombre_cuestionario', '$fecha')";
$sql = mysql_query($sql, $mysqli);

//obtener id del cuestionario que se acaba de insertar
$sql = "SELECT id_cuestionario FROM cuestionario ORDER BY fecha";
$sql = mysql_query($sql, $mysqli);
while($row = mysql_fetch_array($sql)){
	$id = $row["id_cuestionario"];
}*/

//Recorre preguntas
for($i=1; $i <= $numero_preguntas; $i++){
	//obtenemos texto de la pregunta
	$preg = p.$i;
	$pas = $_POST[$preg];
	$nombre_pregunta = $pas;
	$result = $mysqli->query("INSERT INTO pregunta(nombre_pregunta, id_cuestionario) VALUES('$nombre_pregunta', '$lastid')");
	$lastid_preg = mysqli_insert_id($mysqli);
	
	$correcta = c.$i;
	$pas_5 = $_POST[$correcta];
	$la_correcta = $pas_5;
	
	if ($la_correcta == "1"):
    	$es_correcta1 = 1;
	else:
		$es_correcta1 = 0;
	endif;
	
	if ($la_correcta == "2"):
    	$es_correcta2 = 1;
	else:
		$es_correcta2 = 0;
	endif;
	
	if ($la_correcta == "3"):
    	$es_correcta3 = 1;
	else:
		$es_correcta3 = 0;
	endif;
	
	if ($la_correcta == "4"):
    	$es_correcta4 = 1;
	else:
		$es_correcta4 = 0;
	endif;
	
	echo "la correcta $la_correcta";
	//echo "Es correcta $es_correcta";
	
	$eleccion1 = e1.$i;
	$pas_1 = $_POST[$eleccion1];
	$nombre_eleccion1 = $pas_1;
	
	$result2 = $mysqli->query("INSERT INTO eleccion(es_correcto, nombre_eleccion, id_pregunta) VALUES('$es_correcta1','$nombre_eleccion1', '$lastid_preg')");
	
	$eleccion2 = e2.$i;
	$pas_2 = $_POST[$eleccion2];
	$nombre_eleccion2 = $pas_2;
	
	$result3 = $mysqli->query("INSERT INTO eleccion(es_correcto, nombre_eleccion, id_pregunta) VALUES('$es_correcta2','$nombre_eleccion2', '$lastid_preg')");
	
	$eleccion3 = e3.$i;
	$pas_3 = $_POST[$eleccion3];
	$nombre_eleccion3 = $pas_3;
	
	$result4 = $mysqli->query("INSERT INTO eleccion(es_correcto, nombre_eleccion, id_pregunta) VALUES('$es_correcta3','$nombre_eleccion3', '$lastid_preg')");
	
	$eleccion4 = e4.$i;
	$pas_4 = $_POST[$eleccion4];
	$nombre_eleccion4 = $pas_4;
	
	$result5 = $mysqli->query("INSERT INTO eleccion(es_correcto, nombre_eleccion, id_pregunta) VALUES('$es_correcta4','$nombre_eleccion4', '$lastid_preg')");

	
	
}
header("Location: ../ad_principal.php");
exit;
?>
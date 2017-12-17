<?php require_once 'BDconect.php'; ?>
<?php session_start(); ?>
<?php
	
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}

	if($_POST){
		$numero = $_POST['numero'];
		$seleccion_eleccion = $_POST['eleccion'];
		$next = $numero+1;
		$total = $_POST['total'];
		
	

	$query = "SELECT * FROM eleccion INNER JOIN pregunta ON eleccion.id_pregunta = pregunta.id_pregunta INNER JOIN cuestionario ON pregunta.id_cuestionario = cuestionario.id_cuestionario WHERE eleccion.id_pregunta = $numero AND es_correcto = 1";
	$resultado = $mysqli->query($query) or die($mysqli->error._LINE_);

	$row = $resultado->fetch_assoc();
	
	$eleccion_correcta = $row['id_eleccion'];
		
	if($eleccion_correcta == $seleccion_eleccion){
		$_SESSION['score']++;
	}
		
	/*echo $numero;	
	echo $total;
	die();*/
	if($numero == $total){
		header("Location: final.php");
		exit();
	} else {
		header("Location: preguntas.php?n=".$next);
	}
}

?>
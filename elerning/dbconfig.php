<?php

$db_host = "127.0.0.1";
$db_name = "sistema_innovacion";
$db_user = "root";
$db_pass = "root";

try{
	
	$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
	$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo $e->getMessage();
}
?>
<?php
$mysqli = new mysqli("localhost", "root", "root", "educa_icinf");

$user='root';
$password='root';
$dbname='educa_icinf';
$host='localhost';

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
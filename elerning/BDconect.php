<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "educa_icinf");

$user='root';
$password='root';
$dbname='educa_icinf';
$host='127.0.0.1';

$db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
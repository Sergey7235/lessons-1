<?php

require_once '../config/db.php'; 

function registr($name, $login, $password, $pdo)
{
	$query = $pdo->prepare("INSERT INTO users(name, login, password) VALUES(?,?,?)");
	$query->execute([$name, $login, $password]);
	header("Location: ../templates/temp_login.php");
}

$name = $_POST['name'];
$login = $_POST['login'];
$password = $_POST['password'];

registr($name, $login, $password, $pdo);


 ?>
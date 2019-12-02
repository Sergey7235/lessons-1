<?php

require_once '../config/db.php'; 

function login($login, $password, $pdo)
{
	$query = $pdo->prepare("SELECT * FROM users WHERE password = ? AND login = ?");
	$query->execute([$password, $login]);
	$user = $query->fetch();
	if($user) {
		session_start();
		$_SESSION['user_id'] = $user['id'];
		header("Location: ../templates/temp_home.php");
	}	
}

$login = $_POST['login'];
$password = $_POST['password'];

login($login, $password, $pdo);


 ?>
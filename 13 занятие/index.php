<?php 

function debug($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

$login = 'test';
$password = '123231';
$name = 'alban';

require_once 'db.php';


$stmt = $pdo->query("DELETE FROM users WHERE id = 1");
$stmt = $pdo->query("SELECT * FROM users WHERE id = 1");
$stmt = $pdo->query("UPDATE users SET name = 'kolya' WHERE id = 1");
$stmt = $pdo->query("INSERT INTO users(name, login, password) VALUES('nikita', 'nikita123', '125123561')");



 ?>
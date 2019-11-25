<?php 
require_once 'db.php';


$stmt = $pdo->query('SELECT * FROM users');

$users = $stmt->fetchAll();

print_r($users);














function debug($arr)
{
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}








 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
		<textarea name="" id="" cols="30" rows="10"></textarea>
		<button>Выполнить</button>
	</form>
</body>
</html>


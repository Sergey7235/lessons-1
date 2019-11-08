<?php 
// session_start();

// $_SESSION['test'] = 'test';

// echo $_SESSION['login'];

// session_destroy();

setcookie('login', 'alex', time() + 3600 * 24);

echo $_COOKIE['login'];

setcookie('login', null, time());


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<a href="test.php">Ссылка</a>
</body>
</html>



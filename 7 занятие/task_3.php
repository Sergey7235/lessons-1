<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];





if(!$name) {
	echo "Не введен name";
}

else if(!$email) {
	echo "Не введен email";
}

else if(!$password) {
	echo "Не введен password";
}

else{
	echo "Вы молодец $name, ваш емейл - $email, ваш пароль - $password";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<div>Имя <input type="text" name="name"></div>
		<div>Емейл <input type="text" name="email"></div>
		<div>Пароль <input type="text" name="password"></div>
		<button>Регистрация</button>
	</form>
</body>
</html>
<?php 

function test()
{
	if($_POST['name'] == 'Алексей') {
		echo 'Привет, Алексей';
	}
}

echo test();



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="" method="POST">
		<div>Ваше имя<input type="text" name="name"></div>
		<div><input type="number" name="age"></div>
		<div><input type="date" name="birthday"></div>

		<div>Женский<input type="radio" name="male" value="Женский"></div>
		<div>Мужской<input type="radio" name="male" value="Мужской"></div>

		<div>Я согласен<input type="checkbox" name="right"></div>

		<div><textarea name="" id="" cols="30" rows="10" name="masseage"></textarea></div>

		<button>Закончить</button>
	</form>
</body>
</html>
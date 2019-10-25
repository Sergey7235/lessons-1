<?php 

$days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

$input = $_POST['day'] - 1;

echo $days[$input];

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		День недели <input type="text" name="day">
		<button>Вывести</button>
	</form>
</body>
</html>
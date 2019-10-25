<?php 

$arr = $_POST['array'];
$arr = explode(' ', $arr); 

foreach ($arr as $item) {
	if($item % 2 == 0) {
		echo $item . ',';
	}
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
		Введите массив <input type="text" name="array">
		<button>Рассчитать</button>
	</form>
</body>
</html>
<?php 

$str = $_POST['str'];
$open = 0;
$close = 0;


for ($i = 0; $i < strlen($str); $i++) { 
	if($str[$i] == '{') {
		$open++;
	}

	else {
		$close++;
	}
}


if($open == $close) {
	echo "Баланс соблюден";
}

else {
	echo "Баланса нет";
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
		<div>Введите массив <input type="text" name="str"></div>
		<button>Рассчитать</button>
	</form>
</body>
</html>
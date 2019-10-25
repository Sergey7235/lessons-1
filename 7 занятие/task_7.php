<?php 

$arr = explode(' ', $_POST['str']);
$newArr = [];
$count = count($arr) - 1;

foreach ($arr as $item) {
	while(true) {
		$rand = rand(0, $count);
		if(!$newArr[$rand] && $arr[$rand] != $item) {
			break;
		}
	}

	$newArr[$rand] = $item;
}

echo "<pre>";
print_r($newArr);
echo "</pre>";


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
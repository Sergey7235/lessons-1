<?php 

$string = '1,2,3,4,5';

//Строку в массив
$arr = explode(',', $string);


//Массив в строку
$newStr = implode(',', $arr);

echo $newStr;
echo "<pre>";
print_r($arr);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="">
		<select name="country">
			<option value="value_1">Вариант 1</option>
			<option value="value_2">Вариант 2</option>
			<option value="value_3">Вариант 3</option>
			<option value="value_4">Вариант 4</option>
		</select>
	</form>
</body>
</html>
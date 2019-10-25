<?php 

$str = $_POST['str'];
$repeat = [];

for ($i = 0; $i < strlen($str); $i++) { 
	if(!$repeat[$str[$i]]) {
		$repeat[$str[$i]] = 1;
		continue;
	}	

	$repeat[$str[$i]] += 1;
}

echo "<pre>";
print_r($repeat);
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
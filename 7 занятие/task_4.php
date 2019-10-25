<?php 

function solve()
{
	$price = $_POST['days'] * 400;
	$country = $_POST['country'];

	if($country == 'italy') {
		$price += $price * 0.1;
	}

	else if($country == 'egypt') {
		$price += $price * 0.12;
	}

	if($_POST['disc']) {
		$price -= $price * 0.05;
	}

	return $price;
}

echo solve();

 ?>
	
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="" method="POST">
		<div><select name="country">
				<option value="italy">Италия</option>
				<option value="egypt">Египет</option>
				<option value="spain">Испания</option>
			</select></div>
		<div><input type="text" name="days"></div>
		<div><input type="checkbox" name="disc"></div>
		<button>Рассчитать</button>
	</form>

</body>
</html>
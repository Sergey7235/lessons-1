<?php 

// function sayHello()
// {
// 	echo "Hello world";
// }

// function sum($a, $b = 5)
// {
// 	return $a + $b;
// }

// $result = sum(1);

// echo $result;



// function sum($a, ...$arr)
// {
// 	$sum = 0;
// 	foreach ($arr as $item) {
// 		$sum += $item;
// 	}

// 	return $sum;
// }

// $result = sum(2, 1,2,3,4,5,6,7,8,9);

// echo $result;


// echo sum(1, 4);

// function sum($a, $b)
// {
// 	return $a + $b;
// }
	



	// function fib($stop)
	// {
	// 	$a = 1;
	// 	$b = 1;
	// 	$res = 0;

	// 	while(true) {
	// 		$res = $a + $b;
	// 		$a = $b;
	// 		$b = $res; // b = 5, a = 3
	// 		if($res > $stop) {
	// 			break;
	// 		}
	// 		echo $res . ',';
	// 	}

	// }

	// fib(10000);

	// function symbolRepeat($str, $symbol)
	// {
	// 	$repeat = 0;

	// 	for ($i=0; $i < strlen($str); $i++) { 
	// 		if($str[$i] == $symbol) {
	// 			$repeat++;
	// 		}
	// 	}

	// 	return $repeat;
	// }

	// echo symbolRepeat('stringssss strgin', 's');

	function arrNotRepeat($arr)
	{
		$newArr = [];
		$repeat = false;

		foreach ($arr as $item) { // item = 1
			$repeat = false;

			foreach ($newArr as $newItem) {
				if($newItem == $item) {
					$repeat = true;
					break;
				}
			}

			if($repeat == false) {
				array_push($newArr, $item);
			}
		}

		echo "<pre>";
		print_r($newArr);
	}

	$arr = [1,1,1,2,3,4,56,7,45,6,3,6,45,7];
	arrNotRepeat($arr);






?>


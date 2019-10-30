<?php 	

class Car{
	public $name = 'standart';
	public $color = 'blue';
	public $price = 20000;
	public $maxSpeed = 250;
	private $speed = 0;
	public $engine = false;
	private $starter = false;

	public function carOn()
	{
		$this->engine = true;
		$this->starterOn();
		echo "Машина заведена" . "Состояние стартера " . $this->starter;
	}

	public function speedUp($speed)
	{
		if($this->engine) {
			if($this->speed + $speed < $this->maxSpeed) {
				$this->speed += $speed;
				echo "Машина разогналась до " . $this->speed . 'км/ч';			
			}

			else {
				echo "Машина не может так быстро ездить";
			}

		}

		else {
			echo "Сначала нужно завести машину";
		}
	}

	public function stop()
	{
		$this->engine = false;
		$this->starterOff();
		$this->speed = 0;

		echo "Машина заглушена";
	}

	private function starterOn()
	{
		$this->starter = true;
	}

	private function starterOff()
	{
		$this->starter = false;
	}

	public function calc($a, $b)
	{
		return $a + $b;
	}


}

$car = new Car();

$car->carOn();
$car->speedUp(150);














 ?>
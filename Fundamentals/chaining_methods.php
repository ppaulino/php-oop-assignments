<?php 

class Bike {
	public $price, $max_speed, $miles;

	public function __construct($price, $max_speed) {
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}
	public function displayInfo() {
		//display price, max speed and total miles driven
		echo "Price: " . $this->price ."<br>
		Max Speed: " . $this->max_speed ."<br>
		Total Miles: " . $this->miles ."<br><br>";
	}
	public function drive() {
		//display "Driving" on screen and increase total miles driven by 10
		echo "Driving...<br>";
		$this->miles = $this->miles + 10;
		return $this;
	}
	public function reverse() {
		//display "Reversing" on screen and decrease total miles driven by 5
		echo "Reversing...<br>";
		$this->miles = $this->miles - 5;
		if($this->miles < 0) { //prevent the instance from having negative miles
			$this->miles = 0;
		}
		return $this;
	}
}

$bike1 = new Bike(200, "25mph"); //This instance drive 3x, reverse once and displayInfo()
echo "<h3>Bike 1:</h3>";
$bike1->drive()->drive()->drive()->reverse()->displayInfo();

$bike2 = new Bike(300, "35mph"); //This instance drive 2x, reverse 2x, displayInfo()
echo "<h3>Bike 2:</h3>";
$bike1->drive()->drive()->reverse()->reverse()->displayInfo();

$bike3 = new Bike(400, "45mph"); //This instance reverse 3x, displayInfo()
echo "<h3>Bike 1:</h3>";
$bike1->reverse()->reverse()->reverse()->displayInfo();

?>
<?php
class Car {
	public $price, $speed, $fuel, $mileage, $tax;

	public function __construct($price, $speed, $fuel, $mileage) {
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;
		$this->tax = ($this->price > 10000) ? "0.15":"0.12";
	}
	public function displayAll() {
		//display price, max speed and total miles driven
		echo "Price: " . $this->price ."<br>
		Speed: " . $this->speed ."<br>
		Fuel: " . $this->fuel ."<br>
		Mileage: " . $this->mileage ."<br>
		Tax: " . $this->tax . "<br><br>";
	}
}

$car1 = new Car(1000, "35mph", "Full", "15mpg");
$car2 = new Car(2000, "5mph", "Not Full", "105mpg");
$car3 = new Car(3000, "15mph", "Kind of Full", "95mpg");
$car4 = new Car(11000, "45mph", "Empty", "25mpg");
$car5 = new Car(100000, "35mph", "Empty", "15mpg");

echo "<h3>Car 1:</h3>";
$car1->displayAll();

echo "<h3>Car 2:</h3>";
$car2->displayAll();

echo "<h3>Car 3:</h3>";
$car3->displayAll();

echo "<h3>Car 4:</h3>";
$car4->displayAll();

echo "<h3>Car 5:</h3>";
$car5->displayAll();

?>
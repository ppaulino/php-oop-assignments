<?php

class Animal {
	public $name, $health;

	public function __construct($name) {
		$this->name = $name;
		$this->health = 100;
	}
	public function walk() {
		echo "Walking...<br>";
		$this->health = $this->health - 1;
		return $this;
	}
	public function run() {
		echo "Running...<br>";
		$this->health = $this->health - 5;
		return $this;
	}
	public function displayHealth() {
		echo "Name: " . $this->name . "<br>";
		echo "Health: " . $this->health . "<br><br>";
	}
}

class Dog extends Animal {
	function __construct($name) {
		parent:: __construct($name);
		$this->health = 150;
	}
	function pet() {
		$this->health = $this->health + 5;
		return $this;
	}
}

class Dragon extends Animal {
	function __construct($name) {
		parent:: __construct($name);
		$this->health = 170;
	}
	function fly() {
		$this->health = $this->health - 10;
		return $this;
	}
	function displayHealth() {
		echo "This is a Dragon!<br>";
		parent::displayHealth();	
	}
}

$animal1 = new Animal("Animal");
$animal1->walk()->walk()->walk()->run()->run()->displayHealth();

$dog1 = new Dog("Dog");
$dog1->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$dragon1 = new Dragon("Dragon");
$dragon1->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();
?>
<?php

	$person1_name = 'Иванов';
	$person1_specialization = 'Программист';
	$person1_age = 25;

	function greatings($name, $spec, $age){
		echo "Привет! Я $name. Моя специальность $spec. Мне $age лет.";
	}

	$person2_name = 'Петров';
	$person2_specialization = 'Повар';
	$person2_age = 28;

  greatings($person1_name, $person1_specialization, $person1_age );
  echo '<br>';
  greatings($person2_name, $person2_specialization, $person2_age );

  class Person {

  	public $name;
  	public $specialization;
  	public $age;

  	public function __construct($name, $spec, $age){
  		$this->name = $name;
  		$this->specialization = $spec;
  		$this->age = $age;
  	}

  	public function greatings(){
  		echo "Привет! Я $this->name. Моя специальность $this->specialization. Мне $this->age лет.";
  	}
  }

$p1 = new Person('Вова', 'Физик', 67);
$p2 = new Person('Костя', 'Математик', 47);
echo '<h1> Объекты </h1>';
$p1->greatings();
  echo '<br>';
$p2->greatings();

?>
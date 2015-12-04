<?php

	function __autoload($className){  
		require_once('/class/'.$className.'.class.php');  
	}

	$Person = new Person(20, 25, 50, 'Android', 1);
	$android = new Attack(10, 2);

	echo $android->getStrenght();
	echo "<br />";

/*	$android = new Android();
	$chuck = new Human();

	echo $yoda->getLife();
	echo "<br />";

	echo "<br />";
	echo $chuck->talk();
	echo "<br />";
	echo $yoda->talk();
	echo "<br />";

	echo "<br />";
	$chuck->attack($yoda);

	echo $yoda->getLife();
	echo "<br />";

	echo "<br />";
	$yoda->attack($chuck);
	$yoda->attack($chuck);

	echo $chuck->getLife();*/
?>
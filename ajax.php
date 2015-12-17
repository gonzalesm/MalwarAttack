<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	function __autoload($className){
		require_once(dirname(__FILE__).'/class/'.$className.'.class.php');
    }
	
$output = array();

$x = $_POST['x'];
$y = $_POST['y'];
$name = $_POST['name'];

$output['x'] = $x;
$output['y'] = $y;

//$Startup = new Startup;
//
//$name = $Startup->getName();
//
//$output['name'] = $name;

${$name} = new $name;

$nom = ${$name}->getName();
$cost = ${$name}->getCost();

$output['nom'] = $nom;
$output['cost'] = $cost;

echo json_encode($output);

?>
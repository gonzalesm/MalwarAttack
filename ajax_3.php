<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	function __autoload($className){
		require_once(dirname(__FILE__).'/class/'.$className.'.class.php');
    }
	
$output = array();

$ennemy = $_POST['ennemy'];
$defence = $_POST['defence'];

${$defence} = new $defence;
$nom_defence = ${$defence}->getName();

//$output['life'] = $life;
$output['nom_defence'] = $nom_defence;

echo json_encode($output);

?>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	function __autoload($className){
		require_once(dirname(__FILE__).'/class/'.$className.'.class.php');
    }
	
$output = array();

$x_perso = $_POST['x_perso'];
$y_perso = $_POST['y_perso'];

$x_perso = $x_perso - 1;

$output['x_perso'] = $x_perso;
$output['y_perso'] = $y_perso;

echo json_encode($output);

?>
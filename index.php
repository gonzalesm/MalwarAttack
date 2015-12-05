<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	function __autoload($className){
		require_once(dirname(__FILE__).'/class/'.$className.'.class.php');  
	}

//DIV         =  new Type(PV, Nom, Level, X, Y);

//ATTAQUANTS
$Android      =  new Android;
$Intern      =  new Intern;
$Startup      =  new StartUp;
/*$Hacker       =  new Hacker;
$Malware      =  new Malware;
$Troyes       =  new Troyes;

//DEFENSEURS
$Startup      =  new StartUp;
$Stagiaire    =  new Intern;
$Developpeur  =  new Developer;
$Antivirus    =  new Antivirus;
$Nerd         =  new Nerd;*/

/*if(isset($_GET['nom'])){
    $nom = $_GET['nom'];    
    if(isset($_GET['move_x'])){ 
        if(isset($_COOKIE["move_x_".$nom])){
            ${$nom}->move_x($_COOKIE["move_x_".$nom]);
            setcookie("move_x_".$nom,$_COOKIE["move_x_".$nom]+$_GET['move_x']);
        }else{
            setcookie("move_x_".$nom,$_GET['move_x']);
        }
    }
}*/
//echo $_COOKIE["move_x_".$nom];

/*$Android->toAttack($Startup);
$Android->move_x(3);
$Android->move_y(3);

$test = new Attack();*/

/*$Startup->setCost(10);*/
/*echo $Startup->getCost();*/

echo '<pre>';
var_dump($Android);
echo '</pre>';

echo '<pre>';
var_dump($Intern);
echo '</pre>';

$Android->toAttack($Intern);
$Intern->toDefense($Android);

echo '<pre>';
var_dump($Android);
echo '</pre>';

echo '<pre>';
var_dump($Intern);
echo '</pre>';

$Intern->toDefense($Android);

echo '<pre>';
var_dump($Startup);
echo '</pre>';

$Startup->toProduceB(25);

echo '<pre>';
var_dump($Startup);
echo '</pre>';

/*
echo '<pre>';
var_dump($Stagiaire);
echo '</pre>';

echo '<pre>';
var_dump($Developpeur);
echo '</pre>';

echo '<pre>';
var_dump($Antivirus);
echo '</pre>';

echo '<pre>';
var_dump($Nerd);
echo '</pre>';*/

?>
<!-- 
<!DOCTYPE html>
<html lang="fr"
<head
    <meta charset="UTF-8">
    <title>MalWar Attack</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
   
<table class="table">
<caption>Attaquants</caption>
 <thead>
    <tr>
    <th>Nom</th>
    <th>PV</th> 
    <th>X</th>
    <th>Y</th>
    <th>Avancer</th>
  </tr>
 </thead>
  <tr>
    <td><?php echo $Android->GetName(); ?></td>
    <td><?php echo $Android->getLife(); ?></td>
    <?php if(isset($_COOKIE["move_x_".$Android->GetName()])){ ?>
    <td><?php echo $_COOKIE["move_x_".$Android->GetName()]; ?></td>
    <?php }else{ ?>
    <td><?php echo $Android->getX(); ?></td>
    <?php } ?> 
    <td><?php echo $Android->getY(); ?></td> 
    <td><a href="?nom=Android&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td> 
  </tr>
  <tr>
    <td><?php echo $Hacker->GetName(); ?></td>
    <td><?php echo $Hacker->getLife(); ?></td> 
    <td><?php echo $Hacker->getX(); ?></td> 
    <td><?php echo $Hacker->getY(); ?></td>
    <td><a href="?nom=Hacker&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td> 
  </tr>
    <tr>
    <td><?php echo $Malware->GetName(); ?></td>
    <td><?php echo $Malware->getLife(); ?></td> 
    <td><?php echo $Malware->getX(); ?></td> 
    <td><?php echo $Malware->getY(); ?></td>
    <td><a href="?nom=Malware&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td> 
  </tr>
   <tr>
    <td><?php echo $Troyes->GetName(); ?></td>
    <td><?php echo $Troyes->getLife(); ?></td> 
    <td><?php echo $Troyes->getX(); ?></td> 
    <td><?php echo $Troyes->getY(); ?></td>
    <td><a href="?nom=Troyes&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td>  
  </tr>
</table>

<table class="table">
<caption>Defenseurs</caption>
 <thead>
    <tr>
    <th>Nom</th>
    <th>PV</th> 
    <th>X</th>
    <th>Y</th>
    <th>Avancer</th>
  </tr>
 </thead>
  <tr>
    <td><?php echo $Startup->GetName(); ?></td>
    <td><?php echo $Startup->getLife(); ?></td> 
    <td><?php echo $Startup->getX(); ?></td> 
    <td><?php echo $Startup->getY(); ?></td>
    <td><a href="?nom=Startup&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td>  
  </tr>
  <tr>
    <td><?php echo $Stagiaire->GetName(); ?></td>
    <td><?php echo $Stagiaire->getLife(); ?></td> 
    <td><?php echo $Stagiaire->getX(); ?></td> 
    <td><?php echo $Stagiaire->getY(); ?></td>
    <td><a href="?nom=Stagiaire&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td>
  </tr>
  <tr>
    <td><?php echo $Developpeur->GetName(); ?></td>
    <td><?php echo $Developpeur->getLife(); ?></td> 
    <td><?php echo $Developpeur->getX(); ?></td> 
    <td><?php echo $Developpeur->getY(); ?></td>
    <td><a href="?nom=Developpeur&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td> 
  </tr>
  <tr>
    <td><?php echo $Antivirus->GetName(); ?></td>
    <td><?php echo $Antivirus->getLife(); ?></td> 
    <td><?php echo $Antivirus->getX(); ?></td> 
    <td><?php echo $Antivirus->getY(); ?></td>
    <td><a href="?nom=Antivirus&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td> 
  </tr>
  <tr>
    <td><?php echo $Nerd->GetName(); ?></td>
    <td><?php echo $Nerd->getLife(); ?></td> 
    <td><?php echo $Nerd->getX(); ?></td> 
    <td><?php echo $Nerd->getY(); ?></td>
    <td><a href="?nom=Nerd&move_x=1"><button type="button" class="btn btn-default">Avancer de 1 en X</button></a></td>  
  </tr>
</table>

</body>
</html> -->
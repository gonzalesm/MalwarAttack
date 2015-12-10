<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	function __autoload($className){
		require_once(dirname(__FILE__).'/class/'.$className.'.class.php');  
	}

//DIV         =  new Type(PV, Nom, Level, X, Y);

//ATTAQUANTS

/*$Hacker       =  new Hacker;
$Android      =  new Android;
$Malware      =  new Malware;
$Troyes       =  new Troyes;*/

//DEFENSEURS
$Intern      =  new Intern;
/*$Startup      =  new StartUp;
$Intern      =  new Intern;
$Developpeur  =  new Developer;
$Antivirus    =  new Antivirus;*/

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



// FONCTIONNEL //
// // FONCTIONNEL //


/*$game = new Game(0);
$wave = $game->getWave();
echo "Vague : ".$wave;

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


$waves = $game->nextWave($wave);
echo "<br />Vague : ".$waves;

$Intern->toDefense($Android);
$Android->toAttack($Intern);

echo '<pre>';
var_dump($Android);
echo '</pre>';*/

// FONCTIONNEL //
// FONCTIONNEL //

//nb d'attaquants
/*$attacks = 0;

$game = new Game(0);
$wave = $game->getWave();
echo "<b>Vague : ".$wave."</b><br />";

$Hacker1       =  new Hacker;
$attacks = $attacks + 1;

$Hacker2       =  new Hacker;
$attacks = $attacks + 1;

echo "Nb d'attaquants : ".$attacks;

echo '<pre>';
var_dump($Hacker1);
echo '</pre>';

$Intern->toDefense($Hacker1);

echo '<pre>';
var_dump($Hacker1);
echo '</pre>';

$Intern->toDefense($Hacker1);
$Intern->toDefense($Hacker1);
$Intern->toDefense($Hacker1);

echo '<pre>';
var_dump($Hacker1);
echo '</pre>';

if ($Hacker1->getLife() == 0) {
    $attacks = $attacks - 1;
}

echo '<pre>';
var_dump($Hacker2);
echo '</pre>';

$Intern->toDefense($Hacker2);
$Intern->toDefense($Hacker2);
$Intern->toDefense($Hacker2);
$Intern->toDefense($Hacker2);

echo '<pre>';
var_dump($Hacker2);
echo '</pre>';

if ($Hacker2->getLife() == 0) {
    $attacks = $attacks - 1;
}*/



$attacks = 0;

$game = new Game(0);
$wave = $game->getWave();

$bitcoin = 0;
echo "<b>Bitcoin : </b>".$bitcoin;
$Startup = new Startup;

$bitcoin = $Startup->toProduceB($bitcoin);

echo "<b>Bitcoin : </b>".$bitcoin;


// VAGUE 1
    
    $param = $game->paramWave($wave);

    echo "<b>Vague : ".$wave."</b><br />";

    $attacks = $param['total'];
    echo "Nb d'attaquants : ".$attacks;
    print_r($param);

    if ($param['android'] !== 0) {
        for ($i=0; $i < $param['android']; $i++) { 
            ${'Android'.$i} = new Android;
            $attacks = $attacks + 1;

            ${'Android'.$i}->levelUp();

            echo '<pre>';
            var_dump(${'Android'.$i});
            echo '</pre>';
        }
    }

    if ($param['troyes'] !== 0) {
        for ($i=0; $i < $param['troyes']; $i++) { 
            ${'Troyes'.$i} = new Troyes;
            $attacks = $attacks + 1;

            ${'Troyes'.$i}->levelUp();

            echo '<pre>';
            var_dump(${'Troyes'.$i});
            echo '</pre>';
        }
    }

    if ($param['hacker'] !== 0) {
        for ($i=0; $i < $param['hacker']; $i++) { 
            ${'Hacker'.$i} = new Hacker;
            $attacks = $attacks + 1;

            ${'Hacker'.$i}->levelUp();

            echo '<pre>';
            var_dump(${'Hacker'.$i});
            echo '</pre>';
        }
    }

    if ($param['malware'] !== 0) {
        for ($i=0; $i < $param['malware']; $i++) { 
            ${'Malware'.$i} = new Malware;
            $attacks = $attacks + 1;

            ${'Malware'.$i}->levelUp();

            echo '<pre>';
            var_dump(${'Malware'.$i});
            echo '</pre>';
        }
    }

    $attacks = $param['total'];
    echo "Nb d'attaquants : ".$attacks;


echo "<br /> <br /> <b>PREMIERE ATTAQUE :</b><br />";

echo '<pre>';
var_dump($Hacker1);
echo '</pre>';

echo '<pre>';
var_dump($Intern);
echo '</pre>';

     $Intern->toDefense($Hacker1);

if ($Hacker1->getLife() == 0) {
    $attacks = $attacks - 1;
}

echo '<pre>';
var_dump($Hacker1);
echo '</pre>';

echo "Nb d'attaquants : ".$attacks;

// VAGUE 2

    if ($attacks == 0) {
        $waves = $game->nextWave($wave);
        echo "<br /><b>Vague : ".$waves."</b><br />";

        $param = $game->paramWave($waves);
        print_r($param);

        if ($param['android'] !== 0) {
            for ($i=0; $i < $param['android']; $i++) { 
                ${'Android'.$i} = new Android;
                $attacks = $attacks + 1;

                ${'Android'.$i}->levelUp();

                echo '<pre>';
                var_dump(${'Android'.$i});
                echo '</pre>';
            }
        }

        if ($param['troyes'] !== 0) {
            for ($i=0; $i < $param['troyes']; $i++) { 
                ${'Troyes'.$i} = new Troyes;
                $attacks = $attacks + 1;

                ${'Troyes'.$i}->levelUp();

                echo '<pre>';
                var_dump(${'Troyes'.$i});
                echo '</pre>';
            }
        }

        if ($param['hacker'] !== 0) {
            for ($i=0; $i < $param['hacker']; $i++) { 
                ${'Hacker'.$i} = new Hacker;
                $attacks = $attacks + 1;

                ${'Hacker'.$i}->levelUp();

                echo '<pre>';
                var_dump(${'Hacker'.$i});
                echo '</pre>';
            }
        }

        if ($param['malware'] !== 0) {
            for ($i=0; $i < $param['malware']; $i++) { 
                ${'Malware'.$i} = new Malware;
                $attacks = $attacks + 1;

                ${'Malware'.$i}->levelUp();

                echo '<pre>';
                var_dump(${'Malware'.$i});
                echo '</pre>';
            }
        }
        
        $attacks = $param['total'];
        echo "Nb d'attaquants : ".$attacks;

    }

/*echo '<pre>';
var_dump($Stagiaire);
echo '</pre>';

echo '<pre>';
var_dump($Developpeur);
echo '</pre>';

echo '<pre>';
var_dump($Antivirus);
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
</table>

</body>
</html> -->
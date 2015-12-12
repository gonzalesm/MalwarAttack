<!DOCTYPE html>
<html lang="fr">
	<head>

		<meta charset="utf-8">
	  	<title>Malwar Attack</title>
	  	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
	  	<link rel="stylesheet" href="css/style.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	  	<script src="script.js"></script>

	</head>

<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	function __autoload($className){
		require_once(dirname(__FILE__).'/class/'.$className.'.class.php');  
	}

$Startup = new Startup;
$StartupCost = $Startup->getCost();

$Antivirus = new Antivirus;
$AntivirusCost = $Antivirus->getCost();

$Intern = new Intern;
$InternCost = $Intern->getCost();

$Developer = new Developer;
$DeveloperCost = $Developer->getCost();

$Game = new Game;
$paramWave = $Game->paramWave(0);

foreach($paramWave as $k => $ennemy){
    $name = $ennemy['name'];
    if(is_string($name)){
        ${$name} = new $name;
        $nom = ${$name}->getName();
      echo  $x = ${$name}->getX();
        $y = ${$name}->getY();
        
        ?>
            <script>
            $( document ).ready(function() {
//                $(".case").find("[data-x='" + x + "']").html('Bonjour');
                var y = <?php echo $y; ?>;
                var x = <?php echo $x; ?>;
                var result = $('.boardgame[data-y="'+ y +'"],[data-x="'+ x +'"]').html(y);
                });
        </script>
        <?php
    }
    
}

?>
    
	<body>

		<div class="menu-header">

			<div class="bitcoin" data-nb-bitcoin="0">
				<img style="width:40px; height:40px;  margin-top:5px;" src="images/bitcoin.png">
				<div class='value'>000</div>
			</div>

			<div class="vague">Vague : 00</div>

			<div class="person startup">
				<img style="width:40px; height:70px; margin-top:5px;" src="images/startup.png" data-name="Startup">
				<div class='value'><?php echo $StartupCost; ?></div>
			</div> 

			<div class="person antivirus">
				<img style="width:40px; height:70px; margin-top:5px;" src="images/antivirus.png" data-name="Antivirus">
				<div class="value"><?php echo $AntivirusCost; ?></div>
			</div>
			<div class="person intern">
				<img style="width:40px; height:70px; margin-top:5px;" src="images/intern.png" data-name="Intern">
				<div class="value"><?php echo $InternCost; ?></div>
			</div>
			<div class="person developper">
				<img style="width:40px; height:70px; margin-top:5px;" src="images/dev.png" data-name="Developer">
				<div class="value"><?php echo $DeveloperCost; ?></div>
			</div>

			<div class="menu">Menu</div>

		</div>

<!--
		<div class="boardgame">
			<div class="line">
				<div class="case case-pair" data-x="1" data-y="1"></div>
				<div class="case case-impair" data-x="1" data-y="2"></div>
				<div class="case case-pair" data-x="1" data-y="3"></div>
				<div class="case case-impair" data-x="1" data-y="4"></div>
				<div class="case case-pair" data-x="1" data-y="5"></div>
				<div class="case case-impair" data-x="1" data-y="6"></div>
				<div class="case case-pair" data-x="1" data-y="7"></div>
				<div class="case case-impair" data-x="1" data-y="8"></div>
				<div class="case case-pair" data-x="1" data-y="9"></div>
			</div>
			<div class="line">
				<div class="case case-impair" data-x="2" data-y="1"></div>
				<div class="case case-pair" data-x="2" data-y="2"></div>
				<div class="case case-impair" data-x="2" data-y="3"></div>
				<div class="case case-pair" data-x="2" data-y="4"></div>
				<div class="case case-impair" data-x="2" data-y="5"></div>
				<div class="case case-pair" data-x="2" data-y="6"></div>
				<div class="case case-impair" data-x="2" data-y="7"></div>
				<div class="case case-pair" data-x="2" data-y="8"></div>
				<div class="case case-impair" data-x="2" data-y="9"></div>
			</div>
			<div class="line">
				<div class="case case-pair" data-x="3" data-y="1"></div>
				<div class="case case-impair" data-x="3" data-y="2"></div>
				<div class="case case-pair" data-x="3" data-y="3"></div>
				<div class="case case-impair" data-x="3" data-y="4"></div>
				<div class="case case-pair" data-x="3" data-y="5"></div>
				<div class="case case-impair" data-x="3" data-y="6"></div>
				<div class="case case-pair" data-x="3" data-y="7"></div>
				<div class="case case-impair" data-x="3" data-y="8"></div>
				<div class="case case-pair" data-x="3" data-y="9"></div>
			</div>
			<div class="line">
				<div class="case case-impair" data-x="4" data-y="1"></div>
				<div class="case case-pair" data-x="4" data-y="2"></div>
				<div class="case case-impair" data-x="4" data-y="3"></div>
				<div class="case case-pair" data-x="4" data-y="4"></div>
				<div class="case case-impair" data-x="4" data-y="5"></div>
				<div class="case case-pair" data-x="4" data-y="6"></div>
				<div class="case case-impair" data-x="4" data-y="7"></div>
				<div class="case case-pair" data-x="4" data-y="8"></div>
				<div class="case case-impair" data-x="4" data-y="9"></div>
			</div>
			<div class="line">
				<div class="case case-pair" data-x="5" data-y="1"></div>
				<div class="case case-impair" data-x="5" data-y="2"></div>
				<div class="case case-pair" data-x="5" data-y="3"></div>
				<div class="case case-impair" data-x="5" data-y="4"></div>
				<div class="case case-pair" data-x="5" data-y="5"></div>
				<div class="case case-impair" data-x="5" data-y="6"></div>
				<div class="case case-pair" data-x="5" data-y="7"></div>
				<div class="case case-impair" data-x="5" data-y="8"></div>
				<div class="case case-pair" data-x="5" data-y="9"></div>
			</div>
-->

        
        
        
        <div class="boardgame">
			<div class="line">
				<div class="case case-pair" data-x="1" data-y="1"></div>
				<div class="case case-impair" data-x="2" data-y="1"></div>
				<div class="case case-pair" data-x="3" data-y="1"></div>
				<div class="case case-impair" data-x="4" data-y="1"></div>
				<div class="case case-pair" data-x="5" data-y="1"></div>
				<div class="case case-impair" data-x="6" data-y="1"></div>
				<div class="case case-pair" data-x="7" data-y="1"></div>
				<div class="case case-impair" data-x="8" data-y="1"></div>
				<div class="case case-pair" data-x="9" data-y="1"></div>
			</div>
			<div class="line">
				<div class="case case-impair" data-x="1" data-y="2"></div>
				<div class="case case-pair" data-x="2" data-y="2"></div>
				<div class="case case-impair" data-x="3" data-y="2"></div>
				<div class="case case-pair" data-x="4" data-y="2"></div>
				<div class="case case-impair" data-x="5" data-y="2"></div>
				<div class="case case-pair" data-x="6" data-y="2"></div>
				<div class="case case-impair" data-x="7" data-y="2"></div>
				<div class="case case-pair" data-x="8" data-y="2"></div>
				<div class="case case-impair" data-x="9" data-y="2"></div>
			</div>
			<div class="line">
				<div class="case case-pair" data-x="1" data-y="3"></div>
				<div class="case case-impair" data-x="2" data-y="3"></div>
				<div class="case case-pair" data-x="3" data-y="3"></div>
				<div class="case case-impair" data-x="4" data-y="3"></div>
				<div class="case case-pair" data-x="5" data-y="3"></div>
				<div class="case case-impair" data-x="6" data-y="3"></div>
				<div class="case case-pair" data-x="7" data-y="3"></div>
				<div class="case case-impair" data-x="8" data-y="3"></div>
				<div class="case case-pair" data-x="9" data-y="3"></div>
			</div>
			<div class="line">
				<div class="case case-impair" data-x="1" data-y="4"></div>
				<div class="case case-pair" data-x="2" data-y="4"></div>
				<div class="case case-impair" data-x="3" data-y="4"></div>
				<div class="case case-pair" data-x="4" data-y="4"></div>
				<div class="case case-impair" data-x="5" data-y="4"></div>
				<div class="case case-pair" data-x="6" data-y="4"></div>
				<div class="case case-impair" data-x="7" data-y="4"></div>
				<div class="case case-pair" data-x="8" data-y="4"></div>
				<div class="case case-impair" data-x="9" data-y="4"></div>
			</div>
			<div class="line">
				<div class="case case-pair" data-x="1" data-y="5"></div>
				<div class="case case-impair" data-x="2" data-y="5"></div>
				<div class="case case-pair" data-x="3" data-y="5"></div>
				<div class="case case-impair" data-x="4" data-y="5"></div>
				<div class="case case-pair" data-x="5" data-y="5"></div>
				<div class="case case-impair" data-x="6" data-y="5"></div>
				<div class="case case-pair" data-x="7" data-y="5"></div>
				<div class="case case-impair" data-x="8" data-y="5"></div>
				<div class="case case-pair" data-x="9" data-y="5"></div>
			</div>
			<p style="color:white;">
			X = <span id="display-x"></span><br>
			Y = <span id="display-y"></span>
			</p>
		</div>
<script type="text/javascript">

    
$( document ).ready(function() {
    var nb_bitcoin = $(".bitcoin").data('nb-bitcoin');
    $(".bitcoin .value").html(nb_bitcoin);
    
    
//$.ajax({
//url: 'ajax.php',
//data: {
//    x: x,
//    y: y,
//    name: $(ui.draggable).data('name'),
//
//},
//dataType: 'json',
//type: 'POST'
//}).done(function(data) {
//    $("#display-x").html(data.x);
////            $("#display-y").html(data.y);
//    $("#display-y").html(data.nom);
//    var cost = data.cost;
//
//    var bitcoin_old = $(".bitcoin").data('nb-bitcoin');
//    $(".bitcoin").data('nb-bitcoin', Number(bitcoin_old) - cost);
//    var nv_bitcoin_2 = $(".bitcoin").data('nb-bitcoin'); 
//    $(".bitcoin .value").html(nv_bitcoin_2);
//
//
//}).fail(function(data) {
//alert('Ajax failed');
//});  

    
});
//$( ".menu-header img" ).draggable('option', 'cancel', '.bitcon img');

 

 $( ".person img" ).draggable({ 
     revert: true,
     tolerance: 'fit',
     items: "tr:not(.bitcon img)",
     create: function(){$(this).data('position',$(this).position())},
 });

 // $( ".menu-header img" ).draggable('option', 'cancel', '.bitcon img');
    
$('.boardgame .case').droppable({
     drop:function(event, ui){
         
         var bitcoin = $(".bitcoin").data('nb-bitcoin');
         
         if(bitcoin < 25){
            // Pas assez de bitcoin
         }else{
         
         if($(this).data('not-empty') == true){
             // Si ya deja qqn dessus
         }else{
             
         snapToMiddle(ui.draggable,$(this));
         $(ui.draggable).draggable({ 
            revert: false,
         });
         $(ui.draggable).draggable('destroy');
         var x = $(this).data('x');
         var y = $(this).data('y');
        $(this).data('not-empty', 1);
         
         
//            var nb_bitcoin = $(".bitcoin").data('nb-bitcoin');  
//            $(".bitcoin").data('nb-bitcoin', Number(bitcoin) - 25);
         
//            var nv_bitcoin = $(".bitcoin").data('nb-bitcoin');    
//            alert(nv_bitcoin);
         
//             $(".bitcoin .value").html(nv_bitcoin);

		    	$.ajax({
                url: 'ajax.php',
                data: {
                    x: x,
                    y: y,
                    name: $(ui.draggable).data('name'),

                },
                dataType: 'json',
                type: 'POST'
            }).done(function(data) {
                    $("#display-x").html(data.x);
        //            $("#display-y").html(data.y);
                    $("#display-y").html(data.nom);
                    var cost = data.cost;

                    var bitcoin_old = $(".bitcoin").data('nb-bitcoin');
                    $(".bitcoin").data('nb-bitcoin', Number(bitcoin_old) - cost);
                    var nv_bitcoin_2 = $(".bitcoin").data('nb-bitcoin'); 
                    $(".bitcoin .value").html(nv_bitcoin_2);


            }).fail(function(data) {
                alert('Ajax failed');
            });
        
            if($(ui.draggable).data('name') == 'Startup'){
                window.setInterval(function(){
                  var bitcoin_old = $(".bitcoin").data('nb-bitcoin');
                  $(".bitcoin").data('nb-bitcoin', Number(bitcoin_old) + 25);
                  var nv_bitcoin_2 = $(".bitcoin").data('nb-bitcoin'); 
                  $(".bitcoin .value").html(nv_bitcoin_2);
                }, 10000);
            }

         }
         }
         
     },
 });
    
window.setInterval(function(){
  var bitcoin_old = $(".bitcoin").data('nb-bitcoin');
  $(".bitcoin").data('nb-bitcoin', Number(bitcoin_old) + 25);
  var nv_bitcoin_2 = $(".bitcoin").data('nb-bitcoin'); 
  $(".bitcoin .value").html(nv_bitcoin_2);
}, 5000);
    
function snapToMiddle(dragger, target){
    var topMove = target.position().top - dragger.data('position').top + (target.outerHeight(true) - dragger.outerHeight(true)) / 2;
    var leftMove= target.position().left - dragger.data('position').left + (target.outerWidth(true) - dragger.outerWidth(true)) / 2;
    dragger.animate({top:topMove,left:leftMove},{duration:600,easing:'easeOutBack'});
//    console.log(topMove);
}

</script>

	</body>

</html>
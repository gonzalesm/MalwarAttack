<!DOCTYPE html>
<html lang="fr">
    <head>

        <meta charset="utf-8">
        <title>Malwar Attack</title>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    </head>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

    function __autoload($className){
        require_once(dirname(__FILE__).'/class/'.$className.'.class.php');  
    }

function shuffle_assoc($array) {
    $keys = array_keys($array);

    shuffle($keys);

    foreach($keys as $key) {
        $new[$key] = $array[$key];
    }

    return $array = $new;

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


//$Troyes = new Troyes;
//$x = $Troyes->getX();
//$y = $Troyes->getY();

// Backup.php


$tab[] = array();
$tab2[] = array();

$nb_total = 0;

foreach($paramWave as $k => $ennemy){
$name = $ennemy['name'];
if(is_string($name)){
    ${$name} = new $name;
    $nom = ${$name}->getName();
    $x = ${$name}->getX();
    $y = ${$name}->getY();

    $tab[$k]['y_perso'] = $y;
    $tab[$k]['x_perso'] = $x;
    $tab[$k]['perso_name'] = $name;
    $tab[$k][$name]['nb_perso'] = $ennemy['nb'];
    
    for($nb=0; $nb < $ennemy['nb']; $nb++){
        $tab2[$nb_total]['y_perso'] = rand(1, 5);
        $tab2[$nb_total]['x_perso'] = $x;
        $tab2[$nb_total]['perso_name'] = $name;
        
    
        $nb_total = $nb_total+1;
    }
    
//    
//    $tab2 = shuffle_assoc($tab2);
//    
//    echo '<pre>';
//    var_dump($tab2);
//    echo '</pre>';
    

}

}

$tab = json_encode($tab);
$tab2 = json_encode($tab2);

?>

<script type="text/javascript">

    
var tab2 = <?php echo $tab2; ?>;
//console.log(tab2.length);

var move_multiple = function(tab){
    
//    console.log(tab.length);
    
                        var compteur = 0;
                        var destroy = false;
    
                        var interval = function(){
                             if(compteur < tab.length) {
                                  move(tab[compteur]['x_perso'], tab[compteur]['y_perso'], tab[compteur]['perso_name'], destroy, tab[compteur]['nb_perso']);
                            compteur++;
                             } else {
                                  clearInterval(interval);
                             }
                        };
    
                         $(document).ready(function(){
                            setInterval(interval, 2000);
                         });
    
                    for (i = 0; i < tab.length; i++) {
                    
                    
                    var y_perso = tab[i]['y_perso'];
                    var x_perso = tab[i]['x_perso'];
                    var perso_name = tab[i]['perso_name'];
                
//                    console.log(perso_name);
                    var move = function(x_perso, y_perso, perso_name, destroy, nb_perso){

                        $.ajax({
                        url: 'ajax_2.php',
                        data: {
                            perso_name: perso_name,
                            x_perso: x_perso,
                            y_perso: y_perso,
                        },
                        dataType: 'json',
                        type: 'POST'
                        }).done(function(data) {
                          if(destroy === false){
                            $('.case[data-y="'+ data.y_perso +'"][data-x="'+ data.x_perso +'"]').append('<img style="width:40px; height:70px; margin-top:5px; margin-left: 30px; margin-top: 15px;position:absolute;" src="images/'+ data.perso_name +'.png">').attr('data-full', '1').attr('data-name', perso_name);
                          }

            //            console.log(x_perso + ' - ' + y_perso);
                        if(destroy === false && Number(x_perso) === 1){
                          console.log('Perdu');
                        }

                        if(Number(x_perso) > 1){

                            // Pause dans le script
                                setTimeout(function(){

                                // L'ancienne position en "X" de l'ennemi
                                var old_x = Number(x_perso) - 1; // On décremente "old_x"

                                // Prend l'ancienne position de l'ennemi puis vide le contenu de la case
                                $('.case[data-y="'+ data.y_perso +'"][data-x="'+ old_x +'"]').html('').removeAttr('data-full'); // Trouver la case avec le data-x et data-y correspondant et vider son contenu

                                // Appeler recursivement la fonction "move" avec les nouvelles valeurs
                                move(data.x_perso, data.y_perso, data.perso_name, destroy, nb_perso);

                            }, 2000); // Pause de 2s

                            $('#nb_ennemy').html('23');
                            
                            var x_plus_1 = Number(data.x_perso) + 1;
                            var x_moins_1 = Number(data.x_perso) - 1;
                            
                            var y_plus_1 = Number(data.y_perso) + 1;
                            var y_moins_1 = Number(data.y_perso) - 1;
                            
//                            console.log(y_plus_1);
                            
                            if($('.case[data-x="'+ data.x_perso +'"][data-y="'+ data.y_perso +'"]').data('defence_full') == '1' ){
                            console.log('bonjour');

                            $('.case[data-x="'+ data.x_perso +'"][data-y="'+ data.y_perso +'"]').children().remove();
                            $('.case[data-x="'+ data.x_perso +'"][data-y="'+ data.y_perso +'"]').removeAttr('data-defence_full');
//                             $('.case[data-x="'+ data.x_perso +'"][data-y="'+ data.y_perso +'"]').attr('data-att-mort', "1");

                            $('img[data-perso_x="'+ data.x_perso +'"][data-perso_y="'+ data.y_perso +'"]').remove();
//                             $('img[data-perso_x="'+ data.x_perso +'"][data-perso_y="'+ data.y_perso +'"]').removeData('defence_full');
//                             $('img[data-perso_x="'+ data.x_perso +'"][data-perso_y="'+ data.y_perso +'"]').attr('data-def-mort', "1");
                            destroy = true;
                            }
                           
                        }

                        }).fail(function(data) {
                            // Si Ajax fail
                            alert('Ajax failed');
                        });
                    };
                      

            }
    

//var n = 1;
//var destroy = false;
//    
//setInterval(function(){
////    move(x_perso, y_perso, perso_name, destroy, nb_perso);
//}, 3000);

    
};
    
                    // var destroy = false;

                    //   // for (r = 0; r < 2; r++) {
                    //     // alert(r);
                    //         setInterval(function(){
                    //             for (r = 1; r < 3; r++) {
                    //                 setTimeout(function(){
                    //                 console.log("Hello");
                    //                 }, r * 1000
                    //                 );
                    //              }
                    //          }, 3000
                    //         );
// 
                        // setInterval(function(move(x_perso, y_perso, perso_name, destroy, nb_perso), Math.floor(Math.random() * 5) + 1) * 1000); // Pause de 2s
                      // }
    
move_multiple(<?php echo $tab2; ?>);
    
</script>
    <body>

        <div class="menu-header">

            <div class="bitcoin" data-nb-bitcoin="0">
                <img style="width:40px; height:40px;  margin-top:5px;" src="images/bitcoin.png">
                <div class='value'>000</div>
            </div>

            <div class="vague">Vague : 00</div>

            <div class="person startup" id="Startup">
                <img style="width: 40px; height: 70px; margin-top: 5px;" src="images/Startup.png" data-name="Startup">
                <div class='value'><?php echo $StartupCost; ?></div>
            </div> 

            <div class="person antivirus" id="Antivirus">
                <img style="width:40px; height:70px; margin-top:5px;" src="images/Antivirus.png" data-name="Antivirus">
                <div class="value"><?php echo $AntivirusCost; ?></div>
            </div>
            <div class="person intern" id="Intern">
                <img style="width:40px; height:70px; margin-top:5px;" src="images/Intern.png" data-name="Intern">
                <div class="value"><?php echo $InternCost; ?></div>
            </div>
            <div class="person developper" id="Developer">
                <img style="width:40px; height:70px; margin-top:5px;" src="images/Developper.png" data-name="Developer">
                <div class="value"><?php echo $DeveloperCost; ?></div>
            </div>
           
            Nombre d'ennemis restant : <span id="nb_ennemy" data-nb_ennemy=""></span>
            <div class="menu">Menu</div>

        </div>
        
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
    
});

 $( ".person img" ).draggable({ 
     helper : 'clone',
     revert: true,
     tolerance: 'fit',
     helper: function (e, ui) {
        return $(this).clone(true);
     },
     items: "tr:not(.bitcon img)",
      
    
     create: function(){
        $(this).data('position',$(this).position());
//         $(this).parent().append($(this).clone());
     },
     
 });
    
    
$('.boardgame .case').droppable({
     drop:function(event, ui){
         
         var bitcoin = $(".bitcoin").data('nb-bitcoin');
         
         if(bitcoin < 25){
            // Pas assez de bitcoin
         }else{
         
         if($(this).data('not-empty') == true){
             // Si ya deja qqn dessus
         }else{
            
             
        $(this).attr('data-defence_full', "1");
             
         snapToMiddle(ui.draggable,$(this));
         $(ui.draggable).draggable({ 
            revert: false,
         });
         $(ui.draggable).draggable('destroy');
         var x = $(this).data('x');
         var y = $(this).data('y');
        $(this).data('not-empty', 1);
         
         $(ui.draggable).attr('data-perso_x', x);
         $(ui.draggable).attr('data-perso_y', y);

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
            
             var class_drop = $(ui.draggable).closest("div").attr("id");
//             console.log($(ui.draggable).closest("div").attr("class"));
             console.log('#'+ class_drop +'');
             
//             $('#'+ class_drop +'').after('<span><img style="width:40px; height:70px; margin-top:5px;" src="images/Startup.png" data-name="Startup"></span>')
//            ui.draggable.clone().html($('#'+ class_drop +'')).draggable();
         }
         }
     },
 });

    
window.setInterval(function(){
  var bitcoin_old = $(".bitcoin").data('nb-bitcoin');
  $(".bitcoin").data('nb-bitcoin', Number(bitcoin_old) + 25);
  var nv_bitcoin_2 = $(".bitcoin").data('nb-bitcoin'); 
  $(".bitcoin .value").html(nv_bitcoin_2);
}, 1000);
    
function snapToMiddle(dragger, target){
    var topMove = target.position().top - dragger.data('position').top + (target.outerHeight(true) - dragger.outerHeight(true)) / 2;
    var leftMove= target.position().left - dragger.data('position').left + (target.outerWidth(true) - dragger.outerWidth(true)) / 2;
//    dragger.animate({top:topMove,left:leftMove},{duration:600,easing:'easeOutBack'}).css("position", "relative");
    console.log(topMove);
    
    dragger.css({"position" : "relative", "top" : topMove, "left" : leftMove, "margin-left" : "34px", "margin-top" : "5px"});
}

</script>

    </body>

</html>
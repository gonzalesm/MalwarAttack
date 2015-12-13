<?php
   foreach($paramWave as $k => $ennemy){
    $name = $ennemy['name'];
    if(is_string($name)){
        ${$name} = new $name;
        $nom = ${$name}->getName();
        $x = ${$name}->getX();
        $y = ${$name}->getY();
        
         for ($i=0; $i < $ennemy['nb']; $i++) { ?>
            <script>
                $( document ).ready(function() {
                    var y = <?php echo rand(1,5); ?>;
                    var x = <?php echo $x; ?>;

                    var nv_x = $('.case[data-y="'+ y +'"][data-x="'+ x +'"]').data('x');
                    var nv_y = $('.case[data-y="'+ y +'"][data-x="'+ x +'"]').data('y');
                    
                    function test(){
                        console.log('test');
                    }
                    
//                    while(Number(nv_x) < 1){
                            
                     window.setInterval(function(){
//                        var test = '<img style="width:40px; height:70px; margin-top:5px; margin-left: 30px; margin-top: 15px;position:absolute;" src="images/<?php echo $nom; ?>.png" data-name="<?php echo $nom; ?>">';
//                        var result = $('.case[data-y="'+ y +'"][data-x="'+ nv_x +'"]').append(test);
                         
                         test();
                     }, <?php echo 1000; ?>);
                    
                        var nv_x = Number(nv_x)+1;
//                    }
                
//                    window.setTimeout(function(){
//                        var test = '<img style="width:40px; height:70px; margin-top:5px; margin-left: 30px; margin-top: 15px;position:absolute;" src="images/<?php echo $nom; ?>.png" data-name="<?php echo $nom; ?>">';
//                        var result = $('.case[data-y="'+ y +'"][data-x="'+ x +'"]').append(test);
//                     }, <?php echo rand(1,20)*1000; ?>);

    //                window.setTimeout(function(){
    //                    var test = '<img style="width:40px; height:70px; margin-top:5px; margin-left: 30px; margin-top: 15px;position:absolute;" src="images/<?php echo $nom; ?>.png" data-name="<?php echo $nom; ?>">';
    ////                    var nv_x = Number(x) - 1;
    ////                    var nv_x = $('.case[data-y="'+ y +'"][data-x="'+ x +'"]').data('x');
    ////                    var nv_y = $('.case[data-y="'+ y +'"][data-x="'+ x +'"]').data('y');
    ////                    console.log(nv_y);
    ////                    $('.case[data-y="'+ y +'"][data-x="'+ nv_x +'"]').append(test);
    //                 }, <?php echo 1000; ?>);

                    });
            </script>
        <?php
        }
    }
        
}
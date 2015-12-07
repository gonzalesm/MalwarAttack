<?php

	class Troyes extends Attack{
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        $randomY = rand(0, 4);
	        parent::initialization(100, 'Troyes', 9, $randomY, 0);
	    }
	    
	    public function toAttack(Defence $enemy) {
	        $enemy->loseLife(20);
	        return $enemy->getLife();
	    }
	
	}
?>
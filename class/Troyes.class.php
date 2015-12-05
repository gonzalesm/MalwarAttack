<?php

	class Troyes extends Attack{
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        parent::initialization(30, 'Troyes', 9, 0, 0);
	    }
	    
	    public function toAttack(Defence $enemy) {
	        $enemy->loseLife(15);
	    }
	
	}
?>
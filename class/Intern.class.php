<?php

	class Intern extends Defence {
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        parent::initialization(20, 'Intern', 0, 0, 0);
	        parent::setCost(25);
	    }
		
		public function toDefense(Attack $enemy) {
	            $enemy->loseLife(5);
	    }
	}

?>
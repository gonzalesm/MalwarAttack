<?php

	class Intern extends Defence {
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        parent::initialization(30, 'Intern', 0, 0, 0);
	        parent::setCost(25); // Setter : Coût de 25 bitcoins
	    }
		
		public function toDefense(Attack $enemy) {
			if ($this->getY() == $enemy->getY()) {
	        	$enemy->loseLife(5);
	        	// 5 de dégâts envoyé en paramètre de loseLife et infligé à l'enemy
	  		}
			return $enemy->getLife();
	    }
	}

?>
<?php

	class Developer extends Defence{
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        parent::initialization(50, 'Dev', 0, 0, 0);
	        parent::setCost(25);
	    }

	    public function toDefense(Attack $enemy) {
		    $enemy->loseLife(15);
		    return $enemy->getLife();
		}
	}

?>
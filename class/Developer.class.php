<?php

	class Developer extends Defence{
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        parent::initialization(50, 'Dev', 0, 0, 0);
	        parent::setCost(25);
	    }

	    public function toDefense(Attack $enemy) {
	    	$difX = $this->getX() - $enemy->getX();
	    	if ($this->getY() == $enemy->getY() && $difX <= 2) {
	        	$enemy->loseLife(15);
	  		}
		    
		    return $enemy->getLife();
		}
	}

?>
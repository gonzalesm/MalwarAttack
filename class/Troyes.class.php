<?php

	class Troyes extends Attack{
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        $randomY = rand(0, 4);
	        parent::initialization(100, 'Troyes', 9, $randomY, 0);
	    }
	    
	    public function toAttack(Defence $enemy) {
	        $difX = $this->getX() - $enemy->getX();
            if ($this->getY() == $enemy->getY() && $difX = 1) {
                $enemy->loseLife(20);
            }
	        return $enemy->getLife();
	    }
	
	}
?>
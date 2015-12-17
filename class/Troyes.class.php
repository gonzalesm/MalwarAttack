<?php

	class Troyes extends Attack{
	    
	    public function __construct(){
	        $randomY = rand(1, 5); // Valeur de Y aléatoire (entre 1 et 5)
	        // $life, $name, $x, $y, $level
	        parent::initialization(100, 'Troyes', 10, $randomY, 0);
	    }
	    
	    public function toAttack(Defence $enemy) {
	        $difX = $this->getX() - $enemy->getX();
            if ($this->getY() == $enemy->getY() && $difX = 1) {
                $enemy->loseLife(20);
                // 20 de dégâts envoyé en paramètre de loseLife et infligé à l'enemy
            }
	        return $enemy->getLife();
	    }
	
	}
?>
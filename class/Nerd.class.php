<?php

	class Nerd extends Defence{
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        parent::initialization(15, 'Nerd', 0, 0, 0);
	        parent::setCost(100);
	    }

		public function toDefense(Attack $enemy) {

		}
	}

?>
<?php

	class Antivirus extends Defence {
	    
	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        parent::initialization(30, 'Antivirus', 0, 0, 0);
	        parent::setCost(50);
	    }

	    public function toDefense(Attack $enemy=NULL) {

	    }

	}

?>
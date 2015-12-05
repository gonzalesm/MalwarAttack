<?php

	class Nerd extends Defence{
	    
	    protected $push;

	    public function __construct(){
	        // $life, $name, $x, $y, $level
	        parent::initialization(15, 'Nerd', 0, 0, 0);
	        parent::setCost(100);
	        $this->setPush(2);
	    }

	    public function getPush() {
            return $this->push;
        }

        public function setPush($push) {
            $this->push = $push;
        }

		public function toDefense(Attack $enemy) {

		}

		public function levelUp(){
            parent::levelUp();
            $this->push += 1;
        }

	}

?>
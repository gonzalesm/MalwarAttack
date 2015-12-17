<?php

	class StartUp extends Defence {

		protected $bitcoin;

	    public function __construct(){
	    	// $life, $name, $x, $y, $level
	        parent::initialization(30, 'Startup', 0, 0, 0);
	        parent::setCost(50); // Setter : Coût de 50 bitcoins
	        $this->setBitcoin(25); // Setter : Nombre de bitcoins produits tous les x temps
	    }

	    public function getBitcoin() {
            return $this->bitcoin;
        }

        public function setBitcoin($bitcoin) {
            $this->bitcoin = $bitcoin;
        }

	    public function toDefense(Attack $enemy=NULL) {}

	    public function toProduceB($nbBitcoin) {
	    	$total = $this->bitcoin += $nbBitcoin;
	    	return $total;
	    }

	    public function levelUp(){
            parent::levelUp();
            $this->bitcoin += 5;
        }

	}
?>
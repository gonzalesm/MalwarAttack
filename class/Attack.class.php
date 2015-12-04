<?php
    /**
     * Created by PhpStorm.
     * User: valentin.berthelot
     * Date: 18/11/2015
     * Time: 10:05
     */

    class Attack extends Person {
        protected $strenght;
        protected $attributeB;

        public function __construct($strenght, $attributeB){
            $this->setStrenght($strenght);
            $this->setAttributeB($attributeB);
        }

        public function getStrenght() {
            return $this->strenght;
        }

        public function setStrenght($strenght) {
            $this->strenght = $strenght;
        }

        public function getAttributeB() {
            return $this->attributeB;
        }

        public function setAttributeB($attributeB) {
            $this->attributeB = $attributeB;
        }

        public function toAttack(Defence $enemy) {
            $enemy->loseLife(1);
        }
    }
?>

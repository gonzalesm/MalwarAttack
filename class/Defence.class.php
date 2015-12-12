<?php

	abstract class Defence extends Person {
        protected $cost;

        public function getCost() {
            return $this->cost;
        }

        public function setCost($cost) {
            $this->cost = $cost;
        }

        public function initialization($life, $name, $x, $y, $level){
            parent::setLife($life);
            parent::setName($name);
            parent::setX($x);
            parent::setY($y);
            parent::setLevel($level);
        }

        public function persoActive($number){
            $this->number += $number;
        }

        abstract public function toDefense(Attack $enemy);

        public function levelUp(){
            parent::levelUp();
            $this->life += 4;
        }

    }
?>
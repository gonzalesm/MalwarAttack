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

        abstract public function toDefense(Attack $enemy);

        public function levelUp(){
            $this->level ++;
            $this->life *= 1.1;
        }

    }
?>
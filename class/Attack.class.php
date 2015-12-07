<?php

    abstract class Attack extends Person {

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

        abstract public function toAttack(Defence $enemy);


        public function levelUp($level){
            $this->level += $level;
            $this->life *= 1.1;
        }
        
    }
?>

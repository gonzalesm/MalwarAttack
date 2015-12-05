<?php

    abstract class Attack extends Person {

        public function initialization($life, $name, $x, $y, $level){
            parent::setLife($life);
            parent::setName($name);
            parent::setX($x);
            parent::setY($y);
            parent::setLevel($level);
        }

        abstract public function toAttack(Defence $enemy);

    }
?>

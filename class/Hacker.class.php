<?php

    class Hacker extends Attack {

        public function __construct(){
            // $life, $name, $x, $y, $level
            $randomY = rand(1, 5);
            parent::initialization(20, 'Hacker', 10, $randomY, 0);
        }

        public function toAttack(Defence $enemy) {
            if ($this->getY() == $enemy->getY()) {
                $enemy->loseLife(55);
            }
           
            return $enemy->getLife();
        }

    }

?>
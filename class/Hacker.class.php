<?php

    class Hacker extends Attack {

        public function __construct(){
            // $life, $name, $x, $y, $level
            $randomY = rand(0, 4);
            parent::initialization(20, 'Hacker', 9, $randomY, 0);
        }

        public function toAttack(Defence $enemy) {
            if ($this->getY() == $enemy->getY()) {
                $enemy->loseLife(55);
            }
           
            return $enemy->getLife();
        }

    }

?>
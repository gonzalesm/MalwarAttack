<?php

    class Hacker extends Attack {

        public function __construct(){
            // $life, $name, $x, $y, $level
            $randomY = rand(0, 4);
            parent::initialization(20, 'Hacker', 9, $randomY, 0);
        }

        public function toAttack(Defence $enemy) {
            $enemy->loseLife(5);
            return $enemy->getLife();
        }

    }

?>
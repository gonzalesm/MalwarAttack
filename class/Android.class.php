<?php

    class Android extends Attack {

        public function __construct(){
            // $life, $name, $x, $y, $level
            $randomY = rand(0, 4);
            parent::initialization(50, 'Android', 9, $randomY, 0);
        }

        public function toAttack(Defence $enemy) {
            $enemy->loseLife(10);
            return $enemy->getLife();
        }

    }
?>
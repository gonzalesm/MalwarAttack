<?php

    class Hacker extends Attack {

        public function __construct(){
            // $life, $name, $x, $y, $level
            parent::initialization(30, 'Hacker', 9, 0, 0);
        }

        public function toAttack(Defence $enemy) {
            $enemy->loseLife(5);
        }

    }

?>
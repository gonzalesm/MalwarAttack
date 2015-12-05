<?php

    class Android extends Attack {

        public function __construct(){
            // $life, $name, $x, $y, $level
            parent::initialization(30, 'Android', 9, 0, 0);
        }

        public function toAttack(Defence $enemy) {
            $enemy->loseLife(10);
        }

    }
?>
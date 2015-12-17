<?php

    class Android extends Attack {

        public function __construct(){
            // $life, $name, $x, $y, $level
            $randomY = rand(1, 5);
            parent::initialization(50, 'Android', 9, $randomY, 0);
        }

        public function toAttack(Defence $enemy) {
            $difX = $this->getX() - $enemy->getX();
            if ($this->getY() == $enemy->getY() && $difX = 1) {
                $enemy->loseLife(10);
            }
            
            return $enemy->getLife();
        }

    }
?>
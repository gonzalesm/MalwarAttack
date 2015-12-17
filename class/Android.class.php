<?php

    class Android extends Attack {

        public function __construct(){
            $randomY = rand(1, 5); // Valeur de Y aléatoire (entre 1 et 5)
            // $life, $name, $x, $y, $level
            parent::initialization(50, 'Android', 10, $randomY, 0);
        }

        public function toAttack(Defence $enemy) {
            $difX = $this->getX() - $enemy->getX();
            if ($this->getY() == $enemy->getY() && $difX = 1) {
                $enemy->loseLife(10);
                // 10 de dégâts envoyé en paramètre de loseLife et infligé à l'enemy
            }
            return $enemy->getLife();
        }

    }
?>
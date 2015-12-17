<?php

    class Hacker extends Attack {

        public function __construct(){
            $randomY = rand(1, 5); // Valeur de Y aléatoire (entre 1 et 5)
            // $life, $name, $x, $y, $level
            parent::initialization(20, 'Hacker', 10, $randomY, 0);
        }

        public function toAttack(Defence $enemy) {
            if ($this->getY() == $enemy->getY()) {
                $enemy->loseLife(55);
                // 55 de dégâts envoyé en paramètre de loseLife et infligé à l'enemy
            }
            return $enemy->getLife();
        }

    }

?>
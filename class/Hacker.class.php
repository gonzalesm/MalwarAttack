<?php

class Hacker extends Attack {

    public function __construct(){
        parent::initialization(30, 'Hacker', 9, 0, 0);
    }

    public function toAttack(Person $enemy) {
        $enemy->loseLife(5);
    }

} 
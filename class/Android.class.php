<?php

class Android extends Attack {

    public function __construct(){
        parent::initialization(30, 'Android', 9, 0, 0);
    }

    public function toAttack(Person $enemy) {
        $enemy->loseLife(10);
    }
} 
<?php

class Troyes extends Attack{
    
    public function __construct(){
        parent::initialization(30, 'Troyes', 9, 0, 0);
    }
    
    public function toAttack(Person $enemy) {
        $enemy->loseLife(15);
    }
} 
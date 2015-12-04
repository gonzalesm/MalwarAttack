<?php
/**
 * Created by PhpStorm.
 * User: valentin.berthelot
 * Date: 18/11/2015
 * Time: 10:59
 */

class Android extends Attack {

    public function __construct(){
        parent::__construct();
    }

    public function toAttack(Defence $enemy) {
        parent::loseLife();
        $enemy->loseLife();
    }

    public function AttackBodyToBody($enemy){
        toAttack($enemy);
    }

} 
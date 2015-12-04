<?php
/**
 * Created by PhpStorm.
 * User: valentin.berthelot
 * Date: 18/11/2015
 * Time: 10:30
 */

class Game{
    protected $wave;
    protected $numberAttacks;


    public function __construct($wave) {
    $this->setWave($wave);
    }

    public function wave(){
        $android = 5;
        $virus = 0;
        $hacker = 0;

        if ($wave++) {
            $android = $android * $wave;
            $virus = 2 * $wave;
            $hacker = 2 * $wave;
        }


    }

    public function nextWave(){
        if ($numberAttacks == 0) {
            $wave++;
        }
    }
}

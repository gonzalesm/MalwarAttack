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

    public function getWave() {
        return $this->wave;
    }

    public function setWave($wave) {
        $this->wave = $wave;
    }

    public function nextWave($nbWave){
        $android = 0;
        $troyes = 0;
        $hacker = 0;
        $malware = 0;

        $totalAttacks = $android + $troyes + $hacker + $malware;

        if ($totalAttacks == 0) {
            $nbWave = $nbWave + 1;
        }

        return $nbWave;
    }


    public function paramWave($nbWave){
        switch ($nbWave) {
            case 0:
                $android = 0;
                $troyes = 0;
                $hacker = 8;
                $malware = 4;
                break;
            
            case 1:
                $android = 1;
                $troyes = 0;
                $hacker = 10;
                $malware = 4;
                break;

            case 2:
                $android = 2;
                $troyes = 0;
                $hacker = 10;
                $malware = 6;
                break;

            case 3:
                $android = 4;
                $troyes = 0;
                $hacker = 12;
                $malware = 6;
                break;

            case 4:
                $android = 3;
                $troyes = 1;
                $hacker = 14;
                $malware = 6;
                break;

            case 5:
                $android = 4;
                $troyes = 1;
                $hacker = 14;
                $malware = 8;
                break;

            case 6:
                $android = 4;
                $troyes = 2;
                $hacker = 16;
                $malware = 10;
                break;

            case 7:
                $android = 5;
                $troyes = 2;
                $hacker = 16;
                $malware = 12;
                break;

            case 8:
                $android = 3;
                $troyes = 1;
                $hacker = 14;
                $malware = 6;
                break;

            case 9:
                $android = 4;
                $troyes = 1;
                $hacker = 14;
                $malware = 8;
                break;

            default:
                # code...
                break;
        }
    }
}

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
        $nbWave = $nbWave + 1;
        return $nbWave;
    }

    public function paramWave($nbWave){
        switch ($nbWave) {
            case 0:
                $android = 0;
                $troyes = 0;
                $hacker = 8;
                $malware = 4;
                
                $total = $android + $troyes + $hacker + $malware;
                $array = array(
                    array('name' => 'Android','nb' => $android),
                    array('name' => 'Hacker','nb' => $hacker),
                    array('name' => 'Malware','nb' => $malware),
                    array('name' => 'Troyes','nb' => $troyes),
                    'total' => $total
                );

                return $array;
                break;
            
            case 1:
                $android = 1;
                $troyes = 0;
                $hacker = 10;
                $malware = 4;
                
                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);
                
                return $array;
                break;

            case 2:
                $android = 2;
                $troyes = 0;
                $hacker = 10;
                $malware = 6;
                
                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;

            case 3:
                $android = 2;
                $troyes = 1;
                $hacker = 12;
                $malware = 6;

                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;

            case 4:
                $android = 3;
                $troyes = 1;
                $hacker = 14;
                $malware = 6;

                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;

            case 5:
                $android = 4;
                $troyes = 1;
                $hacker = 14;
                $malware = 8;

                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;

            case 6:
                $android = 4;
                $troyes = 2;
                $hacker = 16;
                $malware = 10;

                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;

            case 7:
                $android = 5;
                $troyes = 2;
                $hacker = 16;
                $malware = 12;

                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;

            case 8:
                $android = 5;
                $troyes = 4;
                $hacker = 18;
                $malware = 12;

                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;

            case 9:
                $android = 6;
                $troyes = 5;
                $hacker = 20;
                $malware = 14;
                
                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;

            default:
                $android = 0;
                $troyes = 0;
                $hacker = 8;
                $malware = 4;
                
                $total = $android + $troyes + $hacker + $malware;
                $array = array('android' => $android, 'troyes' => $troyes, 'hacker' => $hacker, 'malware' => $malware, 'total' => $total);

                return $array;
                break;
        }
    }


}

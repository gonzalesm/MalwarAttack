<?php
/**
 * Created by PhpStorm.
 * User: valentin.berthelot
 * Date: 18/11/2015
 * Time: 11:06
 */

class Virus {
    protected $life;
    protected $dammages;

    /**
     * @return mixed
     */
    public function getDammages()
    {
        return $this->dammages;
    }

    /**
     * @param mixed $dammages
     */
    public function setDammages($dammages)
    {
        $this->dammages = $dammages;
    }

    /**
     * @return mixed
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param mixed $life
     */
    public function setLife($life)
    {
        $this->life = $life;
    }

    public function directAttack(){

    }
} 
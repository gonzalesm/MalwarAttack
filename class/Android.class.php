<?php
/**
 * Created by PhpStorm.
 * User: valentin.berthelot
 * Date: 18/11/2015
 * Time: 10:59
 */

class Android extends Attack {
    protected $life;
    protected $dammage;

    /**
     * @return mixed
     */
    public function getDammage()
    {
        return $this->dammage;
    }

    /**
     * @param mixed $dammage
     */
    public function setDammage($dammage)
    {
        $this->dammage = $dammage;
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

    public function AttackBodyToBody(){

    }

} 
<?php
/**
 * Created by PhpStorm.
 * User: valentin.berthelot
 * Date: 18/11/2015
 * Time: 10:05
 */

class Attack extends Person {
    protected $attributeA;
    protected $attributeB;

    /**
     * @return mixed
     */
    public function getAttributeA()
    {
        return $this->attributeA;
    }

    /**
     * @param mixed $attributeA
     */
    public function setAttributeA($attributeA)
    {
        $this->attributeA = $attributeA;
    }

    /**
     * @return mixed
     */
    public function getAttributeB()
    {
        return $this->attributeB;
    }

    /**
     * @param mixed $attributeB
     */
    public function setAttributeB($attributeB)
    {
        $this->attributeB = $attributeB;
    }

    public function methodeA(){

    }

    public function methodeB(){

    }
}


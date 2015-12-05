<?php

class Developer extends Defence{
    
    public function __construct(){
        parent::initialization(20, 'Dev', 0, 0, 0);
        parent::setCost(25);
    }

} 
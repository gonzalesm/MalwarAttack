<?php

class Nerd extends Defence{
    
    public function __construct(){
        parent::initialization(15, 'Nerd', 0, 0, 0);
        parent::setCost(100);
    }

} 
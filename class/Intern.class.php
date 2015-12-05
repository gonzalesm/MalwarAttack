<?php

class Intern extends Defence {
    
    public function __construct(){
        parent::initialization(20, 'Intern', 0, 0, 0);
        parent::setCost(25);
    }

} 
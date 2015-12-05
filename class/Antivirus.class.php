<?php

class Antivirus extends Defence {
    
    public function __construct(){
        parent::initialization(30, 'Antivirus', 0, 0, 0);
        parent::setCost(50);
    }
}

?>
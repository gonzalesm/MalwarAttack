<?php

     class Person {
    
        protected $life;
        protected $name;
        protected $level;
        protected $x;
        protected $y;

    public function getLife() {
        return $this->life;
    }
    public function getName() {
        return $this->name;
    }
    public function getLevel() {
        return $this->level;
    }
    public function getX() {
        return $this->x;
    }
    public function getY() {
        return $this->y;
    }
    public function setLife($life) {
        $this->life = $life;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function setLevel($level) {
        $this->level = $level;
    }
    public function setX($x) {
        $this->x = $x;
    }
    public function setY($y) {
        $this->y = $y;
    }


        public function loseLife($lifeLost){
            $this->life -= $lifeLost;
        }
         
        /*public function move_x($nb=1){
            $this->x += $nb;
        }
         
        public function move_y($nb=1){
            $this->y += $nb;
        }*/
         
        
    }
?>
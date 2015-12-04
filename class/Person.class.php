<?php
/**
 * Created by PhpStorm.
 * User: valentin.berthelot
 * Date: 18/11/2015
 * Time: 12:50
 */

     class Person {
        protected $life;
        protected $name;
        protected $level;
        protected $x;
        protected $y;

        public function __construct($life, $name, $level, $x, $y){
            $this->setLife($life);
            $this->setName($name);
            $this->setLevel($level);
            $this->setX($x);
            $this->setY($y);
        }

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
    }
?>
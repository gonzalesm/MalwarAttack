<?php
/**
 * Created by PhpStorm.
 * User: valentin.berthelot
 * Date: 18/11/2015
 * Time: 12:53
 */

	class Defence extends Person {
        protected $cost;
        protected $level;

        public function getCost() {
            return $this->cost;
        }

        public function setCost($cost) {
            $this->cost = $cost;
        }

        public function getLevel() {
            return $this->level;
        }

        public function setLevel($level) {
            $this->level = $level;
        }

        public function toDefense(Attack $enemy) {
            $enemy->loseLife();
        }

        public function levelUp($level) {
            if ($wave ++){
                return true;
            }
        }

        public function looseLife() {

        }
    }
?>
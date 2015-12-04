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

        /**
         * @return mixed
         */
        public function getCost()
        {
            return $this->cost;
        }

        /**
         * @param mixed $cost
         */
        public function setCost($cost)
        {
            $this->cost = $cost;
        }

        /**
         * @return mixed
         */
        public function getLevel()
        {
            return $this->level;
        }

        /**
         * @param mixed $level
         */
        public function setLevel($level)
        {
            $this->level = $level;
        }


        public function levelUp($level){
            if ($wave ++){
                return true;
            }
        }

        public function looseLife(){

        }
    }
?>
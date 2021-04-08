<?php

    class Course{
        private $coursename;
        private $score;
         
        public function __construct($coursename, $score){
            $this->coursename = $coursename;
            $this->score = $score;
        }

        public function getCourseName(){
            return $this->coursename;
        }

        public function getScore(){
            return $this->score;
        }
    }

?>
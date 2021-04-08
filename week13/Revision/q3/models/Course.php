<?php

    class Course{
        private $stud_name;
        private $coursename;
        private $score;
         
        public function __construct($stud_name, $coursename, $score){
            $this->stud_name = $stud_name;
            $this->coursename = $coursename;
            $this->score = $score;
        }

        public function getStudName(){
            return $this->stud_name;
        }

        public function getCourseName(){
            return $this->coursename;
        }

        public function getScore(){
            return $this->score;
        }
    }

?>
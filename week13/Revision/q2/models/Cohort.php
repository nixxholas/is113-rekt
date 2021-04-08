<?php

    class Cohort{
        private $year;
        private $students;
         
        public function __construct($year, $students){
            $this->year = $year;
            $this->students = $students;
        }

        public function getYear(){
            return $this->year;
        }

        public function getStudents(){
            return $this->students;
        }
    }

?>
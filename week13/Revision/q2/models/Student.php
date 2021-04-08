<?php

    class Student{
        private $name;
        private $courses;
         
        public function __construct($name, $courses){
            $this->name = $name;
            $this->courses = $courses;
        }

        public function getName(){
            return $this->name;
        }

        public function getCourses(){
            return $this->courses;
        }
    }

?>
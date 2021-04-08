<?php

    class Person{
        private $name;
        private $vehicles;
         
        public function __construct($name, $vehicles){
            $this->name = $name;
            $this->vehicles = $vehicles;
        }

        public function getName(){
            return $this->name;
        }

        public function getVehicles(){
            return $this->vehicles;
        }
    }

?>
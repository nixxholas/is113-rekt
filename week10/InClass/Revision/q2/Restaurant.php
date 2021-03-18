<?php

	class Restaurant {
        // define my properties
        private $name;
        private $expensive;
        private $url;
    
        // Constructor
        public function __construct($name, $expensive, $url) {
            $this->name=$name;
            $this->expensive=$expensive;
            $this->url=$url;
        }

        public function getName(){
            return $this->name;
        }

        public function getExpensive(){
            return $this->expensive;
        }
        
        public function getURL(){
            return $this->url;
        }

    }


?>
<?php
    
    ### Add code here
    class Member {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }
    }
?>
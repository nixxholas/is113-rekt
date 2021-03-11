<?php
    class Balloon{
        
        // Properties
        private $color;
        private $size;  
        private $gas; 
        private $price;
        private $desc;

        // Constructors

        public function __construct($color, $size, $gas, $price, $desc) {
            $this->color = $color;
            $this->size = $size;
            $this->gas = $gas;
            $this->price = $price;
            $this->desc = $desc;
        }

        // Getter methods

        public function getColor() {
            return $this->color;
        }

        public function getSize() {
            return $this->size;
        }

        public function getGas() {
            return $this->gas;
        }

        public function getPrice() {
            return $this->price;
        }
        
        public function getDesc() {
            return $this->desc;
        }
    }
?>

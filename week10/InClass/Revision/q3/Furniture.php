<?php

    class Furniture {
        // define my properties
        private $type;
        private $cost;
        const Workmanship = 5;
        const GST = 0.07;

        // Constructor
        public function __construct($type, $cost) {
            $this->type = $type;
            $this->cost = $cost;
        }

        public function getCost(){
            return $this->cost;
        }

        public function withGSTCost(){
            return $this->cost + ($this->cost * self::GST);
        }
    }
?>

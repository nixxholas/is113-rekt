<?php

    class Item{
        private $name;
        private $qty;
        private $unit_price;
        
        public function __construct($name, $qty, $unit_price){
            $this->name = $name;
            $this->qty = $qty;
            $this->unit_price = $unit_price;
        }

        public function getName(){
            return $this->name;
        }

        public function getQty(){
            return $this->qty;
        }

        public function getUnitPrice(){
            return $this->unit_price;
        }

        public function totalCost(){
            return $this->qty * $this->unit_price;
        }

    }

?>
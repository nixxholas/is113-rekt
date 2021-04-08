<?php

    class Vehicle{
        private $purchaseYr;
        private $accessories;
         
        public function __construct($purchaseYr, $accessories){
            $this->purchaseYr = $purchaseYr;
            $this->accessories = $accessories;
        }

        public function getPurchaseYr(){
            return $this->purchaseYr;
        }

        public function getAccessories(){
            return $this->accessories;
        }
    }

?>
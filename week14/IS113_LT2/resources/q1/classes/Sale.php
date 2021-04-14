<!--
    Name: Nicholas Chen Han Wei
    Email: hwchen.2020
-->
<?php
    class Sale {

        ### START OF DO NOT MODIFY ###
        
        private $yearOfSale;
        private $saleLineItems; # an indexed array of SaleLineItem objects
        
        public function __construct($yearOfSale, $saleLineItems) {
            $this->yearOfSale = $yearOfSale;
            $this->saleLineItems = $saleLineItems;
        }

        public function getYearOfSale() {
            return $this->yearOfSale;
        }

        public function getSaleLineItems() {
            return $this->saleLineItems;
        }
        
        ### END OF DO NOT MODIFY ###

        public function getDollarsReceived() {
            # Add Code Here
            $total = 0.0;

            if ($this->saleLineItems != null && sizeof($this->saleLineItems) > 0) {
                foreach ($this->saleLineItems as $saleLineItem) {
                    $total += ($saleLineItem->getQty() * $saleLineItem->getPricePerUnit());
                }
            }

            return $total;
        }
    }
?>
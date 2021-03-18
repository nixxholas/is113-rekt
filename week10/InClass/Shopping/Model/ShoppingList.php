<?php

    class ShoppingList{

        private $shopping_list;  // an indexed array of item Objects
        private $month;


        public function __construct($shopping_list, $month){
            $this->shopping_list = $shopping_list;
            $this->month = $month;
        }

        // Return the Shopping List 
        public function getShoppingList(){
            return $this->shopping_list;
        }

        // add an Item Object to the shopping list
        public function addItem($item) {
            $this->shopping_list[] = $item;
        }

        // remove the Item Object which has $name = $item_name
        public function removeItem($item_name){
            for ($i = 0; $i < sizeof($this->shopping_list); $i++) {
                if ($this->shopping_list[$i]->getName() == $item_name) {
                    unset($this->shopping_list[$i]);
                    return;
                }
            }
        }


    }



?>
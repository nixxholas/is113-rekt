<?php

    class ToyDAO{
        private $toys;  // property

        public function __construct() {
            $this->toys = [
                new Toy('Car', 3),
                new Toy('Doll', 1),
                new Toy('Kitchen Set', 3),
                new Toy('Kite', 10),
                new Toy('Sci Kit', 10)
            ];
        }

        public function getAllToys(){
            return $this->toys;
        }


        // return an indexed array of Toy objects
        public function getToyforAge($age){
            
            



            return $toy_arr;
        }

    }

?>

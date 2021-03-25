<?php

    class Pen {
        private $type;
        private $color;
     
        public function __construct($type, $color){
            $this->type = $type;
            $this->color = $color;
        }

        public function getType(){
            return $this->type;
        }

        public function getColor(){
            return $this->color;
        }

    }

?>
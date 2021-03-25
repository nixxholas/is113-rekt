<?php

    class PencilCase {
        private $theme;
        private $pens;
        
        public function __construct($theme, $pens){
            $this->theme = $theme;
            $this->pens = $pens;
        }

        public function getTheme(){
            return $this->theme;
        }

        public function getPens(){
            return $this->pens;
        }
    }
?>
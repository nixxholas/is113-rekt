<?php

class NationalFlower {
    private $country;
    private $flower;
    
    public function __construct($country, $flower){
        $this->country=$country;
        $this->flower=$flower;
    }

    public function getCountry(){
        return $this->country;
    }
    public function getFlower(){
        return $this->flower;
    }
    
}

?>


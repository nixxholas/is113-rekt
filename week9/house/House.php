<?php
// /*
// INSTRUCTIONS
// ============
//    1. Create a Class with the following properties : type, no_of_bedroom, size, location, price
//
//    2. Create getter functions.
//
//    3. Create a setting function.
// 
//    4. Create a function to calculate monthly payment.
//
//    5. Create a function to calculate cost per the sq ft.
//

class House
{
    private $type;
    private $no_of_bedroom;
    private $size;
    private $location;
    private $price;

    public function getType()
    {
        return $this->type;
    }

    public function getBedroom()
    {
        return $this->no_of_bedroom;
    }

    public function getSize()
    {
        return $this->no_of_bedroom;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function PaymentPerMonth($no_of_years)
    {
        return $this->price / ($no_of_years * 12);
    }

    public function CostPerSqFeet()
    {
        return $this->price / $this->size;
    }
}


?>
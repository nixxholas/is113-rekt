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
    private string $type;
    private int $no_of_bedroom;
    private int $size;
    private string $location;
    private float $price;

    // Define a function to fulfill this constructor
    // ("HDB", 4, "1010", "Montreal Drive")
    public function __construct($type, $no_of_bedroom, $size, $location, $price = NULL) {
        $this->type = $type;
        $this->no_of_bedroom = $no_of_bedroom;
        $this->size = $size;
        $this->location = $location;
        $this->price = $price != NULL ? $price : 0;
    }

    public function getType(): string
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

    public function getPrice()
    {
        return $this->price;
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
        return ($this->price == NULL || $this->size == NULL) ? 0 : ($this->price / $this->size);
    }
}


?>
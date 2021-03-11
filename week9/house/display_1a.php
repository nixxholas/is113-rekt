<?php

    // 0. Import the class we need
    require_once "House.php";


    // 1. These are the values
    $new_house1 = new House("HDB", 4, "1010", "Montreal Drive");
   
    // 2. Display Part I  
    // Complete the codes
    echo "House 1 : <br>";
    echo "Type:     " . $new_house1->getType() . "<br>";
    echo "Size:     " . $new_house1->getSize() . "<br>";
    echo "Location: " . $new_house1->getLocation() . "<br>";
    echo "Price:  <br> <br>";
    
    // 2. Set the price
    $price = 360150;
    $new_house1->setPrice($price);

    // Complete the codes
    echo "After set price ... <br>";





    
    // 3. Display Part II
    
    echo "Price: $$price <br>";
    echo "Payment Per Month over 20 years : $" . $new_house1->PaymentPerMonth(20) . "<br>";

    $cost_per_sq_feet = number_format($new_house1->CostPerSqFeet() ,4);
    echo "Price per sq feet $" .    $cost_per_sq_feet  . "<br>";
 


?>
<?php

    // 0. Import the class we need
    require_once "House.php";

    // 1. These are the values
    $new_houses = [  ["HDB", 4, "1010", "Montreal Drive"],
                     ["HDB", 3, "870", "King George Avenue"],
                     ["CONDO", 2, "590", "East Coast"],
                     ["CONDO", 5, "1400", "Yishun Park"],
                     ["LANDED", 4, "2000", "University Road"]];
   

    // 2. Create an array of Objects
    // Complete the codes
    $new_houses_arr=[];
  
   

    // Display the houses (before)
    

    // 2. Set prices
   

     // Display the houses (after)
    


#
# This function displays the result of an indexed array of House objects
# in a table format.
#
function display_houses ($house_arr){

    echo "<table border='1'> <tr> 
            <th> Type </th>
            <th> Bedroom </th>
            <th> Size </th>
            <th> Location </th>
            <th> Price </th>
            <th> Cost Sq Feet </th>
            </tr>";
   
    foreach ($house_arr as $h){
        $type = $h->getType();
        $bedroom = $h->getBedroom();
        $size = $h->getSize();
        $location = $h->getLocation();
        $price = number_format($h->getPrice(),0);
        $cost_per_sq_feet = number_format($h->CostPerSqFeet(),2);
        echo "<tr>
                <td>$type</td>
                <td>$bedroom</td>
                <td>$size</td>
                <td>$location</td>
                <td>$price</td>
                <td>$cost_per_sq_feet</td>
              </tr>";
    }
    echo "</table>";

    echo "<br> <br> <br>";

}
 


?>
<?php

require_once "House.php";


#
# House objects
#

$new_house1 = new House("HDB", 4, "1010", "Montreal Drive");
$new_house2 = new House("HDB", 3, "870", "King George Avenue");
$new_house3 = new House("Condo", 2, "590", "East Coast");

$house_arr1[0] = $new_house1;
$house_arr1[1] = $new_house2;
$house_arr1[2] = $new_house3;

// display the results.
// Change the price of $new_house1 vs. $house_arr1[1] 
// What is the difference?









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
<?php

// 0. Import the class we need
require_once "House.php";

// 1. These are the values
$new_houses = ["01" => ["HDB", 4, "1010", "Montreal Drive"],
    "02" => ["HDB", 3, "870", "King George Avenue"],
    "03" => ["CONDO", 2, "590", "East Coast"],
    "04" => ["CONDO", 5, "1400", "Yishun Park"],
    "05" => ["LANDED", 4, "2000", "University Road"]];


// 2. Create an array of Objects
// Complete the codes
$new_houses_arr = [];


foreach ($new_houses as $id => $houseDetail) {
    // Associative push alternative
//        $new_houses_arr[$id] = new House($houseDetail[0], $houseDetail[1], $houseDetail[2],
//            $houseDetail[3]);
    array_push($new_houses_arr, new House($houseDetail[0], $houseDetail[2], $houseDetail[1],
        $houseDetail[3]));
}


// Display the houses (before)

display_houses($new_houses_arr);


// 2. Set prices

$prices = [450000, 650000, 1250000, 800700, 20005000];
for ($i = 0; $i < sizeof($new_houses_arr); $i++) {
    $new_houses_arr[$i]->setPrice($prices[$i]);
}

// Display the houses (after)

display_houses($new_houses_arr);


#
# This function displays the result of an indexed array of House objects
# in a table format.
#
function display_houses($house_arr)
{

    echo "<table border='1'> <tr> 
            <th> Type </th>
            <th> Bedroom </th>
            <th> Size </th>
            <th> Location </th>
            <th> Price </th>
            <th> Cost Sq Feet </th>
            </tr>";

    foreach ($house_arr as $h) {
        $type = $h->getType();
        $bedroom = $h->getBedroom();
        $size = $h->getSize();
        $location = $h->getLocation();
        $price = number_format($h->getPrice(), 0);
        $cost_per_sq_feet = number_format($h->CostPerSqFeet(), 2);
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
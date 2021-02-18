<?php

#
# Question 1 
#

echo "<h1> Question 1 </h1>";
$q1_arr = [
            "fruit" => ["apple","orange","pear"],
            "furniture" => ["chair","bed","cupboard" ]
          ];
echo "<ul>";

// YOUR CODE GOES HERE 

foreach ($q1_arr as $type => $type_items) {
    echo "$type";
    if (count($type_items) > 0) {
        echo "<ul>";
        foreach ($type_items as $type_item) {
            echo "<li>$type_item</li>";
        }
        echo "</ul>";
    }
}


// YOUR CODE ENDS HERE 


echo "</ul>";

echo "<hr>";

#
# Question 2 : 
#
echo "<h1> Question 2 </h1>";

$q2_var1 = "123";
$q2_var2  = 123;

// COMPLETE THE CODES 
if ($q2_var1 == $q2_var2){
    echo "Matched <br>";
}
else {
    echo "NOT matched <br>";
}

if (($q2_var1 === $q2_var2) == false){
    echo "NOT matched <br>";
}
else {
    echo "matched <br>";
}


echo "<hr>";

#
# Question 3 : Load an image
#
echo "<h1> Question 3 </h1>";

// YOUR CODE GOES HERE 
// use width='100' height='100'

echo "<img width='100' height='100' src='images/apple.jpg'>";



// YOUR CODE ENDS HERE 
echo "<hr>";


#
# Question 4 : Load a URL
#
echo "<h1> Question 4 </h1>";

// YOUR CODE GOES HERE 

echo "<a href='revision.html'>Click Here!</a>";




// YOUR CODE ENDS HERE 


echo "<hr>";


#
# Question 5 : Transform this into an 2D array
#
echo "<h1> Question 5 </h1>";

/* transform this into an array 

    [ 1, 2, 3, 4 ]
    [ 2, 1, 4, 3 ]
    [ 3, 4, 1, 2 ]
    [ 4, 3, 2, 1 ]

*/

$str1 = "1,2,3,4";
$str2 = "2,1,4,3";
$str3 = "3,4,1,2";
$str4 = "4,3,2,1";

// YOUR CODE GOES HERE

$new_arr = [];

array_push($new_arr, explode(",", $str1), explode(",", $str2), explode(",", $str3),
    explode(",", $str4));

//var_dump($new_arr);

foreach ($new_arr as $arr){
    echo " [ ";
    foreach ($arr as $item){
        echo $item . ' ';
    }
    echo "] <br>";
}

?>
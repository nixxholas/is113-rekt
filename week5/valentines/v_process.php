<?php
    
    // Retrieve all the data from form submission
//    var_dump($_GET);

    // Add in validations here.
    $errors = [];
    $can_print = false;

    if (isset($_GET["name"]))
        $name = $_GET["name"];
    else
        array_push($errors, "Invalid name input");
    if (isset($_GET["items"]))
        $items = $_GET["items"];
    else
        array_push($errors, "No items found!");
    if (isset($_GET["togo"]))
        $togo = $_GET["togo"];
    else
        array_push($errors, "No places to go found!");
    if (isset($_GET["color"]))
        $color = $_GET["color"];
    else
        array_push($errors, "No colors found!");
    if (isset($_GET["msg"]))
        $msg = $_GET["msg"];
    else
        array_push($errors, "No message found!");
    if (isset($_GET["printNo"]))
        $printNo = $_GET["printNo"];
    else
        array_push($errors, "No print number found!");
?>

<!DOCTYPE html>
<html>
<body>

    <?php

        // ADD YOUR CODES HERE

        if (sizeof($errors) > 0) {
            echo "<h3> Dearest $name</h3>";
            echo "Valentine's Day is 14 Feb 2020 (Sunday). <br>";

            echo "Just to let you know I hope to get:";
            // Print out the items

            $togo_place_arr = [  "Flyer" => ["Singapore Flyer"],
                "Mall" => ["ION", "Bugis+", "Plaza Singapura"],
                "Restaurant" => ["Jacks Place", "TungLok", "Koufu"]
            ];


            // string concat function
            echo "We can go to: ";


            echo "<br>In case you still do not know, here's my favourite colors :";


            echo "<h4> Secret Message </h4>";

            if ($printNo == 0){
                echo "<ul><li>Happy Valentine's Day </li></ul>";
            }else{
                //Print out the secret message X number of times.



            }

            $finalmsg_arr = [ "Hope your day brings just what you want it to.",
                "Thanks for being the caring one!",
                "Great day filled with good wine, good food!" ];

            // based on the input from "What I hope to get"

            // inarray function
            // if one of them is Rose - msg1,
            // if one of them is Pineapple tart - msg2
            // else msg3
        } else {
            print_errors($errors);
        }

       

    

    function print_errors($errors){
        echo "<ul>";
        foreach ($errors as $error){
            echo "<li> $error </li>";
        }
        echo "</li>";
    }

    ?>

        

</body>
</html>
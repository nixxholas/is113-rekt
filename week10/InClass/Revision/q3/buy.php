<?php

    // complete this 
    require_once "Furniture.php";

    $table = new Furniture("table", 100);
    $chair = new Furniture("chair",35);

    // complete the codes
    echo "Table costs : {$table->getCost()}";
    echo "<br>";
    echo "Table with GST : {$table->withGSTCost()}";
    echo "<br>";
    echo "Chair costs : {$chair->getCost()}";
    echo "<br>";
    echo "Chair costs : {$chair->withGSTCost()}";
    echo "<br>";
 
    // total cost of 1 table and 4 chairs.
    $total_amount = $table->withGSTCost() + ($chair->withGSTCost() * 4);

    // add workmanship to the total cost  
    $total_amount += Furniture::Workmanship;

    echo "Total amount is : " . $total_amount;

?>
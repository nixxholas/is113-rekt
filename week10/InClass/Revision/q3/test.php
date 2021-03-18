<?php

    require_once "Furniture.php";

    $table = new Furniture("table", 100);
  
    echo "Table costs : " . $table->getCost() . "<br>";

    echo "Table with GST : " . $table->withGSTCost();

?>
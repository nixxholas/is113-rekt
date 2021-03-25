<?php

    // 1. autoload the classes
    spl_autoload_register(
	    function($class){
	        require_once "model/$class.php";
	    }
    );


    // 2. Create an empty shopping list for month of April.
    
    echo "<h3>" . $shopping_list->getMonth() . "</h3>";
    echo "<h3>This is my initial Shopping List </h3>";





    display_list ($mylist);
  

    // 3. Given the list of things to buy.
    $to_buy = [ "Apple" => [1, 0.8],
                "Coffee"  => [6, 5.2],
                "Flour" => [2, 7.3] ];


    // 4. Add in items into the Shopping List
    // Add on to the list 
    
    echo "<h3> Added my List of Items </h3>";
    
    foreach ($to_buy as $key => $value){
        





    }
  
    // 5. Display my Shopping List

    
    // 8. Remove Bread
    echo "<h3> Added item - Apple </h3>";


    // 9. Display my Shopping List


    // 10. Empty my shopping list



    echo "<h3> After I empty my Shopping List </h3>";





    
   

    // Display the list of items in the shopping list
    function display_list($item_arr){

        $total_amount = 0;
        $total_cost = 0;
        echo "<table border=1>
                <tr> <th> Item </th> <th> Qty </th> <th> Unit Price </th> <th> Total </th> </tr>";
        foreach ($item_arr as $obj){
            $total_cost = $obj->getQty() * $obj->getUnitPrice();
            echo "<tr>
                  <td> {$obj->getName()} </td>
                  <td> {$obj->getQty()} </td>
                  <td> {$obj->getUnitPrice()} </td>
                  <td> $total_cost </td>
                  </tr>";
            $total_amount += $total_cost;
        }

        echo "<tr>
                <th colspan='3'> Total </th> <td> $total_amount </td>";
        echo "</table>";
        echo "<hr>";

    }









?>
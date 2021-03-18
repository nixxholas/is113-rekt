<?php

    // 1. autoload the classes
   

    // 2. Create an empty shopping list for month of April.
    $shopping_list = new ShoppingList([],"April");


    // 3. Given the list of things to buy.
    $to_buy = [ "Honey" => [2, 5.2],
                "Milk"  => [3, 3.4],
                "Bread" => [1, 1.8] ];


    // 4. Add in items into the Shopping List
   
    


    // 5. Display my Shopping List
    
    
    display_list ($mylist);


    // 6. Add Apple, qty = 5, $0.6 each
    
    


    // 7. Display my Shopping List


    display_list ($mylist);

    
    // 8. Remove Bread


    // 9. Display my Shopping List

    display_list ($mylist);



    // Display the list of items in the shopping list
    function display_list($item_arr){
        echo "<table border=1>
                <tr> <th> Item </th> <th> Qty </th> <th> Unit Price </th> </tr>";
        foreach ($item_arr as $obj){
            echo "<tr>
                  <td> {$obj->getName()} </td>
                  <td> {$obj->getQty()} </td>
                  <td> {$obj->getUnitPrice()} </td>
                  </tr>";
        }
        echo "</table>";
        echo "<hr>";

    }







?>
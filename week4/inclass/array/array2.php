<!Doctype html>
<html>
<head>
    <title>Array using PHP</title>
</head>

<body>

    <hr>
    <h3>Multidimensional Array </h3>

    <?php
        $favourite_food = [
                            ["ice cream", "apple pie" ],
                            ["chicken rice", "brown rice"],
                            ["salad", "spinach"] 
                          ];
        // print in a table format
        // | ice cream    | apple pie  | 
        // | chicken rice | brown rice |
        // | salad        | spinach    |

        // print My favourite is : chicken rice
       


        echo "<table border='1'>";
        
        


        echo "</table>";
            
    ?>


<h3>Multidimensional Associative </h3>

<?php
    $favourite_food = [
                        "dessert" => ["ice cream", "apple pie" ],
                        "rice" => ["chicken rice", "brown rice"],
                        "vegetable" => ["salad", "spinach"] 
                      ];
    
    // print My favourite is : chicken rice
  
    
    // print in a table format
    // | dessert   | ice cream    | apple pie  | 
    // | rice      | chicken rice | brown rice |
    // | vegetable | salad        | spinach    |
    echo "<table border='1'>";
    
   


    
    echo "</table>";
        
?>
</body>
</html>
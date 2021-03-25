<?php
    // 1. autoload the classes
   
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );



    
    // 2. Get the list of flower objects from DAO.
    
    $dao = new NationalFlowerDAO();

    // Get my list of flowers array
    // Indexed array of NationalFlower objects

    $flowers_arr = $dao->retrieveAll();

    //var_dump($flowers_arr);


?>


<!DOCTYPE html>
<html>
    <body>
    
    <h3> List of National Flowers </h3>
    
    <?php

       // 3. Display the data in the required format

        echo "<table border='1'>";
        echo "<tr> 
                <th> Country </th>
                <th> National Flower </th>
            </tr>";

        // $item : NationalFlower object
        // $flowers_arr : indexed array of NationalFlower objects
        //                returned from my DAO
        foreach($flowers_arr as $item){
            echo "<tr>
                    <td> {$item->getCountry()} </td>
                    <td> {$item->getFlower()}  </td>
                  </tr>";
        }
        
        echo "</table>";

    ?>

    <br/>
    <br/>
    <hr/>
    To show all National Flower.  
    Click <a href="flower_list.php">here</a> <br/>
    To search for the National Flower for a country. 
    Click <a href="flower_for_country.php">here</a> <br/>
    To search for similar National Flowers. 
    Click <a href="flower_similar.php">here</a> <br/>
    </body>

</html>
<?php

    // 1. autoload the classes
    spl_autoload_register(
        function($class){
            require_once "model/$class.php";
        }
    );

?>

<!DOCTYPE html>
<html>

    <body>
    
        <h3> Similar National Flowers </h3>

        <form method="get">
            Enter a type of flower :
            <input type="text" name="flowerstr" />
            <br/>
            <input type="submit" name="submit" value="Find">
        </form>
    </body>

    <?php

        // 2. Happens only when clicking on Find button
        if (isset($_GET["submit"])){

            //3. Get the input string from user
            $str = strtoupper($_GET["flowerstr"]);

            // 4. Get the list of Flower objects from DAO.
            $dao = new NationalFlowerDAO();
            $flower_obj_arr = $dao->getCountryWithSimilarFlowers($str);
            
            //var_dump($flower_obj_arr);

            if (sizeof($flower_obj_arr) > 0) {
                echo "National Flowers which contains : <b> " . $_GET["flowerstr"] . "</b> <br><br>";
                echo "<table border='1'>
                    <tr> 
                        <th> Country </th>
                        <th> Flower </th>
                    </tr>";

                foreach ($flower_obj_arr as $item){
                    echo "<tr>
                        <td> {$item->getCountry()} </td>
                        <td> {$item->getFlower()} </td>
                      </tr>";
                }
                echo "</table>";
            } else {
                echo "No flowers found matching $str.";
            }
        }




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
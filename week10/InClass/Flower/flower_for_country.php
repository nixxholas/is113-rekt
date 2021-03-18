<?php

    // 1. autoload the classes
    spl_autoload_register(
        function($class) {
            require_once "model/$class.php";
        }
    );

    // 2. Get the list of flower objects from DAO.
    $nationalFlowerDAO = new NationalFlowerDAO();
    
   // var_dump($country_arr);

?>


<!DOCTYPE html>
<html>

    <body>
    
    <h3> National Flowers </h3>

    <form method="get">
        Choose a Country :
            <?php
        
                // 3. The list of countries should not be hardcoded.
                //    Get the list from DAO.
                //    if user already made a selection, it should be highlighted.

                echo "<select name='country'>";
                foreach ($nationalFlowerDAO->retrieveCountryList() as $country) {
                    echo "<option value='$country'>$country</option>";
                }
                echo "</select>";

            ?>
            <input type="submit" name="submit" value="Get National Flower">
    </form>
    
    <?php

        // 4. Display result after selection.
        if (isset($_GET["country"])) {
            $country = $_GET["country"];
            echo "<br />The national flower for $country is {$nationalFlowerDAO->getFlowerByCountry($country)}";
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
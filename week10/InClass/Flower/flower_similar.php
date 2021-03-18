<?php
    // 1. autoload the classes
    spl_autoload_register(
        function($class) {
            require_once "model/$class.php";
        }
    );

    // 2. Get the list of flower objects from DAO.
    $nationalFlowerDAO = new NationalFlowerDAO();
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
        if (isset($_GET["submit"]) && isset($_GET["flowerstr"])){

            //3. Get the input string from user
            $flowerCatcher = $_GET["flowerstr"];

            if ($flowerCatcher !== "") {
                // 4. Get the list of Flower objects from DAO.
                echo "National Flowers which contains <b>$flowerCatcher</b>";
                $result = $nationalFlowerDAO->getCountryWithSimilarFlowers($flowerCatcher);

                echo "<table border='1'>";
                echo "<thead><th>Country</th><th>Flower</th></thead>";
                foreach ($result as $resItem) {
                    echo "<tr><td>{$resItem->getCountry()}</td><td>{$resItem->getFlower()}</td></tr>";
                }
                echo "</table>";
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
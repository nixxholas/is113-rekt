<?php

    // 1. autoload the classes
    



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
            

            // 4. Get the list of Flower objects from DAO.
            

            
            

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
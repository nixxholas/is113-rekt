<?php

    // 1. autoload the classes
    
  
    // 2. Get the list of flower objects from DAO.
    
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
               








            ?>
            <input type="submit" name="submit" value="Get National Flower">
    </form>
    
    <?php

        // 4. Display result after selection.

        









        

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
<?php
    require_once "model/common.php";
    $dao = new NationalFlowerDAO();
?>


<!DOCTYPE html>
<html>

    <body>
    
        <h3> National Flowers Delete </h3>

    
        <form method="get">
            Enter a Country:
            <?php

                // retrieve an indexed array of country names from the database
                $country_arr = $dao->retrieveCountryList();

                echo "<select name='country'>";
                foreach ($country_arr as $countrystr){
                    if ($country == $countrystr)
                        echo "<option value='$countrystr' selected>$countrystr</option>";
                    else 
                        echo "<option value='$countrystr'>$countrystr</option>";
                }
                echo "</select>";
                echo "<input type='submit' name='retrieve_flower' value='Retrieve Flower'/>";
            ?>
            
            <br/><br/>
            National Flower:
           

        </form>
    </body>

    <?php

        if (isset($_GET["delete_record"]) ){

    

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

    Additional <br/>
    Create: <a href="flower_create.php">here</a> <br/>
    Update: <a href="flower_update.php">here</a> <br/>
    Delete: <a href="flower_delete.php">here</a> <br/>


    </body>
    
</html>

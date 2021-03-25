<?php
    require_once "model/common.php";
?>


<!DOCTYPE html>
<html>

    <body>
    
        <h3> National Flowers Create </h3>

        <form method="get">
            Enter a Country:
            <input type="text" name="country" />
            <br/> <br/>
            Enter a National Flower:
            <input type="text" name="flower" />
            <br/> <br/>
            <input type="submit" name="create_flower" value="Create Flower">
        </form>
    </body>

    <?php

        if (isset($_GET["create_flower"])){
            $dao = new NationalFlowerDAO();

            $country = $_GET["country"];
            $flower = $_GET["flower"];
            if ($dao->checkNationalFlowersExist($country, $flower)) {

            } else {
                echo "Country : $country <br/>";
                echo "Flower : $flower <br/>";
                echo "Record already exists. <br/>";
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

    Additional <br/>
    Create: <a href="flower_create.php">here</a> <br/>
    Update: <a href="flower_update.php">here</a> <br/>
    Delete: <a href="flower_delete.php">here</a> <br/>

    </body>
    
</html>

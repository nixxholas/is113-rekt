<?php
    require_once "model/common.php";
    $dao = new NationalFlowerDAO();
?>


<!DOCTYPE html>
<html>

    <body>
    
        <h3> National Flowers Update </h3>

        <?php
            
            // when first loaded
            if (!isset($_GET["create_flower"]) && !isset($_GET["update_flower"]) ){
                $country = '';
                $flower='';
            } 
            
            if (isset($_GET["retrieve_flower"]) ){
                $country = $_GET["country"];
                $flower = $dao->getFlowerByCountry($country);
            } 

            if (isset($_GET["update_flower"]) ){
                $flower = $_GET["flower"];
                $country = $_GET["country"];
            }


        ?>
        <form method="get">
            Enter a Country:
            <?php
             
                $country_arr = $dao->retrieveCountryList();

                echo "<select name='country'>";
                foreach ($country_arr as $item){
                    if ($country == $item)
                        echo "<option value='$item' selected>$item</option>";
                    else 
                        echo "<option value='$item'>$item</option>";
                }
                echo "</select>";
                echo "<input type='submit' name='retrieve_flower' value='Retrieve Flower'/>";
            ?>
            
            <br/><br/>
            National Flower:
            <?php
                echo "<input type='text' name='flower' value ='$flower' />";        
                echo "<input type='submit' name='update_flower' value='Update Flower' />";
            ?>

        </form>
    </body>

    <?php

        if (isset($_GET["update_flower"]) ){
            
            if (($country !== "") && ($flower != "")){
                $country = $_GET["country"];
                $flower = $_GET["flower"];
                $result=$dao->UpdateNationalFlower($country, $flower);

                if ($result){
                    echo "<br/>
                            $country national flower is updated to $flower
                        <br/>";
                }
                else{
                    echo "<br/> Error in updating record <br/>";
                }
            }
            else{
                echo "<br/> Need to enter a flower name <br/>";
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

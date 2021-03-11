<?php

    $balloons = ["Red", "Orange", "Yellow", "Green", "Purple"];

?>


<!DOCTYPE html>
<html>

    <body>

        <h3> Choose your favourite balloons !</h3>
        <form method="GET" action="process_balloons.php">

            <!-- this is static printing -->

            <input type="checkbox" name="balloons[]" value="Red "/>Red 
            <input type="checkbox" name="balloons[]" value="Orange"/>Orange 
            <input type="checkbox" name="balloons[]" value="Yellow"/>Yellow
            <input type="checkbox" name="balloons[]" value="Green"/>Green
            <input type="checkbox" name="balloons[]" value="Purple"/>Purple 

            <br/>

            <!-- Show dynamic printing -->
            <?php

                foreach ($balloons as $balloon){
             
                    echo "
                        <input type='checkbox' name='balloons1[]' value='" . 
                         $balloon . "' />" . $balloon;
                }



            ?>

            <br/>
            <input type="submit" />
        </form>

    </body>



</html>
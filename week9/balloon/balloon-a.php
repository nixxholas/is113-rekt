<?php
  
    $balloon1_color = "Red";
    $balloon1_size = "S";
    $balloon1_price = 2;
    $balloon1_desc = "Red S";

    $balloon2_color = "Red";
    $balloon2_size = "M";
    $balloon2_price = 4;
    $balloon2_desc = "Red M";

    $balloon3_color = "Gold";
    $balloon3_size = "S";
    $balloon3_price = 3;
    $balloon3_desc = "Gold S";

    $balloon4_color = "Gold";
    $balloon4_size = "M";
    $balloon4_price = 5;
    $balloon4_desc = "Gold M";

?>


<!DOCTYPE html>
<html>

    <h2> Balloons On Sale </h2>
    <table border="1">
        <tr>
            <th> Color </th>
            <th> Size </th>
            <th> Price ($) </th>
            <th> Desc </th>
        </tr>
            <?php
                echo "<tr>
                        <td>$balloon1_color</td>
                        <td>$balloon1_size</td>
                        <td>$balloon1_price</td>
                        <td>$balloon1_desc</td>
                      </tr>";
                echo "<tr>
                        <td>$balloon2_color</td>
                        <td>$balloon2_size</td>
                        <td>$balloon2_price</td>
                        <td>$balloon2_desc</td>
                      </tr>";
                echo "<tr>
                        <td>$balloon3_color</td>
                        <td>$balloon3_size</td>
                        <td>$balloon3_price</td>
                        <td>$balloon3_desc</td>
                      </tr>";
                echo "<tr>
                        <td>$balloon4_color</td>
                        <td>$balloon4_size</td>
                        <td>$balloon4_price</td>
                        <td>$balloon4_desc</td>
                      </tr>";

            ?>
        
        </tr>



    
    
    </table>

</html>

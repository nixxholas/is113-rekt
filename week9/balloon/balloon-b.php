<?php
  
    $balloon1_color = "Red";
    $balloon1_size = "S";
    $balloon1_price = 2;
    $balloon1_gas = "helium";
    $balloon1_desc = "Red S Helium";

    $balloon2_color = "Red";
    $balloon2_size = "S";
    $balloon2_price = 3;
    $balloon2_gas = "oxygen";
    $balloon2_desc = "Red S Oxygen";

    $balloon3_color = "Red";
    $balloon3_size = "M";
    $balloon3_price = 4;
    $balloon3_gas = "helium";
    $balloon3_desc = "Red M Helium";

    $balloon4_color = "Red";
    $balloon4_size = "M";
    $balloon4_price = 5;
    $balloon4_gas = "oxygen";
    $balloon4_desc = "Red M Oxygen";

   // . . . 
   // for the rest of the combination

   
?>


<!DOCTYPE html>
<html>

    <h2> Balloons On Sale </h2>
    <table border="1">
        <tr>
            <th> Color </th>
            <th> Size </th>
            <th> Gas </th>
            <th> Price ($) </th>
            <th> Desc </th>
        </tr>
            <?php
                echo "<tr>
                        <td>$balloon1_color</td>
                        <td>$balloon1_size</td>
                        <td>$balloon1_gas</td>
                        <td>$balloon1_price</td>
                        <td>$balloon1_desc</td>
                      </tr>";
                echo "<tr>
                        <td>$balloon2_color</td>
                        <td>$balloon2_size</td>
                        <td>$balloon2_gas</td>
                        <td>$balloon2_price</td>
                        <td>$balloon2_desc</td>
                      </tr>";
                echo "<tr>
                        <td>$balloon3_color</td>
                        <td>$balloon3_size</td>
                        <td>$balloon3_gas</td>
                        <td>$balloon3_price</td>
                        <td>$balloon3_desc</td>
                      </tr>";
                echo "<tr>
                        <td>$balloon4_color</td>
                        <td>$balloon4_size</td>
                        <td>$balloon4_gas</td>
                        <td>$balloon4_price</td>
                        <td>$balloon4_desc</td>
                      </tr>";

            ?>
        
        </tr>
    </table>

    <br/>
    Any many others . . . coming soon.

</html>

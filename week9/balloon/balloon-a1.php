<?php
  
    /* converting them into an array */

    $balloons = [
                   "balloon1" => ["Red", "S", "2", "Red S"],
                   "balloon2" => ["Red", "M", "4", "Red M"],
                   "balloon3" => ["Gold", "S", "3", "Gold S"],
                   "balloon4" => ["Gold", "M", "5", "Gold M"]
                ];
    
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
                echo "<tr>";
                foreach ($balloons as $key => $value ){
                    for ($i=0; $i<count($value); $i++){
                        echo "<td> $value[$i] </td>";
                    }
                    echo "</tr>";
                }    
    
            ?>
        
        </tr>



    
    
    </table>

</html>

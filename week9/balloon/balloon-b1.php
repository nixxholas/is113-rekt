<?php
  
    $balloons = [
                    "balloon1" => ["Red","S","2","oxygen","Red S Oxygen"],
                    "balloon2" => ["Red","S","3" ,"helium","Red S Helium"],
                    "balloon3" => ["Red","M","4","oxygen","Red M Oxygen"],
                    "balloon4" => ["Red","M","5","helium","Red M Helium"],
                    "balloon5" => ["Red","L","6","oxygen","Red L Oxygen"],
                    "balloon6" => ["Red","L","7","helium","Red L Helium"],
                    "balloon7" => ["Gold","S","3","oxygen","Gold S Oxygen"],
                    "balloon8" => ["Gold","S","4","helium","Gold S Helium"],
                    "balloon9" => ["Gold","M","5","oxygen","Gold M Oxygen"],
                    "balloon10" => ["Gold","M","6","helium","Gold M Helium"],
                    "balloon11" => ["Gold","L","7","oxygen","Gold L Oxygen"],
                    "balloon12" => ["Gold","L","8","helium","Gold L Helium"],
                    "balloon13" => ["Green","S","4","oxygen","Green S Oxygen"],
                    "balloon14" => ["Green","S","5","helium","Green S Helium"],
                    "balloon15" => ["Green","M","6","oxygen","Green M Oxygen"],
                    "balloon16" => ["Green","M","7","helium","Green M Helium"],
                    "balloon17" => ["Green","L","8","oxygen","Green L Oxygen"],
                    "balloon18" => ["Green","L","9","helium","Green L Helium"]
                ];
    
  
?>


<!DOCTYPE html>
<html>
    <body>            
    <h2> Balloons On Sale </h2>
    <table border="1">
        <tr>
            <th> Color </th>
            <th> Size </th>
            <th> Gas</th>
            <th> Price ($)  </th>
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
    </body>  
   
</html>

<?php

    require_once "common.php";
  
    $balloon1 = new Balloon("Red","S",2,"oxygen","Red S Oxygen");
    $balloon2 = new Balloon("Red","S",3,"helium","Red S Helium");
    $balloon3 = new Balloon("Red","M",4,"oxygen","Red M Oxygen");
    $balloon4 = new Balloon("Red","M",5,"helium","Red M Helium");
    $balloon5 = new Balloon("Red","L",6,"oxygen","Red L Oxygen");
    $balloon6 = new Balloon("Red","L",7,"helium","Red L Helium");

    $balloon7 = new Balloon("Gold","S",3,"oxygen","Gold S Oxygen");
    $balloon8 = new Balloon("Gold","S",4,"helium","Gold S Helium");
    $balloon9 = new Balloon("Gold","M",5,"oxygen","Gold M Oxygen");
    $balloon10 = new Balloon("Gold","M",6,"helium","Gold M Helium");
    $balloon11 = new Balloon("Gold","L",7,"oxygen","Gold L Oxygen");
    $balloon12 = new Balloon("Gold","L",8,"helium","Gold L Helium");

    $balloon13 = new Balloon("Green","S",4,"oxygen","Green S Oxygen");
    $balloon14 = new Balloon("Green","S",5,"helium","Green S Helium");
    $balloon15 = new Balloon("Green","M",6,"oxygen","Green M Oxygen");
    $balloon16 = new Balloon("Green","M",7,"helium","Green M Helium");
    $balloon17 = new Balloon("Green","L",8,"oxygen","Green L Oxygen");
    $balloon18 = new Balloon("Green","L",9,"helium","Green L Helium");

    
    $balloons_arr = [$balloon1, $balloon2, $balloon3, $balloon4, $balloon5, $balloon6,
                     $balloon7, $balloon8, $balloon9, $balloon10, $balloon11, $balloon12,
                     $balloon13, $balloon14, $balloon15, $balloon16, $balloon17, $balloon18,];

?>


<!DOCTYPE html>
<html>
    <body>
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
                    foreach ($balloons_arr as $balloon)
                        echo "<tr>
                                <td> {$balloon->getColor()} </td>
                                <td> {$balloon->getSize()}  </td>
                                <td> {$balloon->getGas()}   </td>
                                <td> {$balloon->getPrice()} </td>
                                <td> {$balloon->getDesc()}  </td>
                            </tr>";
                ?>
            </tr>
        </table>
    </body>
</html>

<?php

   require_once "common.php";
    
   $dao = new BalloonDOA();
   $balloons_arr = $dao->getBallonsOnSale();

   var_dump($balloons_arr);

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

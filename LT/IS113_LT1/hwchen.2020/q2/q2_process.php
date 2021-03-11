<!--
    Name: Nicholas Chen Han Wei
    Email: hwchen.2020@sis.smu.edu.sg
-->
<?php

// use these Arrays to print the contents of the table.

$upgrade_info =     array (
                        array("Upgrade to 16GB RAM", 323),   
                        array("Upgrade to 16GB RAM + 512GB SSD", 433),
                        array("Upgrade to Premium Privacy Filter", 48)
                    );

$warranty_info =   array(
                        2 => ["2 years warranty", 0],
                        3 => ["3 years warranty", 168]
                    );


$upg1 = isset($_POST["upg1"]);
$upg2 = isset($_POST["upg2"]);

if ($upg1 && $upg2) {
    echo "You can only select one upgrade option from 1-2";
} else {
    $upg3 = isset($_POST["upg3"]);
    $warranty = intval($_POST["warranty"]);
//    echo $warranty;

    echo "<h1>Please confirm your selection</h1>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>No.</th>";
    echo "<th>Description</th>";
    echo "<th>Price w/o GST</th>";
    echo "</thead>";

    $rowCount = 1;

    echo "<tr>";
    echo "<td>$rowCount</td>";
    echo "<td>ThinkPad X1 Carbon Gen 8</td>";
    echo "<td>$1,669.00</td>";
    echo "</tr>";

    $rowCount += 1;

    $subtotal = 1669.00;

    if ($upg1) {
        $upg1val = intval($_POST["upg1"]);
        echo "<tr>";
        echo "<td>$rowCount</td>";
        echo "<td>" . $upgrade_info[$upg1val][0] . "</td>";
        echo "<td>$" . number_format(doubleval($upgrade_info[$upg1val][1]), 2) . "</td>";
        echo "</tr>";
        $rowCount += 1;
        $subtotal += doubleval($upgrade_info[$upg1val][1]);
    }

    if ($upg2) {
        $upg2val = intval($_POST["upg2"]);
        echo "<tr>";
        echo "<td>$rowCount</td>";
        echo "<td>" . $upgrade_info[$upg2val][0] . "</td>";
        echo "<td>$" . number_format(doubleval($upgrade_info[$upg2val][1]), 2) . "</td>";
        echo "</tr>";
        $rowCount += 1;
        $subtotal += doubleval($upgrade_info[$upg2val][1]);
    }

    if ($upg3) {
        $upg3val = intval($_POST["upg3"]);
        echo "<tr>";
        echo "<td>$rowCount</td>";
        echo "<td>" . $upgrade_info[$upg3val][0] . "</td>";
        echo "<td>$" . number_format(doubleval($upgrade_info[$upg3val][1]), 2) . "</td>";
        echo "</tr>";
        $rowCount += 1;
        $subtotal += doubleval($upgrade_info[$upg3val][1]);
    }

    echo "<tr>";
    echo "<td>$rowCount</td>";
    echo "<td>" . $warranty_info[$warranty][0] . "</td>";
    echo "<td>$" . number_format(doubleval($warranty_info[$warranty][1]), 2) . "</td>";
    echo "</tr>";
    $subtotal += doubleval($warranty_info[$warranty][1]);

    echo "<tr>";
    echo "<td colspan='2'>Subtotal</td>";
    echo "<td>$" . number_format($subtotal, 2) . "</td>";
    echo "</tr>";

    $gst = (doubleval($subtotal) / 100) * 7;
    echo "<tr>";
    echo "<td colspan='2'>GST</td>";
    echo "<td>$" . number_format($gst, 2) ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td colspan='2'>Total</td>";
    echo "<td>$" . number_format($subtotal + $gst, 2) . "</td>";
    echo "</tr>";

    echo "</table>";
}
?>
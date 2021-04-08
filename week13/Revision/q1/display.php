<?php
require_once "models/Accessory.php";
require_once "models/Person.php";
require_once "models/Vehicle.php";

$acc1 = new Accessory("stereo", 2000);
$acc2 = new Accessory("phone", 3000);

$veh1 = new Vehicle("2015", [$acc1, $acc2]);
$veh2 = new Vehicle("2000", []);

$person = new Person("Bob", [$veh1, $veh2]);

#display all
#complete the codes
echo "<table border=1>";
echo "<tr><th>Purchase Yr</th><th>Subject</th></tr>";
foreach ($person->getVehicles() as $veh) {
    echo "<tr>
                    <td>" . $veh->getPurchaseYr() . "</td>";
    $str = "";
    if (count($veh->getAccessories()) > 0) {
        foreach ($veh->getAccessories() as $a) {
            $str .= $a->getName() . "  " . $a->getPrice() . "<br>";
        }
    }

    echo "<td> $str </td>";
    echo "</tr>";
}
echo "</table>";


?>
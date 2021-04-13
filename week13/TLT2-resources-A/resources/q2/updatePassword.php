<?php
/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part C : ENTER CODE HERE == 

echo "<form method='get' action='process.php'>";
$empId = $_GET["empId"];
echo "<input type='hidden' name='empId' value=$empId />";
//echo "$empId";

echo "Employee ID: $empId<br>";

$empDao = new EmployeeDAO();
$emp = $empDao->getEmployee((int) $empId);
echo "Name: " . $emp->getName() . "</br>";
echo "Current Password: " . $emp->getPassword() . "</br>";
$newPwd = generateRandomPassword();
echo "New Password: <input type='text' name='newPassword' value='$newPwd' /></br>";
echo "<input type='submit' name='updatePassword' value='Update'/>";
echo "</form>";

function generateRandomPassword(){
    # == Part C : ENTER CODE HERE ==
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
//    $charactersLength = strlen($characters);
    $charactersLength = 7;
    $randomString = '';
    for ($i = 0; $i < $charactersLength; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
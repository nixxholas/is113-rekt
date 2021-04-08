<?php
/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part C : ENTER CODE HERE == 

echo "<form method='get'>";
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

if (isset($_GET["updatePassword"])) {
    echo "Supposed to update";
}
function generateRandomPassword(){
    # == Part C : ENTER CODE HERE ==
    return password_hash((string) random_int(99999, 999999), PASSWORD_DEFAULT);
}
?>
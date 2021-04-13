<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part D : ENTER CODE HERE ==
if (isset($_GET["updatePassword"]) && $_GET["empId"]
    && $_GET["newPassword"] != null) {
    $empDao = new EmployeeDAO();
    $isUpdated = $empDao->updatePassword($_GET["empId"], $_GET["newPassword"]);

    if ($isUpdated) {
        session_destroy();
        echo "Password updated. You are logged out.";
    }
}
?>
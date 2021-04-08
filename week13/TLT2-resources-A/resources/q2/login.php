<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';

 # == Part A : ENTER CODE HERE == 

$role = null;
if (isset($_POST["empId"]) && isset($_POST["password"])) {
    $empId = $_POST["empId"];
    $rawPwd = $_POST["password"];

    $empDao = new EmployeeDAO();
    $role = $empDao->authenticate($empId, $rawPwd);

    if ($role != null) {
        $_SESSION['empId'] = $empId;
        $_SESSION['role'] = $role;
    }
}

if (!isset($_SESSION['countUnsuccessful'])) {
    $_SESSION['countUnsuccessful'] = 0;
}

if ($role == null) {
//    header("Location:login-view.html");
    $_SESSION['countUnsuccessful'] += 1;
//    exit;
} else {
    unset($_SESSION['countUnsuccessful']);
    header('location:viewDetails.php');
    exit;
}
 
?>

<html>
    <body>
<?php
    echo "<h1>Number of unsuccessful consecutive logins : {$_SESSION['countUnsuccessful']} </h1>";
    echo "<a href='login-view.html'>Back to Login";
?>
    </body>
</html>

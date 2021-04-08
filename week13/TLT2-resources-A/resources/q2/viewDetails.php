<?php

/*
    Name:

    Email:
*/

require_once 'model/common.php';
require_once 'model/protect.php';

# == Part B : ENTER CODE HERE ==
$empId = $_SESSION['empId'];
$role = $_SESSION['role'];
$empDao = new EmployeeDAO();

if ($role == "User") {
    $emp = $empDao->getEmployee($empDao);

    echo "<table border='1'>";
    echo "<thead><th>Employee ID</th><th>Name</th><th>Spouse</th><th>Child</th></thead>";
    echo "<tr>";
    echo "<td>$empId</td><td>$emp->getName()</td>";
    $spouse = $empDao->getSpouse($empId);
    if ($spouse != null) {
        echo "<td>$spouse->getSpouseName()</td>";
    } else {
        echo "<td></td>";
    }
    $children = $empDao->getChildren($empId);
    echo "<td>";
    foreach ($children as $childName => $childAge) {
        // $children[$row['childName']] = $row['childAge'];
        echo "$childName: $childAge</br>";
    }
    echo "</td>";
    echo "</tr>";
    echo "</table><br>";

    session_destroy();
    echo "You are logged out";
} else if ($role == "Admin") {
    $employees = $empDao->getAllEmployees();

    echo "<table border='1'>";
    echo "<thead><th>Employee ID</th><th>Name</th><th>Spouse</th><th>Child</th><th>Password</th></thead>";
    foreach ($employees as $emp) {
        $curEmpId = $emp->getEmpId();
        echo "<tr>";
        echo "<td>$curEmpId</td><td>" . $emp->getName() . "</td>";
        $spouse = $empDao->getSpouse($curEmpId);
        if ($spouse != null) {
            echo "<td>" . $spouse->getSpouseName() . "</td>";
        } else {
            echo "<td>None</td>";
        }
        $children = $empDao->getChildren($curEmpId);
        echo "<td>";
        if ($children != null && sizeof($children) > 0) {
            foreach ($children as $childName => $childAge) {
                // $children[$row['childName']] = $row['childAge'];
                echo "$childName: $childAge</br>";
            }
        } else {
            echo "None";
        }
        echo "</td>";
        echo "<td><a href='updatePassword.php?empId=$curEmpId'>" . $emp->getPassword() . "</a></td>";
        echo "</tr>";
    }
    echo "</table>";
}

?>

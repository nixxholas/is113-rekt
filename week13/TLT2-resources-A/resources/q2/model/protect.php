<?php

/*
    Name:

    Email:
*/

require_once 'common.php';
# == Part E : ENTER CODE HERE ==

if (!isset($_SESSION["empId"])) {
    session_destroy();
    header("location:login-view.html");
    exit;
}
?>
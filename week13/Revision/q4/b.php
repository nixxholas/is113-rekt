<?php

    session_start();
    
    header("location:c.php");
    exit;

    $_SESSION["name"] = "John";
    $_SESSION["color"] = "blue";
    $_SESSION["food"] = "burgers";

    unset($_SESSION["food"]);

?>
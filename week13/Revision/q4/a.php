<?php

    session_start();

    $_SESSION["name"] = "Mary";
    $_SESSION["color"] = "red";
    $_SESSION["food"] = "bubble tea";
    
    header("location:b.php");
    exit;
    

?>
<?php

    session_start();

    echo $_SESSION["name"] . " likes " . $_SESSION["color"];
    echo " and " . $_SESSION["food"];


?>
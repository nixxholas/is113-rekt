<?php

    spl_autoload_register(
        function($class){
            require_once "$class.php";
        }
    );

    // retrieve all toys from DAO
    $dao = new ToyDAO();
    $toy_arr = $dao->getAllToys();

    echo "The List of Toys";
    echo "<ul>";
    foreach ($toy_arr as $toy)
    echo "<li>" . $toy->getType() . "</li>";
    echo "</ul>";





?>
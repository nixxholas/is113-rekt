<?php

    //var_dump($_POST);

    if (isset($_POST["restaurant"])){

        // process to print out

        $restaurants = $_POST["restaurant"];

        echo "<ul>";
        foreach ($restaurants as $restaurant){
            echo "<li> $restaurant </li>";
        }
        echo "</ul>";


    }
    else{
        // no selection
        echo "You did not make any selection. <br>";
    }


    




?>
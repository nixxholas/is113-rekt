<?php

    echo "<h3>In another.php</h3>";

    var_dump($_GET);

    if (isset($_GET["submitbtn"])){
        echo "Now I know the secret <br>";
    }

    if (isset($_GET["secret"])){
        $msg = $_GET["secret"];
        echo "The secret is " . $msg;
    }
    

?>
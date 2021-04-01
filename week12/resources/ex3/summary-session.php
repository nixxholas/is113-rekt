
<?php
    // YOUR CODE GOES HERE
    session_start();
    echo "Name " . $_SESSION["name"];
    echo "Age " . $_SESSION["age"];

    if (isset($_POST["hobby"]))
        $_SESSION["hobby"] = $_POST["hobby"];
    echo "Hobby " . $_SESSION["hobby"];

?>
